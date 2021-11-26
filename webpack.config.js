// Webpack configuration file
// TODO: refactor to ESNext format

module.exports = function (webpackConfig) {
  webpackConfig.babel.plugins.push('transform-runtime');
  webpackConfig.babel.plugins.push([
    'import',
    {
      libraryName: 'antd',
      style: 'css',
    },
  ]);

  return webpackConfig;
};
