import { detectLanguage } from '../helpers/helpers';
import { store } from '../client.jsx';

export const apiPath = process.env.API_PATH;

const langRouteParam = '/:language(en|it|fr|de)?';

export const publicPath = `${ langRouteParam }/`;
export const adminPath = `${ publicPath }admin/`;
export const defaultPath = `${ publicPath }:page*`;

export const routeCodes = {
  HOME: `${ publicPath }`,
  LOGIN: `${ publicPath }/login`,
  ORDER_LIST: `${ apiPath }/orders`,
};

export const homeRouteChildren = [
  'dashboard',
  'my_entity',
];

export function withLang(route) {
  const activeLanguage = store.getState().initInfo.activeLanguage;
  let currentLanguage = detectLanguage();

  if (activeLanguage) {
    currentLanguage = activeLanguage;
  }

  const routeWithoutRegexLanguage = route.replace(/^\/[^/]+?(\/.*)$/gm, '$1');
  return `/${ currentLanguage }${ routeWithoutRegexLanguage }`;
}
