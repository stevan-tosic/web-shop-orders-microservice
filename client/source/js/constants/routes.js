import { detectLanguage } from '../helpers/helpers';
import { store } from '../client.jsx';

export const apiPath = process.env.API_PATH;

const langRouteParam = '/:language(en|it|fr|de)?';

export const publicPath = `${ langRouteParam }/`;
// TODO - remove line bellow. Temporary path for 2. version of components
export const publicPathV2 = `${ langRouteParam }/v2/`;
export const adminPath = `${ publicPath }admin/`;
export const defaultPath = `${ publicPath }:page*`;
export const onboardingBasePath = `${ publicPath }onboarding/`;

export const routeCodes = {
  HOME: `${ publicPath }`,
  LOGIN: `${ publicPath }/login`,
  ORDER_LIST: `${ apiPath }/orders`,
};

export const externalRoutes = ['funding', 'compass', 'coursera'];
export const homeRouteChildren = [
  'dashboard',
  'compass',
  'my_entity',
  'partner_companies',
  'relationship_manager',
];
export const dynamicRoutes = ['my_entity', 'partner_companies', 'relationship_manager'];

export function withLang(route) {
  const activeLanguage = store.getState().initInfo.activeLanguage;
  let currentLanguage = detectLanguage();

  if (activeLanguage) {
    currentLanguage = activeLanguage;
  }

  const routeWithoutRegexLanguage = route.replace(/^\/[^/]+?(\/.*)$/gm, '$1');
  return `/${ currentLanguage }${ routeWithoutRegexLanguage }`;
}
