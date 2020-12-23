import React, { Component, Suspense, lazy } from 'react';
import { Route, Switch, Redirect } from 'react-router-dom';
import { adminPath, defaultPath, routeCodes } from '../constants/routes';
import Loader from '../components/global/pageLoader/GlobalLoader';
import EOPRoute from '../views/EOPRoute';
import { User } from '../constants/entities';
import EOPEditCompanyRoute from '../views/EOPEditCompanyRoute';
import EOPProgrammeRoute from '../views/EOPProgrammeRoute';

// Lazy load admin components
// NOTE: follow this lazy load implementation for all new components
const Dashboard = lazy(() => import('../views/user/pages/Dashboard/Dashboard'));
const CompassTeaser = lazy(() => import('../views/user/pages/CompassTeaser/CompassTeaser'));
const Storybook = lazy(() => import('../../_v2/js/views/user/pages/Storybook/Storybook'));
const Meetings = lazy(() => import('../../_v2/js/views/user/pages/Meetings/Meetings'));
const Funding = lazy(() => import('../../_v2/js/views/user/pages/Funding/Funding'));
const Search = lazy(() => import('../views/user/pages/Search/Search'));
const Admin = lazy(() => import('../views/admin/admin'));
const NotFound = lazy(() => import('../views/user/pages/NotFound'));
const Forbidden = lazy(() => import('../views/user/pages/Forbidden'));
const MyProfile = lazy(() => import('../views/user/pages/MyProfile/MyProfile'));
const Messages = lazy(() => import('../views/user/pages/Messages'));
const TrainingsList = lazy(() => import('../views/user/pages/events/TrainingsList/TrainingsList'));
const Events = lazy(() => import('../../_v2/js/views/user/pages/Events/Events'));
const Partner = lazy(() => import('../views/user/pages/Partner/Partner'));
const CreatePartner = lazy(() => import('../views/admin/pages/partner/CreatePartner'));
const Training = lazy(() => import('../views/user/pages/events/Training'));
const CompanyTrainingIndex = lazy(() => import('../views/admin/pages/events/CompanyTrainingIndex'));
const StaticPage = lazy(() => import('../views/user/pages/StaticPage'));
const Company = lazy(() => import('../views/user/pages/Company/Company'));
const CreateCompany = lazy(() => import('../views/admin/pages/company/CreateCompany'));
const Directory = lazy(() => import('../views/user/pages/Directory/Directory'));
const CompanyEditMain = lazy(() => import('../views/user/pages/CompanyEdit/CompanyEditMain'));
const TasksShow = lazy(() => import('../views/user/pages/Tasks/TasksShow'));
const TaskCreate = lazy(() => import('../views/user/pages/Tasks/create/TaskCreate'));
const TaskEdit = lazy(() => import('../views/user/pages/Tasks/edit/TaskEdit'));
const CompaniesSelector = lazy(() => import('../views/user/pages/Tasks/create/CompaniesSelector'));
const BusinessMatching = lazy(() => import('../views/user/pages/BusinessMatching'));
const PartnerCompanyList = lazy(() => import('../views/user/pages/PartnerCompanies/PartnerCompanyList'));
const ManagerCompanyList = lazy(() => import('../views/user/pages/ManagerCompanies/ManagerCompanyList'));
const PartnerLibraries = lazy(() => import('../views/user/pages/PartnerLibraries/PartnerLibraries'));
const IndexNews = lazy(() => import('../views/user/pages/news/indexNews/IndexNews'));
const SingleNews = lazy(() => import('../views/user/pages/news/singleNews/SingleNews'));
const IndexLibrary = lazy(() => import('../views/user/pages/library/indexLibrary/IndexLibrary'));
const SingleLibrary = lazy(() => import('../views/user/pages/library/singleLibrary/SingleLibrary'));
const ProgrammeDocuments = lazy(() => import('../views/user/pages/Programme/Documents'));
const PartnerCreateLibrary = lazy(() => import('../views/admin/pages/library/PartnerCreateLibrary'));
const PartnerEditLibrary = lazy(() => import('../views/admin/pages/library/PartnerEditLibrary'));

