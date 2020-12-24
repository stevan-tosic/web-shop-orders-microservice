import React, { Component } from 'react';
import { withRouter } from 'react-router-dom';
import * as PropTypes from 'prop-types';
import LanguageSelector from '../../components/dropdowns/LanguageSelector';
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
    const { activeLanguage } = this.props;

    return (
      <footer className='desktop'>
        Footer Desktop
        { activeLanguage && <LanguageSelector /> }
      </footer>
    );
  }
}

export default FooterDesktop;
