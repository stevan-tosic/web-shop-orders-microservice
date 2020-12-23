const outputFiles = {
  client: 'client/[name].js?[hash:4]', // Assets versioning
  vendor: 'client/[name].js?[hash:4]',
  css: 'client/[name].[hash:4].css',
};

module.exports = {
  outputFiles,
};
