export const GET_INIT_INFO_START = 'GET_INIT_INFO_START';
export const GET_INIT_INFO_ERROR = 'GET_INIT_INFO_ERROR';
export const GET_INIT_INFO_SUCCESS = 'GET_INIT_INFO_SUCCESS';
export const SET_PREFERRED_LANGUAGE_START = 'SET_PREFERRED_LANGUAGE_START';
export const SET_PREFERRED_LANGUAGE_ERROR = 'SET_PREFERRED_LANGUAGE_ERROR';
export const SET_PREFERRED_LANGUAGE_SUCCESS = 'SET_PREFERRED_LANGUAGE_SUCCESS';

export const UPDATE_ACTIVE_LANGUAGE = 'UPDATE_ACTIVE_LANGUAGE';
export const UPDATE_USER_AVATAR = 'UPDATE_USER_AVATAR';

export function getInitInfo(initInfoData) {
  return {
    type: GET_INIT_INFO_START,
    initInfoData,
  };
}

export function updateActiveLanguage(languageCode) {
  return {
    type: UPDATE_ACTIVE_LANGUAGE,
    languageCode,
  };
}

export function setPreferredLanguage(preferredLanguage) {
  return {
    type: SET_PREFERRED_LANGUAGE_START,
    preferredLanguage,
  };
}

export function updateUserAvatar(url) {
  return {
    type: UPDATE_USER_AVATAR,
    url,
  };
}
