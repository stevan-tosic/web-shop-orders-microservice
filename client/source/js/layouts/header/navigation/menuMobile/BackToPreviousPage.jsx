import React from 'react';
import { FormattedMessage } from 'react-intl';
import * as PropTypes from 'prop-types';

const BackToPreviousPage = (props) => {
  const {
    callbackHandler,
    title,
  } = props;

  return (
    <div
      className='back-to-previous-page-navigation'
      onClick={ callbackHandler }
      role='presentation'
    >
      <h2 className='back-to-previous-page-navigation-title'>
        <FormattedMessage id={ title } />
      </h2>
    </div>
  );
};

BackToPreviousPage.propTypes = {
  callbackHandler: PropTypes.func,
  title: PropTypes.string.isRequired,
};

export default BackToPreviousPage;
