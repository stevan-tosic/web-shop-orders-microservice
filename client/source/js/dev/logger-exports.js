import { createLogger } from 'redux-logger';
import { Iterable } from 'immutable';

// State transformer
// transforms Immutable to the plain JS layouts
const stateTransformer = (state) => {
  const newState = {};

  Object.keys(state).forEach(key => {
    if (Iterable.isIterable(state[key])) {
      newState[key] = state[key].toJS();
    } else {
      newState[key] = state[key];
    }
  });

  return newState;
};

const CLIENT_OPTIONS = {
  // Transform Immutable to the plain JS layouts
  stateTransformer,
  predicate: (getState, action) => !action.type.includes('@@redux-form'),
};

const logger = createLogger(CLIENT_OPTIONS);

export default logger;
