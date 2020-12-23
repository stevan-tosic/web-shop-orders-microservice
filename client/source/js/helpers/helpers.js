import { getLanguage } from 'react-language';
import * as Cookies from 'js-cookie';
import { store } from '../client.jsx';

export function detectLanguage() {
  const localizationMessages = store.getState().initInfo.localizationMessages;
  const defaultLang = 'en';

  const lang = Cookies.get('language') || getLanguage();
  const parsedLang = lang ? lang.split(/[-_]/)[0] : defaultLang;

  if (parsedLang !== defaultLang) {
    if (
      Object.keys(localizationMessages)
      && Object.keys(localizationMessages).indexOf(parsedLang) !== -1
    ) {
      return parsedLang;
    }

    return defaultLang;
  }

  return parsedLang;
}
