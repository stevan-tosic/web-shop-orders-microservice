const webpack = require('webpack');
const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const glob = require('glob');
const TerserPlugin = require('terser-webpack-plugin');
const OptimizeCssnanoPlugin = require('@intervolga/optimize-cssnano-plugin');
const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const devServer = require('./webpack/dev-server').devServer;

const {
  paths,
  outputFiles,
  rules,
  plugins,
  resolve,
  stats,
  IS_PRODUCTION,
  IS_DEVELOPMENT,
} = require('./webpack/config');

// Default client app entry file
const entry = [
  path.join(paths.javascript, 'client.jsx'),
]
  .concat(glob.sync(`${ paths.navigation }/**/*.{js,css}`))
  .concat(glob.sync(`${ paths.images }/**/*.{png,gif,jpg,svg}`))
  .concat(glob.sync(`${ paths.fonts }/**/*.{woff,woff2,ttf,eot,svg}`));

// Builds index.html from template
plugins.push(
  new HtmlWebpackPlugin({
    template: path.join(paths.source, 'index.html'),
    path: paths.build,
    filename: 'index.html',
    chunksSortMode: 'none',
    minify: {
      collapseWhitespace: true,
      minifyCSS: true,
      minifyJS: true,
      removeComments: true,
      useShortDoctype: true,
    },
  }),
  new OptimizeCssnanoPlugin({
    sourceMap: IS_DEVELOPMENT,
    cssnanoOptions: {
      preset: ['default', {
        discardComments: {
          removeAll: true,
        },
      }],
    },
  })
);

if (IS_DEVELOPMENT) {
  // Development plugins
  plugins.push(

    // Enables HMR
    new webpack.HotModuleReplacementPlugin(),

    // Don't emmit build when there was an error while compiling
    // No assets are emitted that include errors
    new webpack.NoEmitOnErrorsPlugin()
  );

  // For IE babel-polyfill has to be loaded before react-hot-loader
  entry.unshift('babel-polyfill');
}

// Webpack config
module.exports = {
  mode: IS_PRODUCTION ? 'production' : 'development',
  devtool: IS_PRODUCTION ? false : 'eval-source-map',
  context: paths.javascript,
  watch: !IS_PRODUCTION,
  performance: {
    hints: false,
  },
  entry,
  output: {
    path: paths.build,
    publicPath: '/',
    pathinfo: false,
    filename: outputFiles.client,
    crossOriginLoading: 'anonymous',
  },
  module: {
    rules,
  },
  plugins,
  resolve,
  stats,
  devServer,
  optimization: {

    minimizer: [
      new TerserPlugin({
        cache: true,
        parallel: true,
        sourceMap: true, // set to true if you want JS source maps
        terserOptions: {
          compress: false,
          mangle: true,
          ecma: 5,
        },
      }),
      new OptimizeCSSAssetsPlugin({}),
    ],

    // Minification
    minimize: IS_PRODUCTION,
    runtimeChunk: 'single',
    // Creates vendor chunk from modules coming from node_modules folder
    splitChunks: {
      chunks: 'async',
      cacheGroups: {
        vendor: {
          chunks: 'initial',
          test: path.resolve(__dirname, 'node_modules'),
          name: 'vendor',
          filename: outputFiles.vendor,
          enforce: true,
        },
        default: {
          minChunks: 2,
          priority: -20,
          reuseExistingChunk: true,
        },
      },
    },
  },
};
