import moment from 'moment';
import { apiPath } from '../constants/routes';
import { store } from '../client.jsx';

// Custom API error to throw
function ApiError(message, data, status) {
  let response = null;
  let isObject = false;

  // We are trying to parse response
  try {
    response = JSON.parse(data);
    isObject = true;
  } catch (e) {
    response = data;
  }

  return {
    response,
    message,
    status,
    toString: () => {
      return `${ this.message }\nResponse:\n${ isObject ? JSON.stringify(this.response, null, 2) : this.response }`;
    },
  };
}

// API wrapper function
const fetchResource = (path, userOptions = {}) => {
  // Define default options
  const defaultOptions = {};

  let defaultHeaders = {
    'Accept-Language': store.getState().initInfo.activeLanguage || 'en',
  };

  // Define default headers
  if (!userOptions.noContentType) {
    defaultHeaders = {
      ...defaultHeaders,
      'Content-Type': 'application/json',
    };
  }

  if (!userOptions.noAccept) {
    defaultHeaders = {
      ...defaultHeaders,
      Accept: 'application/json',
    };
  }

  const options = {
    // Merge options
    ...defaultOptions,
    ...userOptions,
    // Merge headers
    headers: {
      ...defaultHeaders,
      ...userOptions.headers,
    },
    credentials: 'include',
  };

  // Build Url
  let url = `${ apiPath }/${ path }`;

  if (userOptions.externalUrl) {
    // Build Url
    url = path;
  }

  // Detect is we are uploading a file
  const isFile = typeof window !== 'undefined' && options.body instanceof FormData;

  // Stringify JSON data
  // If body is not a file
  if (options.body && typeof options.body === 'object' && !isFile) {
    options.body = JSON.stringify(options.body);
  }

  // Variable which will be used for storing response
  let response = null;

  return fetch(url, options)
    .then(responseObject => {
      // Saving response for later use in lower scopes
      response = responseObject;

      // HTTP unauthorized
      if (response.status === 401 && !userOptions.externalUrl) {
        // Handle unauthorized requests
        window.location.replace(process.env.PUBLIC_WEBSITE_URL);
      }

      // Check for error HTTP error codes
      if (response.status < 200 || response.status >= 300) {
        // Get response as text
        return response.text();
      }

      // Get response as json
      return response.json();
    })
    // "parsedResponse" will be either text or javascript object depending if
    // "response.text()" or "response.json()" got called in the upper scope
    .then(parsedResponse => {
      // Check for HTTP error codes
      if (response.status < 200 || response.status >= 300) {
        // Throw error
        throw parsedResponse;
      }
      // Request succeeded
      return parsedResponse;
    })
    .catch(error => {
      // Throw custom API error
      // If response exists it means HTTP error occured
      if (response) {
        throw ApiError(`Request failed with status ${ response.status }.`, error, response.status);
      } else {
        throw ApiError(error.toString(), null, 'REQUEST_FAILED');
      }
    });
};

export default fetchResource;
