import 'babel-polyfill';
import 'isomorphic-fetch';
import 'global.scss';

import { BrowserRouter } from 'react-router-dom';
import { AppContainer } from 'react-hot-loader';
import { Provider } from 'react-redux';
import { addLocaleData } from 'react-intl';
import { WindowManager } from 'react-window-decorators';

import React from 'react';
import ReactDOM from 'react-dom';
import configureStore from 'config/store';
import App from 'views/App';

import localeEn from 'react-intl/locale-data/en';
import localeIt from 'react-intl/locale-data/it';
import localeFr from 'react-intl/locale-data/fr';
import localeDe from 'react-intl/locale-data/de';

import { breakpoints } from './constants/breakpoints';

export const store = configureStore().store;

new WindowManager([ // eslint-disable-line no-new
  {
    name: 'mobile',
    media: '(min-width: 0)',
  },
  {
    name: 'desktop',
    media: `(min-width: ${ breakpoints.SMALL }px)`,
  },
], 50);

function startApp() {
  addLocaleData([
    ...localeEn,
    ...localeIt,
    ...localeFr,
    ...localeDe,
  ]);

  ReactDOM.render(
    <AppContainer>
      <Provider store={ store }>
        <BrowserRouter>
          <App />
        </BrowserRouter>
      </Provider>
    </AppContainer>,
    document.getElementById('root')
  );
}

if (!global.Intl) {
  require.ensure([
    'intl',
  ], require => {
    require('intl');
    startApp();
  });
} else {
  startApp();
}
