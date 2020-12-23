import React, { Component, Fragment } from 'react';
import { NavLink, withRouter } from 'react-router-dom';
import { FormattedMessage } from 'react-intl';
import * as propTypes from 'prop-types';
import classNames from 'classnames';
import {
  publicPath, dynamicRoutes, externalRoutes, routeCodes, withLang,
} from '../../../../constants/routes';
import { TargetBlank } from '../../../../../_v2/js/constants';

export default @withRouter class SubMenuMobile extends Component {
  static propTypes = {
    navigation: propTypes.object,
    activeNavItem: propTypes.string,
    match: propTypes.object,
  };

  constructor(props) {
    super(props);

    this.state = {
      showMenu: false,
      toggleElBottom: 0,
      toggleElActive: false,
      isActiveExternalNavigation: false,
    };
  }

  /* Show/hide mobile submenu */
  toggleMenu = (e, toggleEl = false) => {
    const { showMenu } = this.state;
    let toggleElActive = false;

    if (toggleEl) {
      toggleElActive = true;
      const toggleRect = e.target.getBoundingClientRect();
      const toggleElBottom = toggleRect.bottom;

      this.setState({ toggleElBottom });
    }

    this.setState({ showMenu: !showMenu, toggleElActive });
  };

  showSubmenu = (activeNavItem, match) => {
    return (
      match.params.page
      && !match.params.page.includes('programme/news/')
      && !match.params.page.includes('programme/trainings/')
      && activeNavItem !== 'messages'
    );
  };

  getExternalNavigationClass = () => {
    const { isActiveExternalNavigation } = this.state;
    let activeClass = 'secondary-navigation-mobile__panel__item';

    if (isActiveExternalNavigation) {
      activeClass += ' secondary-navigation-mobile__panel__item--active';
    }

    return activeClass;
  };

  setActiveDropdownItem = () => {
    this.setState({
      isActiveExternalNavigation: true,
    });
  };

  render() {
    const { navigation, activeNavItem, match } = this.props;
    const { showMenu, toggleElBottom, toggleElActive } = this.state;
    const page = match.params.page;
    const partner = navigation && navigation.partner_companies && navigation.partner_companies.partner;

    return (
      <Fragment>
        { this.showSubmenu(activeNavItem, match) && (
          <nav className='secondary-navigation-mobile'>
            <div className='secondary-navigation-mobile__links'>
              <span
                className='secondary-navigation-mobile__links-item secondary-navigation-mobile__links-item--main'
              >
                { activeNavItem }
                <span className='secondary-navigation-mobile__links-item__delimiter'>/</span>
              </span>

              { Object.values(navigation).map(value => {
                const key = value.label;
                const route = value.route;
                if (
                  page === key
                  || page === `${ activeNavItem }/${ key }`
                  || page === route
                  || page === `${ route }/financials`
                  || page === `${ route }/documents`
                  || page === `${ route }/data_room`
                ) {
                  return (
                    <span
                      className={
                        classNames(
                          'secondary-navigation-mobile__toggle',
                          'secondary-navigation-mobile__links-item',
                          'secondary-navigation-mobile__links-item--active',
                          { show: toggleElActive }
                        ) }
                      key={ key }
                      onClick={ (e) => this.toggleMenu(e, true) }
                      role='presentation'
                    >
                      { partner
                        ? <FormattedMessage id={ `navigation.${ key }` } values={ { partner } } />
                        : <FormattedMessage id={ `navigation.${ key }` } />
                      }
                    </span>
                  );
                }

                return false;
              }) }

              { showMenu && (
                <div className='secondary-navigation-mobile__panel' style={ { top: toggleElBottom } }>
                  { Object.keys(navigation).map(key => {
                    if (externalRoutes.includes(key)) {
                      return (
                        <a
                          onClick={ this.setActiveDropdownItem }
                          key={ key }
                          { ...TargetBlank }
                          className={ this.getExternalNavigationClass() }
                          href={ navigation[key].link }
                        >
                          { partner
                            ? <FormattedMessage id={ `navigation.${ key }` } values={ { partner } } />
                            : <FormattedMessage id={ `navigation.${ key }` } />
                          }
                        </a>
                      );
                    }

                    if (dynamicRoutes.includes(key)) {
                      const label = `navigation.${ navigation[key].label }`;
                      return (
                        <NavLink
                          key={ key }
                          activeClassName='secondary-navigation-mobile__panel__item--active'
                          className='secondary-navigation-mobile__panel__item'
                          exact
                          to={ withLang(`${ publicPath }${ navigation[key].route }`) }
                          onClick={ this.toggleMenu }
                        >
                          { partner
                            ? <FormattedMessage id={ label } values={ { partner } } />
                            : <FormattedMessage id={ label } />
                          }
                        </NavLink>
                      );
                    }

                    return (
                      <NavLink
                        key={ key }
                        activeClassName='secondary-navigation-mobile__panel__item--active'
                        className='secondary-navigation-mobile__panel__item'
                        exact
                        to={ withLang(routeCodes[key.toUpperCase()]) }
                        onClick={ this.toggleMenu }
                      >
                        <FormattedMessage id={ `navigation.${ key }` } />
                      </NavLink>
                    );
                  }) }
                </div>
              ) }

              { showMenu && (
                <div
                  className='secondary-navigation-mobile__overlay'
                  onClick={ this.toggleMenu }
                  onKeyPress={ this.toggleMenu }
                  role='presentation'
                />
              ) }
            </div>
          </nav>
        )}
      </Fragment>
    );
  }
}
