import React, { Component } from 'react';
import { NavLink, withRouter } from 'react-router-dom';
import { FormattedMessage } from 'react-intl';
import * as PropTypes from 'prop-types';
import { adminRouteCodes, withLang } from '../../../../constants/routes';

export default @withRouter
class AdminMenu extends Component {
  static propTypes = {
    navigation: PropTypes.object,
  };

  renderLink = (key, url) => {
    return (
      <a
        key={ key }
        className='secondary-navigation__links-item'
        href={ url }
      >
        <FormattedMessage id={ `navigation.${ key }` } />
      </a>
    );
  };

  renderNavLink = (key, to) => {
    return (
      <NavLink
        key={ key }
        activeClassName='secondary-navigation__links-item--active'
        className='secondary-navigation__links-item'
        to={ to }
      >
        <FormattedMessage id={ `navigation.${ key }` } />
      </NavLink>
    );
  };

  render() {
    const {
      navigation,
    } = this.props;

    return (
      <nav className='secondary-navigation admin-navigation'>
        <div className='container'>
          <div className='row middle-xs'>
            <div className='secondary-navigation__links'>
              <div className='secondary-navigation__links__admin'>ADMIN</div>
              { Object.keys(navigation).map(key => {
                return (key === 'growth')
                  ? this.renderLink(key, process.env.GROWTH_URL)
                  : this.renderNavLink(key, withLang(adminRouteCodes[key.toUpperCase()]));
              }) }
            </div>
          </div>
        </div>
      </nav>
    );
  }
}
