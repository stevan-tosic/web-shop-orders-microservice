import React, { Component, Fragment } from 'react';
import { connect } from 'react-redux';
import { NavLink, withRouter } from 'react-router-dom';
import { FormattedMessage } from 'react-intl';
import * as PropTypes from 'prop-types';
import {
  UncontrolledDropdown, DropdownToggle, DropdownMenu, DropdownItem,
} from 'reactstrap';
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
class MainMenuDesktop extends Component {
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

  componentDidUpdate(prevProps) {
    const { impersonateUserSuccess, exitImpersonateSessionSuccess } = this.props;

    if (
      (!prevProps.impersonateUserSuccess && impersonateUserSuccess)
      || (!prevProps.exitImpersonateSessionSuccess && exitImpersonateSessionSuccess)
    ) {
      window.location.replace(withLang(routeCodes.HOME));
    }
  }

  handleLogout = (e) => {
    e.preventDefault();
    const { dispatch } = this.props;

    dispatch(logoutUser());
  };

  stopImpersonatingUser = () => {
    const { dispatch } = this.props;
    dispatch(exitImpersonateSession());
  };

  showTaskNumberNotification = () => {
    const { taskNotificationNumber } = this.props;
    return parseInt(taskNotificationNumber, 10) > 0;
  };

  renderTaskLink = () => {
    const { userData, taskNotificationNumber } = this.props;

    return (
      <NavLink
        activeClassName='main-navigation__right-section__nav-item--active'
        className='main-navigation__right-section__nav-item'
        exact
        to={ withLang(`${ withLang(routeCodes.COMPANIES) }/${ userData.companySlug }/tasks`) }
      >
        { this.showTaskNumberNotification() && (
          <span className='main-navigation__right-section__nav-item-notification'>
            { taskNotificationNumber }
          </span>
        ) }
        <span className='icon main-navigation__right-section__nav-item-icon icon-medium-Notification' />
        <span className='main-navigation__right-section__nav-item-caption'>
          <FormattedMessage id='navigation.tasks' />
        </span>
      </NavLink>
    );
  };

  renderMeetingsLink = () => {
    return (
      <NavLink
        activeClassName='main-navigation__right-section__nav-item--active'
        className='main-navigation__right-section__nav-item'
        exact
        to={ withLang(routeCodes.MEETINGS) }
      >
        <span className='icon main-navigation__right-section__nav-item-icon icon-medium-Meetings' />
        <span className='main-navigation__right-section__nav-item-caption'>
          <FormattedMessage id='navigation.meetings' />
        </span>
      </NavLink>
    );
  };

