/* eslint-disable import/max-dependencies */
import { combineReducers } from 'redux';
import { reducer as toastrReducer } from 'react-redux-toastr';
import initInfo from './initInfo';

export default combineReducers({
  toastr: toastrReducer,
  initInfo,
});
