import React, { Component } from 'react';
import { withRouter } from 'react-router-dom';
import * as PropTypes from 'prop-types';
import connect from 'react-redux/es/connect/connect';

@withRouter
@connect(state => ({
  userData: state.initInfo.userInfo,
  activeLanguage: state.initInfo.activeLanguage,
}))
class FooterMobile extends Component {
  static propTypes = {
    activeLanguage: PropTypes.string,
  };

  render() {
    return (
      <footer className='mobile'>
        Footer Mobile
      </footer>
    );
  }
}

export default FooterMobile;
