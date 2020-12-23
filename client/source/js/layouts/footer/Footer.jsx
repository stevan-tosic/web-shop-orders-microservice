import React, { Component, Fragment } from 'react';
import * as PropTypes from 'prop-types';
import { withWindow } from 'react-window-decorators';
import { withRouter } from 'react-router-dom';
import { breakpoints } from '../../constants/breakpoints';
import FooterMobile from './FooterMobile';
import FooterDesktop from './FooterDesktop';

export default @withWindow @withRouter class Footer extends Component {
  static propTypes = {
    breakpoint: PropTypes.string,
    dimensions: PropTypes.object,
  };

  render() {
    const {
      breakpoint,
      dimensions,
    } = this.props;

    return (
      <Fragment>
        { breakpoint === 'mobile' || dimensions.width <= breakpoints.SMALL
          ? <FooterMobile />
          : <FooterDesktop />
        }
      </Fragment>
    );
  }
}
