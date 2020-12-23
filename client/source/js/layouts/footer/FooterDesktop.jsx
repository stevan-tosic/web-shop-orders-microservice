import React, { Component } from 'react';
import { withRouter } from 'react-router-dom';
import * as PropTypes from 'prop-types';
import connect from 'react-redux/es/connect/connect';

@withRouter
@connect(state => ({
  userData: state.initInfo.userInfo,
  activeLanguage: state.initInfo.activeLanguage,
}))
class FooterDesktop extends Component {
  static propTypes = {
    activeLanguage: PropTypes.string,
  };

  render() {
    return (
      <footer className='desktop'>
        Footer Desktop
      </footer>
    );
  }
}

export default FooterDesktop;