export default class PrivateRoutes extends Component {
  render() {
    const programmePartnerAdmin = 8192;
    const permissionOnlyRelationshipManager = 32768;

    return (
      <Suspense fallback={ <Loader /> }>
        <Switch>
          <Route exact path={ routeCodes.STORYBOOK } render={ () => <Storybook /> } />
          <Route exact path={ routeCodes.MEETINGS } render={ () => <Meetings /> } />
          <Redirect exact from={ routeCodes.HOME } to={ routeCodes.DASHBOARD } />
          <Redirect exact from={ routeCodes.NETWORK } to={ routeCodes.DIRECTORY } />
          <EOPProgrammeRoute
            exact
            path={ routeCodes.PROGRAMME }
          />
          {/* todo - navigation is not working properly, should be refactored */}
          <Route exact path={ routeCodes.FUNDING } render={ () => <StaticPage /> } />
          <Route exact path={ routeCodes.OPPORTUNITIES } render={ () => <Funding /> } />
          <Route exact path={ routeCodes.DASHBOARD } render={ () => <Dashboard /> } />
          <Route path={ routeCodes.COMPASS_TEASER } render={ () => <CompassTeaser /> } />
          <Route exact path={ routeCodes.MY_PROFILE } render={ () => <MyProfile /> } />
          <Route exact path={ routeCodes.SEARCH } render={ () => <Search /> } />
          <Route exact path={ routeCodes.TRAININGS } render={ () => <TrainingsList /> } />
          <Route exact path={ routeCodes.EVENTS } render={ () => <Events /> } />
          <Route exact path={ `${ routeCodes.TRAININGS }/:slug` } render={ () => <Training /> } />
          <Route exact path={ `${ routeCodes.EVENTS }/:slug` } render={ () => <Training /> } />
          <Route exact path={ `${ routeCodes.DOCUMENTS }` } render={ () => <ProgrammeDocuments /> } />
          <Route
            exact
            path={ `${ routeCodes.EDIT_COMPANIES }/:slug/financials` }
            render={ () => <CompanyEditMain /> }
          />
          <EOPRoute
            exact
            path={ `${ routeCodes.COMPANIES }/create` }
            render={ () => <CreateCompany userType={ User.TYPE_PROGRAMME_PARTNER_ADMIN } /> }
            permissions={ programmePartnerAdmin }
          />
          <EOPEditCompanyRoute
            exact
            path={ `${ routeCodes.COMPANY }/edit` }
          />
          <EOPRoute
            exact
            path={ `${ routeCodes.PARTNER_COMPANIES }` }
            render={ () => <PartnerCompanyList /> }
            permissions={ programmePartnerAdmin }
          />
          <EOPRoute
            exact
            path={ `${ routeCodes.RELATIONSHIP_MANAGER }` }
            render={ () => <ManagerCompanyList /> }
            permissions={ permissionOnlyRelationshipManager }
          />
          <Route exact path={ `${ routeCodes.COMPANY_TASKS }/create` } render={ () => <TaskCreate /> } />
          <Route
            exact
            path={ `${ routeCodes.COMPANY_TASKS }/chose-companies` }
            render={ () => <CompaniesSelector /> }
          />
          <Route exact path={ routeCodes.COMPANY_TASKS_EDIT } render={ () => <TaskEdit /> } />
          <Route
            path={ routeCodes.COMPANY_TASKS }
            render={ (props) => <TasksShow key={ props.match.params.slug } /> }
          />
          <Route exact path={ routeCodes.COMPANY_TRAININGS } render={ () => <CompanyTrainingIndex /> } />
          <Route path={ routeCodes.COMPANY } render={ () => <Company /> } />
          <Route path={ routeCodes.MY_COMPANY } render={ () => <Company /> } />
          <Route
            exact
            path={ routeCodes.MARKETPLACE }
            render={ () => <BusinessMatching key={ Math.random() } /> }
          />
          <Route
            exact
            path={ `${ routeCodes.MY_PARTNER }/edit` }
            render={ () => <CreatePartner userType={ User.TYPE_USER } /> }
          />
          <EOPRoute
            exact
            path={ routeCodes.PARTNER_LIBRARIES }
            render={ () => <PartnerLibraries /> }
          />
          <EOPRoute
            exact
            path={ routeCodes.PARTNER_LIBRARIES_CREATE }
            render={ () => <PartnerCreateLibrary /> }
          />
          <Route
            exact
            path={ routeCodes.PARTNER_LIBRARIES_EDIT }
            render={ () => <PartnerEditLibrary /> }
          />
          <Route path={ `${ routeCodes.PARTNER }` } render={ () => <Partner /> } />
          <Route path={ `${ routeCodes.MY_PARTNER }` } render={ () => <Partner /> } />
          <Route exact path={ routeCodes.MESSAGES } render={ () => <Messages /> } />
          <Route exact path={ routeCodes.DIRECTORY } render={ () => <Directory /> } />
          <Route exact path={ routeCodes.NEWS } render={ () => <IndexNews /> } />
          <Route exact path={ routeCodes.SINGLE_NEWS } render={ () => <SingleNews /> } />
          <Route exact path={ routeCodes.LIBRARY } render={ () => <IndexLibrary /> } />
          <Route exact path={ routeCodes.SINGLE_LIBRARY } render={ () => <SingleLibrary /> } />
          <Route path={ adminPath } render={ () => <Admin /> } />

          <Route path={ routeCodes.FORBIDDEN } render={ () => <Forbidden /> } />
          { /* NOTE: this is a default matcher, don't add anything after it */ }
          <Route path={ defaultPath } render={ () => <NotFound /> } />
        </Switch>
      </Suspense>
    );
  }
}
