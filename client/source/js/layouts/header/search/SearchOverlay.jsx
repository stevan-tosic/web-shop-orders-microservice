import React, { Component } from 'react';
import PropTypes from 'prop-types';

export default class SearchOverlay extends Component {
  static propTypes = {
    toggleSearch: PropTypes.func,
  };

  render() {
    const {
      toggleSearch,
    } = this.props;

    return (
      <div
        className='header-search-overlay'
        onClick={ toggleSearch }
        onKeyPress={ toggleSearch }
        role='presentation'
      />
    );
  }
}
