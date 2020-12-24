import React, { Component } from 'react';
import { NavLink, withRouter } from 'react-router-dom';
import * as PropTypes from 'prop-types';
import * as Cookies from 'js-cookie';
import {
  UncontrolledDropdown, DropdownToggle, DropdownMenu, DropdownItem,
} from 'reactstrap';
import { FormattedMessage } from 'react-intl';
import connect from 'react-redux/es/connect/connect';
import { setPreferredLanguage, updateActiveLanguage } from '../../actions/initInfo';

@withRouter
@connect(state => ({
  localizationMessages: state.initInfo.localizationMessages,
  activeLanguage: state.initInfo.activeLanguage,
  userData: state.initInfo.userInfo,
}))
class LanguageSelector extends Component {
  static propTypes = {
    dispatch: PropTypes.func,
    className: PropTypes.string,
    location: PropTypes.object,
    userData: PropTypes.object,
    localizationMessages: PropTypes.array,
    activeLanguage: PropTypes.string,
  };

  onClickHandler = (languageCode) => () => {
    const { dispatch, userData } = this.props;

    Cookies.set('language', languageCode, { domain: `.${ process.env.APP_BASE_DOMAIN }` });
    if (userData) {
      dispatch(setPreferredLanguage(languageCode));
    } else {
      dispatch(updateActiveLanguage(languageCode));
    }
    window.scrollTo(0, 0);
  };

  updateRouteWithNewLanguage(language) {
    const { location } = this.props;

    return location.pathname.replace(/^(\/).{2}(\/.*)$/gm, `$1${ language }$2`);
  }

  render() {
    const { className, localizationMessages, activeLanguage } = this.props;

    return (
      <div className={ ` language-switcher-dropdown dropdown dropdown-dark ${ className || '' }` }>
        <UncontrolledDropdown>
          <DropdownToggle caret>
            <FormattedMessage id={ `lang_${ activeLanguage }` } />
          </DropdownToggle>
          <DropdownMenu>
            { Object.keys(localizationMessages).filter((lang) => {
              return lang !== activeLanguage;
            }).map(languageCode => (
              <NavLink key={ languageCode } exact to={ this.updateRouteWithNewLanguage(languageCode) }>
                <DropdownItem
                  key={ languageCode }
                  onClick={ this.onClickHandler(languageCode) }
                >
                  <FormattedMessage id={ `lang_${ languageCode }` } />
                </DropdownItem>
              </NavLink>
            )) }
          </DropdownMenu>
        </UncontrolledDropdown>
      </div>
    );
  }
}

export default LanguageSelector;
