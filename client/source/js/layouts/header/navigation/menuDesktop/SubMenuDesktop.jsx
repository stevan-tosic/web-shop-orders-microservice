import React, { Component } from 'react';
import { NavLink, withRouter } from 'react-router-dom';
import { FormattedMessage } from 'react-intl';
import * as propTypes from 'prop-types';
import { Container, Row } from 'reactstrap';
import {
  publicPath, externalRoutes, dynamicRoutes, routeCodes, withLang,
} from '../../../../constants/routes';
import { TargetBlank } from '../../../../../_v2/js/constants';

export default @withRouter
class SubMenuDesktop extends Component {
  static propTypes = {
    navigation: propTypes.object,
  };

  setActiveItem = (match, location, item) => {
    const pathName = location.pathname.toLowerCase();
    const itemName = item.toLowerCase();
    /* Checks if route is Partners Companies and checks for valid slug in content. */
    const partnerCompaniesRegex = /partners\/(?:[:]?[a-z0-9-]*)\/companies/g;
    const isPartnerCompaniesRoute = pathName.match(partnerCompaniesRegex) && itemName.match(partnerCompaniesRegex);
    let isActiveItem = false;

    // Exception for directory since the company profile is not under directory url
    if (itemName === withLang(routeCodes.DIRECTORY)) {
      if (pathName.includes(withLang(routeCodes.COMPANIES)) || pathName.includes(withLang(routeCodes.PARTNERS))) {
        isActiveItem = true;
      }
    }

    /**
     * Standard check for selected item.
     */
    if (pathName.includes(itemName) || isPartnerCompaniesRoute) {
      isActiveItem = true;
    }

    /**
     * This is hack for basic partner which has not available default dashboard sub menu,
     * and first one must be selected if not selected any of available.
     */
    if (!isActiveItem
      && pathName.includes('partner')
      && !pathName.includes('partner/library')
      && item.toLowerCase().includes('company')
      && !pathName.toLowerCase().match(partnerCompaniesRegex)
    ) {
      isActiveItem = true;
    }

    return isActiveItem;
  };

  getExternalNavigationClass = () => {
    let activeClass = 'secondary-navigation__links-item';

    // eslint-disable-next-line no-restricted-globals
    if (location.pathname === withLang(routeCodes.COMPASS_TEASER)) {
      activeClass += ' secondary-navigation__links-item--active';
    }

    return activeClass;
  };

  render() {
    const { navigation } = this.props;
    const partner = navigation && navigation.partner_companies && navigation.partner_companies.partner;

    return (
      <nav className='secondary-navigation sub-navigation'>
        <Container>
          <Row className='middle-xs'>
            <div className='secondary-navigation__links'>
              {
                Object.keys(navigation).map(key => {
                  if (externalRoutes.includes(key)) {
                    return (
                      <a
                        key={ key }
                        { ...TargetBlank }
                        className={ this.getExternalNavigationClass() }
                        href={ navigation[key].link }
                      >
                        <FormattedMessage id={ `navigation.${ key }` } />
                      </a>
                    );
                  }

                  if (dynamicRoutes.includes(key)) {
                    return (
                      <NavLink
                        key={ key }
                        activeClassName='secondary-navigation__links-item--active'
                        className='secondary-navigation__links-item'
                        isActive={
                          (match, location) => this.setActiveItem(
                            match,
                            location,
                            withLang(routeCodes[key.toUpperCase()])
                          ) }
                        exact
                        to={ withLang(`${ publicPath }${ navigation[key].route }`) }
                      >
                        { partner ? (
                          <FormattedMessage id={ `navigation.${ navigation[key].label }` } values={ { partner } } />
                        ) : (
                          <FormattedMessage id={ `navigation.${ navigation[key].label }` } />
                        ) }
                      </NavLink>
                    );
                  }

                  return (
                    <NavLink
                      key={ key }
                      activeClassName='secondary-navigation__links-item--active'
                      className='secondary-navigation__links-item'
                      exact
                      isActive={
                        (match, location) => {
                          return routeCodes[key.toUpperCase()] && this.setActiveItem(
                            match,
                            location,
                            withLang(routeCodes[key.toUpperCase()])
                          );
                        } }
                      to={ withLang(routeCodes[key.toUpperCase()]) }
                    >
                      <FormattedMessage id={ `navigation.${ key }` } />
                    </NavLink>
                  );
                })
              }
            </div>
          </Row>
        </Container>
      </nav>
    );
  }
}
