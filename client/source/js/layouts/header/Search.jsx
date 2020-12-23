import React, { Component } from 'react';
import * as PropTypes from 'prop-types';
import { withRouter } from 'react-router-dom';
import connect from 'react-redux/es/connect/connect';
import SearchInput from './search/SearchInput';
import SearchResult from './search/SearchResult';
import SearchOverlay from './search/SearchOverlay';
import { getHeaderElasticsearchResults, clearHeaderSearchResults } from '../../actions/elasticsearchHeader';

export default
@withRouter
@connect(state => ({
  error: state.elasticsearchHeader.error,
  loading: state.elasticsearchHeader.loading,
  elasticSearch: state.elasticsearchHeader.elasticsearchHeader,
}))
class Search extends Component {
  static propTypes = {
    toggleSearch: PropTypes.func,
    elasticSearch: PropTypes.object,
    dispatch: PropTypes.func,
  };

  constructor(props) {
    super(props);

    this.state = {
      search: {
        query: '',
      },
    };
  }

  componentWillUnmount() {
    clearTimeout(this.timer);
  }

  // todo Add http://demo.nimius.net/debounce_throttle
  handleChange = e => {
    const {
      dispatch,
    } = this.props;

    dispatch(clearHeaderSearchResults());

    this.setState({ search: { query: e.target.value } });

    clearTimeout(this.timer);

    this.timer = setTimeout(() => {
      const {
        search,
      } = this.state;

      dispatch(getHeaderElasticsearchResults(search.query, 0));
    }, 500);
  };

  render() {
    const {
      toggleSearch,
      elasticSearch,
    } = this.props;

    const {
      search,
    } = this.state;

    return (
      <div className='header-search'>
        <SearchInput toggleSearch={ toggleSearch } handleChange={ this.handleChange } />

        { search.query && elasticSearch
        && (
          <SearchResult query={ search.query } results={ elasticSearch } toggleSearch={ toggleSearch } />
        ) }

        <SearchOverlay toggleSearch={ toggleSearch } />
      </div>
    );
  }
}
