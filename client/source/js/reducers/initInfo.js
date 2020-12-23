import {
  GET_INIT_INFO_START,
  GET_INIT_INFO_ERROR,
  GET_INIT_INFO_SUCCESS,
  UPDATE_ACTIVE_LANGUAGE,
  SET_PREFERRED_LANGUAGE_START,
  SET_PREFERRED_LANGUAGE_ERROR,
  SET_PREFERRED_LANGUAGE_SUCCESS,
  UPDATE_USER_AVATAR,
} from '../actions/initInfo';

const initialState = {
  initInfoLoading: false,
  initInfoError: null,
  userInfo: null,
  localizationMessages: null,
  loginLoading: false,
  logoutSuccess: false,
  setPrefLangError: null,
  setPrefLangLoading: false,
};

const actionsMap = {
  [GET_INIT_INFO_START]: (state) => {
    return {
      ...state,
      initInfoLoading: true,
    };
  },
  [GET_INIT_INFO_ERROR]: (state, action) => {
    return {
      ...state,
      initInfoLoading: false,
      initInfoError: action.error.response,
    };
  },
  [GET_INIT_INFO_SUCCESS]: (state, action) => {
    const data = action.data;
    const localizationMessages = [];
    let userData = null;

    Object.keys(data.localization).forEach(locale => {
      localizationMessages[locale] = data.localization[locale];
    });
    if (data.user !== undefined) {
      userData = data.user;
    }

    return {
      ...state,
      localizationMessages,
      userInfo: userData,
      initInfoLoading: false,
      initInfoError: null,
    };
  },
  [UPDATE_ACTIVE_LANGUAGE]: (state, action) => {
    return {
      ...state,
      activeLanguage: action.languageCode,
    };
  },
  [SET_PREFERRED_LANGUAGE_START]: (state) => {
    return {
      ...state,
      setPrefLangLoading: true,
      setPrefLangError: null,
    };
  },
  [SET_PREFERRED_LANGUAGE_ERROR]: (state, action) => {
    return {
      ...state,
      setPrefLangLoading: false,
      setPrefLangError: action.error,
    };
  },
  [SET_PREFERRED_LANGUAGE_SUCCESS]: (state, action) => {
    return {
      ...state,
      setPrefLangLoading: false,
      setPrefLangError: null,
      activeLanguage: action.data,
      userInfo: {
        ...state.userInfo,
        preferredLanguage: action.data,
      },
    };
  },
  [UPDATE_USER_AVATAR]: (state, action) => {
    return {
      ...state,
      userInfo: {
        ...state.userInfo,
        avatar: action.url,
      },
    };
  },
};

export default function reducer(state = initialState, action = {}) {
  const fn = actionsMap[action.type];
  return fn ? fn(state, action) : state;
}
