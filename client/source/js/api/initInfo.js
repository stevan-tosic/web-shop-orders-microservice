import fetchResource from './fetch-resource';

export function getInitInfo() {
  const url = 'api/localization/messages';

  return fetchResource(
    url,
    {
      method: 'GET',
    }
  );
}
