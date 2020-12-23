const webpack = require('webpack');
const path = require('path');
const ManifestPlugin = require('webpack-manifest-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

const paths = {
  source: path.join(__dirname, '../source'),
  assets: path.join(__dirname, '../source/assets/'),
  css: path.join(__dirname, '../source/css/'),
  fonts: path.join(__dirname, '../source/assets/fonts'),
  images: path.join(__dirname, '../source/assets/img'),
  navigation: path.join(__dirname, '../source/assets/navigation'),
  javascript: path.join(__dirname, '../source/js'),
  svg: path.join(__dirname, '../source/assets/svg'),
  build: path.join(__dirname, '../build'),
};

const outputFiles = require('./output-files').outputFiles;

const NODE_ENV = process.env.NODE_ENV || 'development';
const IS_DEVELOPMENT = NODE_ENV === 'development';
const IS_PRODUCTION = NODE_ENV === 'production';
const API_PATH = process.env.API_PATH || 'https://api.elite.local';
const APP_BASE_DOMAIN = process.env.APP_BASE_DOMAIN || 'elite.local';
const ASSET_PATH = process.env.ASSET_PATH || 'https://platform.elite.local/assets';
const GOOGLE_RECAPTCHA_SITE_KEY = process.env.GOOGLE_RECAPTCHA_SITE_KEY
  || '6Lf2VmkUAAAAAHmLxIXB-8b4hWZ7veT-6SHUe92G';
const CLUBDEAL_URL = process.env.CLUBDEAL_URL || '';
const ETINERARY_URL = process.env.ETINERARY_URL || '';
const GROWTH_URL = process.env.GROWTH_URL || '';
const PUBLIC_WEBSITE_URL = process.env.PUBLIC_WEBSITE_URL || '';
const BUSINESS_MATCHING_URL = process.env.BUSINESS_MATCHING_URL || '';
const devtool = IS_DEVELOPMENT ? '' : 'cheap-eval-source-map';

const THRON_CLIENT_ID = process.env.THRON_CLIENT_ID || '';
const THRON_CLIENT_LINK = process.env.THRON_CLIENT_LINK || '';
const PROGRAMME_TEASER_VIDEO_LINK = process.env.PROGRAMME_TEASER_VIDEO_LINK || '';
const FUNDING_TEASER_VIDEO_LINK = process.env.FUNDING_TEASER_VIDEO_LINK || '';

const MESSAGING_WEBSOCKET_URL = process.env.MESSAGING_WEBSOCKET_URL || '';

const GA_TRACKING_ID = process.env.GA_TRACKING_ID || '';
const COMPASS_TYPE_DIGITAL = process.env.ETINERARY_URL || '';
const COMPASS_TYPE_GROWTH = process.env.ECUT_URL || '';
// ----------
// PLUGINS
// ----------

// Shared plugins
const plugins = [

  // Extracts CSS to a file
  new MiniCssExtractPlugin({
    filename: outputFiles.css,
  }),

  // Ignore locales for moment.js
  new webpack.IgnorePlugin(/^\.\/locale$/, /moment$/),

  // Injects env variables to our app
  new webpack.DefinePlugin({
    'process.env': {
      NODE_ENV: JSON.stringify(NODE_ENV),
      API_PATH: JSON.stringify(API_PATH),
      APP_BASE_DOMAIN: JSON.stringify(APP_BASE_DOMAIN),
      ASSET_PATH: JSON.stringify(ASSET_PATH),
      GOOGLE_RECAPTCHA_SITE_KEY: JSON.stringify(GOOGLE_RECAPTCHA_SITE_KEY),
      MESSAGING_WEBSOCKET_URL: JSON.stringify(MESSAGING_WEBSOCKET_URL),
      CLUBDEAL_URL: JSON.stringify(CLUBDEAL_URL),
      ETINERARY_URL: JSON.stringify(ETINERARY_URL),
      GROWTH_URL: JSON.stringify(GROWTH_URL),
      BUSINESS_MATCHING_URL: JSON.stringify(BUSINESS_MATCHING_URL),
      PUBLIC_WEBSITE_URL: JSON.stringify(PUBLIC_WEBSITE_URL),
      THRON_CLIENT_LINK: JSON.stringify(THRON_CLIENT_LINK),
      THRON_CLIENT_ID: JSON.stringify(THRON_CLIENT_ID),
      PROGRAMME_TEASER_VIDEO_LINK: JSON.stringify(PROGRAMME_TEASER_VIDEO_LINK),
      FUNDING_TEASER_VIDEO_LINK: JSON.stringify(FUNDING_TEASER_VIDEO_LINK),
      GA_TRACKING_ID: JSON.stringify(GA_TRACKING_ID),
      COMPASS_TYPE_GROWTH: JSON.stringify(COMPASS_TYPE_GROWTH),
      COMPASS_TYPE_DIGITAL: JSON.stringify(COMPASS_TYPE_DIGITAL),
    },
  }),

  // Manifest plugin for PWA
  new ManifestPlugin({
    fileName: 'manifest.json',
    basePath: '/',
    seed: {
      'short_name': 'HPS',
      'name': 'Happy Shops',
      'start_url': '/',
      'icons': [
        {
          'src': '/assets/img/android-chrome-192x192.png',
          'sizes': '192x192',
          'type': 'image/png',
        },
        {
          'src': '/assets/img/android-chrome-512x512.png',
          'sizes': '512x512',
          'type': 'image/png',
        },
      ],
      'background_color': '#ffffff',
      'theme_color': '#ffffff',
      'display': 'standalone',
      'orientation': 'portrait',
    },
  }),
];

if (IS_DEVELOPMENT) {
  // Shared development plugins
  plugins.push(

    // Enables pretty names instead of index
    new webpack.NamedModulesPlugin()
  );
}

// ----------
// RULES
// ----------

// Shared rules
const rules = [

  // Babel loader
  {
    test: /\.(js|jsx)$/,

    // fix for IE and safari - https://github.com/babel/babel-loader/issues/171#issuecomment-163385201
    exclude: /node_modules\/(?!react-language|query-string|strict-uri-encode|split-on-first|dfa|yoga-layout-prebuilt)/,
    use: ['babel-loader'],
  },

  // Typescript loader
  {
    test: /\.(ts|tsx)$/,

    // fix for IE and safari - https://github.com/babel/babel-loader/issues/171#issuecomment-163385201
    exclude: /node_modules\/(?!react-language|query-string|strict-uri-encode|split-on-first|dfa|yoga-layout-prebuilt)/,
    use: ['awesome-typescript-loader'],
  },

  // Images
  {
    test: /\.(png|gif|jpg|svg)$/,
    include: paths.images,
    use: [
      {
        loader: `file-loader?name=[path][name].[ext]&context=${ paths.source }`,
      },
    ],
  },

  // Fonts
  {
    test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
    include: paths.fonts,
    use: [
      {
        loader: `file-loader?name=[path][name].[ext]&context=${ paths.source }`,
      },
    ],
  },

  // Navigation
  {
    test: /\.(js|jsx|css)$/,
    include: paths.navigation,
    use: [
      {
        loader: `file-loader?name=[path][name].[ext]&context=${ paths.source }`,
      },
    ],
  },

  // SVG are imported as react components
  {
    test: /\.svg$/,
    use: [
      {
        loader: 'babel-loader',
      },
      {
        loader: 'react-svg-loader',
        options: {
          svgo: {
            plugins: [
              {
                removeTitle: true,
              },
            ],
            floatPrecision: 3,
          },
        },
      },
    ],
    include: paths.svg,
  },
];

// For production ExtractTextPlugin is used
if (IS_PRODUCTION) {
  rules.push(
    {
      test: /\.scss$/,
      use: [
        MiniCssExtractPlugin.loader,
        {
          loader: 'css-loader',
          options: {
            importLoaders: 1,
            minimize: true,
          },
        },
        'sass-loader',
      ],
    }
  );
  rules.push(
    {
      test: /\.css$/,
      exclude: paths.navigation,
      loaders: ['style-loader', 'css-loader', 'postcss-loader'],
    }
  );
} else {
  rules.push(
    {
      test: /\.scss$/,
      exclude: /node_modules/,
      use: [
        {
          loader: 'style-loader',
          options: { sourceMap: true },
        },
        {
          loader: 'css-loader',
          options: {
            importLoaders: 1,
            sourceMap: true,
          },
        },
        {
          loader: 'sass-loader',
          options: { sourceMap: true },
        },
      ],
    }
  );
  rules.push(
    {
      test: /\.css$/,
      exclude: paths.navigation,
      loaders: ['style-loader', 'css-loader'],
    }
  );
}

// ----------
// RESOLVE
// ----------

const resolve = {
  extensions: ['.webpack-loader.js', '.web-loader.js', '.loader.js', '.js', '.jsx'],
  modules: [
    'node_modules',
    paths.javascript,
    paths.assets,
    paths.css,
  ],
};

// ----------
// CLI STATS
// ----------

const stats = {
  colors: true,
  warnings: true,
  timings: false,
  assets: false,
  children: false,
  chunks: false,
  hash: false,
  modules: false,
  publicPath: false,
  version: false,
};

module.exports = {
  IS_DEVELOPMENT,
  IS_PRODUCTION,
  THRON_CLIENT_ID,
  NODE_ENV,
  API_PATH,
  ASSET_PATH,
  GOOGLE_RECAPTCHA_SITE_KEY,
  MESSAGING_WEBSOCKET_URL,
  outputFiles,
  paths,
  plugins,
  resolve,
  rules,
  stats,
  devtool,
};
