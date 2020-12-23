import React, { Component } from 'react';
import { NavLink, withRouter } from 'react-router-dom';
import { FormattedMessage } from 'react-intl';
import * as PropTypes from 'prop-types';
import connect from 'react-redux/es/connect/connect';
import {
  externalRoutes, routeCodes, withLang,
} from '../../../../constants/routes';
import { exitImpersonateSession, logoutUser } from '../../../../actions/user/user';
import Search from '../../Search';
import { Company, Impersonate, Partner } from '../../../../constants/entities';
import { formatUrlToSecure } from '../../../../helpers/formatUrlToSecure';

export default
@withRouter
@connect(state => ({
  userData: state.initInfo.userInfo,
  impersonateUserSuccess: state.user.impersonateUserSuccess,
  exitImpersonateSessionSuccess: state.user.exitImpersonateSessionSuccess,
  unreadThreads: state.socketUnreadThread.unreadThreads,
  taskNotificationNumber: state.socketTaskNotifications.taskNotificationNumber,
}))
class MainMenuMobile extends Component {
  static propTypes = {
    navigation: PropTypes.object,
    setSubNavigation: PropTypes.func,
    setActiveItem: PropTypes.func,
    dispatch: PropTypes.func,
    userData: PropTypes.object,
    impersonateUserSuccess: PropTypes.bool,
    exitImpersonateSessionSuccess: PropTypes.bool,
    toggleSearch: PropTypes.func,
    showSearch: PropTypes.bool,
    unreadThreads: PropTypes.array,
    taskNotificationNumber: PropTypes.number,
    meetingAccess: PropTypes.bool,
  };

  constructor(props) {
    super(props);

    this.state = {
      showMenuPanel: false,
    };
  }

  componentDidUpdate(prevProps) {
    const {
      impersonateUserSuccess,
      exitImpersonateSessionSuccess,
    } = this.props;

    if (
      (!prevProps.impersonateUserSuccess && impersonateUserSuccess)
      || (!prevProps.exitImpersonateSessionSuccess && exitImpersonateSessionSuccess)
    ) {
      window.location.replace(withLang(routeCodes.HOME)); // redirect with page reload on purpose
    }
  }

  showMenuPanel = () => {
    const {
      showMenuPanel,
    } = this.state;

    this.setState({ showMenuPanel: !showMenuPanel });
  };

  handleLogout = (e) => {
    e.preventDefault();

    const {
      dispatch,
    } = this.props;

    dispatch(logoutUser());
  };

  stopImpersonatingUser = () => {
    const {
      dispatch,
    } = this.props;

    dispatch(exitImpersonateSession());
  };

  showTaskNumberNotification = () => {
    const {
      taskNotificationNumber,
    } = this.props;

    if (taskNotificationNumber && taskNotificationNumber > 0) {
      return true;
    }

    return false;
  };

  renderTaskLink = () => {
    const {
      userData,
      taskNotificationNumber,
    } = this.props;

    return (
      <NavLink
        activeClassName='main-navigation-mobile__right-section__nav-item--active'
        className='main-navigation-mobile__right-section__nav-item'
        exact
        to={ withLang(`${ withLang(routeCodes.COMPANIES) }/${ userData.companySlug }/tasks`) }
      >
        { this.showTaskNumberNotification()
        && (
          <span className='main-navigation-mobile__right-section__nav-item-notification'>
            { taskNotificationNumber }
          </span>
        ) }
        <span className='main-navigation-mobile__right-section__nav-item-icon icon-medium-Notification' />
      </NavLink>

    );
  };