  render() {
    const {
      navigation,
      setSubNavigation,
      userData,
      setActiveItem,
      toggleSearch,
      showSearch,
      unreadThreads,
      meetingAccess,
    } = this.props;

    if (userData === null || !userData.isLoggedIn) {
      window.location = formatUrlToSecure(process.env.APP_BASE_DOMAIN);
      return null;
    }

    const navItemClass = 'main-navigation__right-section__nav-item';
    const navItemActiveClass = `${ navItemClass }--active`;
    const isSearchPage = window.location.toString().includes('search');
    const hasAccess = userData
      && userData.companyType !== Company.TYPE_ETINERARY
      && userData.partnerType !== Partner.TYPE_BASIC;

    return (
      <nav className='main-navigation'>
        <div className='container'>
          <div className='row middle-xs'>
            <NavLink className='main-navigation__logo' to={ withLang(routeCodes.HOME) }>
              <span className='main-navigation__logo-icon icon-Elite' />
            </NavLink>

            <div className='main-navigation__links'>
              { Object.keys(navigation).map(key => {
                if (externalRoutes.includes(key)) {
                  return (
                    <a key={ key } className='main-navigation__links-item' href={ routeCodes[key.toUpperCase()] }>
                      <FormattedMessage id={ `navigation.${ key }` } />
                    </a>
                  );
                }

                return (
                  <NavLink
                    key={ key }
                    activeClassName='main-navigation__links-item--active'
                    className='main-navigation__links-item'
                    exact={ key === 'home' }
                    to={ withLang(routeCodes[key.toUpperCase()]) }
                    onClick={ () => setSubNavigation(key) }
                    isActive={ (match, location) => setActiveItem(match, location, key) }
                  >
                    <FormattedMessage id={ `navigation.${ key }` } />
                  </NavLink>
                );
              }) }
            </div>

            <div className='main-navigation__right-section'>
              { hasAccess && (
                <Fragment>
                  <div className='main-navigation__right-section__search-wrapper'>
                    <span
                      className={ `${ navItemClass } ${ isSearchPage && navItemActiveClass }` }
                      onClick={ toggleSearch }
                      onKeyPress={ toggleSearch }
                      role='presentation'
                    >
                      <span className='icon main-navigation__right-section__nav-item-icon icon-SearchMedium' />
                      <span className='main-navigation__right-section__nav-item-caption'>
                        <FormattedMessage id='navigation.search' />
                      </span>
                    </span>

                    { showSearch && <Search toggleSearch={ toggleSearch } /> }
                  </div>

                  { userData.companyVisibility !== Company.VISIBILITY_HIDDEN && (
                    <NavLink
                      activeClassName={ `${ navItemActiveClass }` }
                      className={ navItemClass }
                      exact
                      to={ withLang(routeCodes.MESSAGES) }
                    >
                      { unreadThreads && unreadThreads.length > 0 && (
                        <span className='main-navigation__right-section__nav-item-notification'>
                          { unreadThreads.length }
                        </span>
                      ) }
                      <span className='icon main-navigation__right-section__nav-item-icon icon-medium-Chat' />
                      <span className='main-navigation__right-section__nav-item-caption'>
                        <FormattedMessage id='navigation.messages' />
                      </span>
                    </NavLink>
                  ) }
                </Fragment>
              ) }
              { meetingAccess && this.renderMeetingsLink() }
              { userData && userData.companySlug && this.renderTaskLink() }
              <UncontrolledDropdown className='dropdown-profile'>

                <DropdownToggle tag='a' className='main-navigation__right-section__nav-item dropdown-profile__toggle'>
                  <img className='dropdown-profile__toggle-avatar' alt='avatar' src={ userData.avatar } />
                  <span className='main-navigation__right-section__nav-item-caption dropdown-profile__toggle-caption'>
                    { userData.userType === Impersonate.IS_IMPERSONATED ? (
                      <span className='
                        main-navigation__right-section__nav-item-caption
                        dropdown-profile__toggle-caption dropdown-profile__toggle-caption--impersonated-user'
                      >
                        <span className='badge badge-red'>
                          { `${ userData.firstName.substr(0, 6) }...` }
                        </span>
                      </span>
                    ) : (
                      <span
                        className='main-navigation__right-section__nav-item-caption dropdown-profile__toggle-caption'
                      >
                        <FormattedMessage id='me' />
                      </span>
                    ) }
                  </span>
                </DropdownToggle>

                <DropdownMenu right>
                  <DropdownItem tag='div' className='dropdown-item-username'>
                    <div className='dropdown-item-link'>
                      <FormattedMessage id='hello' />
                      { ', ' }
                      { userData.firstName }
                    </div>
                  </DropdownItem>

                  <div className='dropdown-menu-group'>
                    <DropdownItem tag='div'>
                      <NavLink
                        className='dropdown-item-link'
                        exact
                        to={ `${ withLang(routeCodes.MY_PROFILE) }` }
                      >
                        <span className='icon icon-small-Edit' />
                        <FormattedMessage id='editProfile' />
                      </NavLink>
                    </DropdownItem>
                  </div>

                  <div className='dropdown-menu-group'>
                    { userData.userType === Impersonate.IS_IMPERSONATED && (
                      <DropdownItem tag='div'>
                        <li
                          className='dropdown-item-link dropdown-item-link--impersonated-user'
                          onClick={ this.stopImpersonatingUser }
                          onKeyPress={ this.stopImpersonatingUser }
                          role='menuitem'
                        >
                          <span className='icon icon-medium-Switch' />
                          <FormattedMessage id='exitImpersonateSession' />
                        </li>
                      </DropdownItem>
                    ) }

                    <DropdownItem tag='div'>
                      <li
                        className='dropdown-item-link'
                        onClick={ this.handleLogout }
                        onKeyPress={ this.handleLogout }
                        role='menuitem'
                        tabIndex='0'
                      >
                        <span className='icon icon-medium-Logout' />
                        <FormattedMessage id='logout' />
                      </li>
                    </DropdownItem>
                  </div>
                </DropdownMenu>
              </UncontrolledDropdown>
            </div>
          </div>
        </div>
      </nav>
    );
  }
}
