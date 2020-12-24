import React, { Component, Fragment } from 'react';
import { Redirect, withRouter } from 'react-router-dom';
import { IntlProvider, FormattedMessage, injectIntl } from 'react-intl';
import * as PropTypes from 'prop-types';
import connect from 'react-redux/es/connect/connect';
import { Helmet } from 'react-helmet';
import { detectLanguage } from '../helpers/helpers';
import Header from '../layouts/Header';
import PublicRoutes from '../routes/PublicRoutes';
import { updateActiveLanguage } from '../actions/initInfo';
import Footer from '../layouts/footer/Footer';

@withRouter
@connect(state => ({
  localizationMessages: state.initInfo.localizationMessages,
  userData: state.initInfo.userInfo,
  logoutSuccess: state.initInfo.logoutSuccess,
}))
class Router extends Component {
  static propTypes = {
    dispatch: PropTypes.func,
    match: PropTypes.object,
    location: PropTypes.object,
    localizationMessages: PropTypes.array,
    userData: PropTypes.object,
    logoutSuccess: PropTypes.bool,
    activeLanguage: PropTypes.string,
  };

  componentDidMount() {
    const {
      dispatch,
      match: {
        params: {
          language,
        },
      },
    } = this.props;

    if (language) {
      dispatch(updateActiveLanguage(language));
    }
  }

  componentDidUpdate(prevProps) {
    const {
      dispatch,
      match: {
        params: {
          language,
        },
      },
    } = this.props;

    if (language && language !== prevProps.match.params.language) {
      dispatch(updateActiveLanguage(language));
    }
  }

  handleRedirect = () => {
    const { match, location, userData, dispatch } = this.props;
    const queryString = location.search || '';

    if (userData && userData.preferredLanguage) {
      dispatch(updateActiveLanguage(userData.preferredLanguage));

      return <Redirect to={ `/${ userData.preferredLanguage }${ match.url }${ queryString }` } />;
    }

    dispatch(updateActiveLanguage(detectLanguage()));

    return <Redirect to={ `/${ detectLanguage() }${ match.url }${ queryString }` } />;
  };

  render() {
    const { match, localizationMessages } = this.props;
    const language = match.params.language;

    if (['it', 'fr'].includes(language)) {
      alert('page should redirect')
    }

    if (!language) {
      return this.handleRedirect();
    }

    return (
      <IntlProvider textComponent={ Fragment } locale={ language } messages={ localizationMessages[language] }>
        <div className='App'>
          <Helmet>
            <html lang={ language } />
            <meta charSet='utf-8' />
            <title>
              { localizationMessages[language]['title'] }
            </title>
            <meta name="description" content="Happy Shops description" />
          </Helmet>
          <Header />
          <div className='Page'>
            <PublicRoutes />
          </div>
          <Footer />
        </div>
      </IntlProvider>
    );
  }
}

export default Router;
