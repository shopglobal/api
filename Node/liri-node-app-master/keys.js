//console.log('this is loaded');
var Twitter = require('twitter');

var twitterKeys = new Twitter({
  consumer_key: 'dXjsw8ESZUpsYS1Do4fHrsuQm',
  consumer_secret: 'CXSKjr1EgeslOTc00FV3NCOVwJzZVpuKv707ddWMiXKx7pFXRE',
  access_token_key: '912375616728653825-PBOTQ5BqDa2Olsd37O8fLj1NDygkGmc',
  access_token_secret: 'YzwJYWfj175nG1yH4YT469QH0jBAwZ2vbz1CcItPvJDGm',
});

module.exports = twitterKeys;