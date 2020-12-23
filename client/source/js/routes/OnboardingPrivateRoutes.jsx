import React, { Component, Suspense } from 'react';
import { Route, Switch } from 'react-router-dom';
import { defaultPath, routeCodes } from '../constants/routes';
import Loader from '../components/global/pageLoader/GlobalLoader';
import NotFound from '../views/user/pages/NotFound';
import OnboardingProcess from '../views/user/pages/Onboarding/OnboardingProcess/OnboardingProcess';
import OnboardingLogin from '../views/user/pages/Onboarding/OnboardingLogin';

export default
class OnboardingPrivateRoutes extends Component {
  render() {
    return (
      <Suspense fallback={ <Loader /> }>
        <Switch>
          <Route exact path={ routeCodes.ONBOARDING_FORM } render={ OnboardingProcess } />
          <Route exact path={ routeCodes.ONBOARDING_LOGIN } render={ OnboardingLogin } />

          <Route path={ defaultPath } render={ () => <NotFound /> } />
        </Switch>
      </Suspense>
    );
  }
}
