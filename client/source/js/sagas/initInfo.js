import { takeLatest, call, put } from 'redux-saga/effects';

import {
  GET_INIT_INFO_START,
  GET_INIT_INFO_ERROR,
  GET_INIT_INFO_SUCCESS,
  SET_PREFERRED_LANGUAGE_START,
  SET_PREFERRED_LANGUAGE_ERROR,
  SET_PREFERRED_LANGUAGE_SUCCESS,
} from '../actions/initInfo';
import * as api from '../api/initInfo';


function* getInitInfo() {
  try {
    const data = yield call(() => api.getInitInfo());
    yield put({ type: GET_INIT_INFO_SUCCESS, data });
  } catch (error) {
    console.warn(error)
    yield put({ type: GET_INIT_INFO_ERROR });
  }
}

function* setPreferredLanguage(options) {
  try {
    yield put({ type: SET_PREFERRED_LANGUAGE_SUCCESS, data: options.preferredLanguage });
  } catch (error) {
    yield put({ type: SET_PREFERRED_LANGUAGE_ERROR });
  }
}

function* getInitInfoWatcher() {
  yield takeLatest(GET_INIT_INFO_START, getInitInfo);
}

function* setPreferredLanguageWatcher() {
  yield takeLatest(SET_PREFERRED_LANGUAGE_START, setPreferredLanguage);
}

export default [
  getInitInfoWatcher(),
  setPreferredLanguageWatcher(),
];
