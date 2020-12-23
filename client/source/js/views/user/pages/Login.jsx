import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { Helmet } from 'react-helmet'
import { withRouter } from 'react-router-dom';

@withRouter
class Login extends Component {
  static propTypes = {
    match: PropTypes.object,
  };

  render() {

    return (
      <div>
        <Helmet>
          <title>Here's the Title!</title>
          <meta name="description" content="This is what you want to show as the page content in the Google SERP Listing" />
        </Helmet>
        ok
      </div>
    );
  }
}

export default Login;
