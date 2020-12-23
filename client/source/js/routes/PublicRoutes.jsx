import React, { Component } from 'react';
import { Route, Switch } from 'react-router-dom';
import { routeCodes } from '../constants/routes';
import Login from '../views/user/pages/Login';

export default class PublicRoutes extends Component {
  render() {
    return (
      <Switch>
        <Route exact path={ routeCodes.LOGIN } render={ Login } />
      </Switch>
    );
  }
}
