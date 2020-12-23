import React, { Component } from 'react';
import { connect } from 'react-redux';
import { Route, Switch, withRouter } from 'react-router-dom';
import { hot } from 'react-hot-loader';
import * as PropTypes from 'prop-types';
import Router from './Router';
import { defaultPath } from '../constants/routes';
import { getInitInfo } from '../actions/initInfo';

@withRouter
@connect(state => ({
  initInfoLoading: state.initInfo.initInfoLoading,
  initInfoError: state.initInfo.initInfoError,
  localizationMessages: state.initInfo.localizationMessages,
}))
class App extends Component {
  static propTypes = {
    initInfoError: PropTypes.string,
    initInfoLoading: PropTypes.bool,
    dispatch: PropTypes.func,
    localizationMessages: PropTypes.array,
    location: PropTypes.object,
  };

  componentDidMount() {
    const { dispatch } = this.props;

    dispatch(getInitInfo());
  }


  render() {
    const { localizationMessages } = this.props;

    return (
      <div>
        { localizationMessages && (
          <Switch>
            <Route path={ defaultPath } render={ () => <Router /> } />
          </Switch>
        ) }
      </div>
    );
  }
}

export default hot(module)(App);
