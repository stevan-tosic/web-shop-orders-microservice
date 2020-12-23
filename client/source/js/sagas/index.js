import { all } from 'redux-saga/effects';

import initInfo from './initInfo';

export default function* rootSaga() {
  yield all([
    ...initInfo,
  ]);
}
