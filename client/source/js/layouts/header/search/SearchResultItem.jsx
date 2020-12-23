import React, { Component } from 'react';
import PropTypes from 'prop-types';

export default class SearchResultItem extends Component {
  static propTypes = {
    children: PropTypes.node,
  };

  render() {
    const {
      children,
    } = this.props;

    return (
      <div className='header-search-result__section-items__item'>
        { children }
      </div>
    );
  }
}
