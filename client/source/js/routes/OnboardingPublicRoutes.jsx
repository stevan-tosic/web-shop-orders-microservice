import React, { Component } from 'react';
import { Route, Switch } from 'react-router-dom';
import { defaultPath, routeCodes } from '../constants/routes';
import OnboardingLogin from '../views/user/pages/Onboarding/OnboardingLogin';
import OnboardingSetPassword from '../views/user/pages/Onboarding/OnboardingSetPassword';
import OnboardingResetPassword from '../views/user/pages/Onboarding/OnboardingResetPassword';
import OnboardingRequestResetPassword from '../views/user/pages/Onboarding/OnboardingRequestResetPassword';
import OnboardingPublic from '../views/user/pages/Onboarding/OnboardingProcess/OnboardingPublic';
import OnboardingProcess from '../views/user/pages/Onboarding/OnboardingProcess/OnboardingProcess';

export default class OnboardingPublicRoutes extends Component {
  render() {
    return (
      <Switch>
        { /* when adding new route, also add check in EOPRouter.jsx when setting redirect localStorage item */ }
        <Route exact path={ routeCodes.ONBOARDING_SET_PASSWORD } component={ OnboardingSetPassword } />
        <Route exact path={ routeCodes.ONBOARDING_RESET_PASSWORD } component={ OnboardingResetPassword } />
        <Route
          exact
          path={ routeCodes.ONBOARDING_REQUEST_RESET_PASSWORD }
          component={ OnboardingRequestResetPassword }
        />
        <Route exact path={ routeCodes.ONBOARDING_LOGIN } render={ OnboardingLogin } />
        <Route exact path={ routeCodes.ONBOARDING_FORM } render={ OnboardingProcess } />

        <Route exact path={ routeCodes.ONBOARDING_PUBLIC_FORM } render={ OnboardingPublic } />
        <Route exact path={ defaultPath } render={ OnboardingLogin } />
      </Switch>
    );
  }
}
