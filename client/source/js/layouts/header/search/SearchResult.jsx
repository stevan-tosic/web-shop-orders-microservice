import React, { Component } from 'react';
import { NavLink } from 'react-router-dom';
import { FormattedMessage } from 'react-intl';
import PropTypes from 'prop-types';
import { routeCodes, withLang } from '../../../constants/routes';
import SearchResultItem from './SearchResultItem';

export default class SearchResult extends Component {
  static propTypes = {
    results: PropTypes.object,
    query: PropTypes.string,
    toggleSearch: PropTypes.func,
  };

  handleLink = (key, type, slug) => {
    let route = '';
    if (key === 'companies') {
      if (type === 'company') {
        route = routeCodes.COMPANIES;
      }
      if (type === 'partner') {
        route = routeCodes.PARTNERS;
      }
    }

    if (key === 'news') {
      route = routeCodes.NEWS;
    }

    if (key === 'libraries') {
      route = routeCodes.LIBRARY;
    }

    return withLang(`${ route }/${ slug }`);
  };

  render() {
    const {
      results,
      query,
      toggleSearch,
    } = this.props;

    let issetResults = false;

    return (
      <div className='header-search-result'>
        { results
        && (
          Object.keys(results.results).map(key => {
            if (results.results[key] && results.results[key].length) {
              issetResults = true;
              return (
                <div className='header-search-result__section' key={ key }>
                  <div className='header-search-result__section-title'>
                    <FormattedMessage id={ key } />
                  </div>

                  <div className='header-search-result__section-items'>
                    { results.results[key].map(item => {
                      return (
                        <SearchResultItem key={ item.slug }>
                          <NavLink
                            exact
                            to={ this.handleLink(key, item.type, item.slug) }
                            onClick={ toggleSearch }
                            onKeyPress={ toggleSearch }
                          >
                            { item.name }
                          </NavLink>

                        </SearchResultItem>
                      );
                    }) }
                  </div>
                </div>
              );
            }
            return '';
          })
        ) }

        { !issetResults
          ? (
            <div className='header-search-result__section'>
              <div className='header-search-result__section-items'>
                <SearchResultItem>
                  <FormattedMessage id='noResults' />
                </SearchResultItem>
              </div>
            </div>
          ) : (
            <div className='header-search-result__view-all'>
              <NavLink
                to={ withLang(`${ routeCodes.SEARCH }?query=${ query }`) }
                onClick={ toggleSearch }
                onKeyPress={ toggleSearch }
              >
                <span className='label'><FormattedMessage id='viewAll' /></span>
                <span className='icon icon-small-ArrowRight' />
              </NavLink>
            </div>
          )
        }
      </div>
    );
  }
}
