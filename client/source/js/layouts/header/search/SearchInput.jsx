import React from 'react';
import { FormattedMessage } from 'react-intl';
import * as PropTypes from 'prop-types';

const SearchInput = (props) => {
  const {
    toggleSearch,
    handleChange,
  } = props;

  return (
    <div className='header-search-input'>
      <label className='header-search-input__label icon icon-small-Search'>
        <FormattedMessage id='headerSearchPlaceholder'>
          { (placeholder) => (
            <input
              autoFocus // eslint-disable-line jsx-a11y/no-autofocus
              className='header-search-input__input'
              placeholder={ placeholder }
              onChange={ handleChange }
            />
          ) }
        </FormattedMessage>
      </label>

      <span
        className='header-search-input__close-icon icon icon-small-Close'
        onClick={ toggleSearch }
        onKeyPress={ toggleSearch }
        role='presentation'
      />
    </div>
  );
};

SearchInput.propTypes = {
  toggleSearch: PropTypes.func,
  handleChange: PropTypes.func,
};

export default SearchInput;