  render() {
    const {
      showMenuPanel,
    } = this.state;

    const {
      navigation,
      setSubNavigation,
      setActiveItem,
      userData,
      toggleSearch,
      showSearch,
      unreadThreads,
      meetingAccess,
    } = this.props;

    if (userData === undefined || userData.isLoggedIn === false) {
      window.location = formatUrlToSecure(process.env.APP_BASE_DOMAIN);
      return null;
    }

    const hasAccess = userData
      && userData.companyType !== Company.TYPE_ETINERARY
      && userData.partnerType !== Partner.TYPE_BASIC;

    return (
      <nav className='main-navigation-mobile'>
        { showSearch && <Search toggleSearch={ toggleSearch } /> }

        <span
          className='main-navigation-mobile__toggle'
          onClick={ this.showMenuPanel }
          onKeyPress={ this.showMenuPanel }
          role='presentation'
        >
          <span className='icon main-navigation-mobile__toggle-icon icon-medium-Hamburger' />
        </span>

        <a className='main-navigation-mobile__logo' href={ withLang(routeCodes.HOME) } aria-label='Logo'>
          <span className='main-navigation-mobile__logo-icon icon-Elite' />
        </a>

        { /* Mobile main navigation bar */ }
        <div className='main-navigation-mobile__right-section'>

          { hasAccess
          && (userData.companyVisibility !== Company.VISIBILITY_HIDDEN)
          && (
            <NavLink
              activeClassName='main-navigation-mobile__right-section__nav-item--active'
              className='main-navigation-mobile__right-section__nav-item'
              exact
              to={ withLang(routeCodes.MESSAGES) }
            >
              { unreadThreads && unreadThreads.length > 0
              && (
                <span className='main-navigation-mobile__right-section__nav-item-notification'>
                  { unreadThreads.length }
                </span>
              ) }
              <span className='main-navigation-mobile__right-section__nav-item-icon icon-medium-Chat' />
            </NavLink>
          ) }

          { meetingAccess
          && (
            <NavLink
              activeClassName='main-navigation-mobile__right-section__nav-item--active'
              className='main-navigation-mobile__right-section__nav-item'
              exact
              to={ withLang(routeCodes.MEETINGS) }
            >
              <span className='main-navigation-mobile__right-section__nav-item-icon icon-medium-Meetings' />
            </NavLink>
          ) }

          {
            userData && userData.companySlug
            && (
              this.renderTaskLink()
            )
          }
          { hasAccess
          && (
            <span
              className='main-navigation-mobile__right-section__nav-item'
              onClick={ toggleSearch }
              onKeyPress={ toggleSearch }
              role='presentation'
            >
              <span className='main-navigation-mobile__right-section__nav-item-icon icon-SearchMedium' />
            </span>
          ) }

        </div>
        { /* --Mobile main navigation bar */ }

        { /* Mobile main navigation panel */ }
        { showMenuPanel
        && (
          <div>
            <div className='navigation-panel-mobile'>
              <div className='navigation-panel-mobile__scroll'>
                <div className='navigation-panel-mobile__header'>
                  <span
                    className='navigation-panel-mobile__header__close'
                    onClick={ this.showMenuPanel }
                    onKeyPress={ this.showMenuPanel }
                    role='presentation'
                  >
                    <span className='navigation-panel-mobile__header__close-icon icon-medium-Close' />
                  </span>

                  <img
                    className='navigation-panel-mobile__header__avatar'
                    alt='avatar'
                    src={ userData.avatar }
                  />

                  <div className='navigation-panel-mobile__header__profile'>
                    { userData.userType === Impersonate.IS_IMPERSONATED
                      ? (
                        <div>
                          <span
                            className='
                              navigation-panel-mobile__header__profile-name
                              navigation-panel-mobile__header__profile-name--impersonated-user'
                          >
                            { userData.firstName }
                            { ' ' }
                            { userData.lastName }
                          </span>
                          <br />
                          <span
                            className='
                            navigation-panel-mobile__header__profile-email
                            navigation-panel-mobile__header__profile-email--impersonated-user'
                          >
                            { userData.email }
                          </span>
                        </div>
                      )
                      : (
                        <div>
                          <span className='navigation-panel-mobile__header__profile-name'>
                            { userData.firstName }
                            { ' ' }
                            { userData.lastName }
                          </span>
                          <br />
                          <span className='navigation-panel-mobile__header__profile-email'>
                            { userData.email }
                          </span>
                        </div>
                      )
                    }
                  </div>
                </div>

                <div className='navigation-panel-mobile__body'>

                  <div className='navigation-panel-mobile__body__group group-main'>
                    {
                      Object.keys(navigation).map(key => {
                        if (externalRoutes.includes(key)) {
                          return (
                            <a
                              key={ key }
                              className='navigation-panel-mobile__body__group__link'
                              href={ routeCodes[key.toUpperCase()] }
                            >
                              <span className={ `icon ${ navigation[key].icon }` } />
                              <FormattedMessage id={ `navigation.${ key }` } />
                            </a>
                          );
                        }

                        return (
                          <NavLink
                            key={ key }
                            activeClassName='navigation-panel-mobile__body__group__link--active'
                            className='navigation-panel-mobile__body__group__link'
                            exact={ key === 'home' }
                            to={ withLang(routeCodes[key.toUpperCase()]) }
                            onClick={ () => {
                              setSubNavigation(key);
                              this.showMenuPanel();
                            } }
                            isActive={ (match, location) => setActiveItem(match, location, key) }
                          >
                            <span className={ `icon ${ navigation[key].icon }` } />
                            <FormattedMessage id={ `navigation.${ key }` } />
                          </NavLink>
                        );
                      })
                    }
                  </div>
                  <div className='navigation-panel-mobile__body__group group-profile'>
                    <NavLink
                      className='navigation-panel-mobile__body__group__link'
                      exact
                      to={ `${ withLang(routeCodes.MY_PROFILE) }` }
                      onClick={ this.showMenuPanel }
                      onKeyPress={ this.showMenuPanel }
                    >
                      <span className='icon icon-small-Edit' />
                      <FormattedMessage id='editProfile' />
                    </NavLink>
                  </div>

                  <div className='navigation-panel-mobile__body__group group-secondary'>
                    { userData.userType === Impersonate.IS_IMPERSONATED
                    && (
                      <li
                        className='
                          navigation-panel-mobile__body__group__link
                          navigation-panel-mobile__body__group__link--impersonated-user'
                        onClick={ this.stopImpersonatingUser }
                        role='presentation'
                      >
                        <span className='icon icon-medium-Switch' />
                        <FormattedMessage id='exitImpersonateSession' />
                      </li>
                    ) }

                    <li
                      className='navigation-panel-mobile__body__group__link'
                      onClick={ this.handleLogout }
                      onKeyPress={ this.handleLogout }
                      role='presentation'
                    >
                      <span className='icon icon-medium-Logout' />
                      <FormattedMessage id='logout' />
                    </li>
                  </div>
                </div>
              </div>
            </div>

            <div
              className='navigation-panel-mobile__overlay'
              onClick={ this.showMenuPanel }
              onKeyPress={ this.showMenuPanel }
              role='presentation'
            />
          </div>
        ) }
        { /* --Mobile main navigation panel */ }

      </nav>
    );
  }
}
