import React, { Component } from 'react';
import { withWindow } from 'react-window-decorators';
import { withRouter } from 'react-router-dom';

export default
@withRouter
@withWindow
class Header extends Component {
  render() {
    return (
      <header>
        header
      </header>
    );
  }
}
