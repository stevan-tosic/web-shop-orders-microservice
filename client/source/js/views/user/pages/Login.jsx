import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { withRouter } from 'react-router-dom';

@withRouter
class Login extends Component {
  static propTypes = {
    match: PropTypes.object,
  };

  render() {

    return (
      <div>
        ok
      </div>
    );
  }
}

export default Login;
