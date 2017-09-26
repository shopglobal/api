// Following will get the api keys from keys.js
var require = ("./keys");

  
// 'request' npm package for OMDB
var request = require("request");

var movieName = process.argv[2];

var queryURL = "http://www.omdbapi.com/?t=fast+and+furious&y=&plot=short&r=json";

console.log(queryURL);

request("http://www.omdbapi.com/?t=fast+and+furious&y=&plot=short&r=json", function(error, response, body){
  if (!error && response.statusCode === 200) {
    console.log("The Movie's rating is: " + JSON.parse(body).imdbRating);
  }
});



// // App should do the following 

// my-tweets - node liri.js my-tweets - 
var Twitter = require('./keys');

var myTweets = () {
	return (Twitter);
};


};
console.log(twitter);
 
var client = new Twitter({
  consumer_key: '<input here>',
  consumer_secret: '<input here>',
  access_token_key: '<input here>',
  access_token_secret: '<input here>'
});
 
var params = {screen_name: 'nodejs'};
client.get('statuses/user_timeline', params, function(error, tweets, response) {
  if (!error) {
    console.log(tweets);
  }
});

	var APIKey = "166a433c57516f51dfab1f7edaed8413";
	var queryURL = "http://api.openweathermap.org/data/2.5/weather?" +
	        "q=Paris&units=imperial&appid=" + APIKey;

    $.ajax({
        url: queryURL,
        method: "GET"
      })
        // We store all of the retrieved data inside of an object called "response"
        .done(function(response) {

          // Log the queryURL
          console.log(queryURL);

          // Log the resulting object
          console.log(response);

    



// 	* `spotify-this-song - node liri.js spotify-this-song '<song name here>'
// 		Artists
// 		The song;s name
// 		A preview link of the song from spotify-this-song
// 		The album that the song is from

//		Default song - "the Sign" by ace of base

var spotify = require('spotify');
 
spotify.search({ type: 'track', query: 'dancing in the moonlight' }, function(err, data) {
    if ( err ) {
        console.log('Error occurred: ' + err);
        return;
    }
 
    // Do something with 'data' 
});

// 	* `movie-this - node liri.js movie-this '<movie name here>'
//			Title of the movie.
		// * Year the movie came out.
		// * IMDB Rating of the movie.
		// * Country where the movie was produced.
		// * Language of the movie.
		// * Plot of the movie.
		// * Actors in the movie.
		// * Rotten Tomatoes Ratin

// 	* `do-what-it-says`