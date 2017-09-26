var Twitter = require('twitter');
var Spotify = require('node-spotify-api');
var request = require('request');
var figlet = require('figlet');
var fs = require("fs");


var action = process.argv[2];
var checkBlank = process.argv[3];
var userInput = process.argv;
var liriTweet = '';
var liriSpotify = '';
var liriMovie = '';
var figletText = '';

var writeUser = '';

var fonts = ['Standard', 'ANSI Shadow', 'Wavy', 'Shimrod',
	'Cyberlarge', 'Cybermedium', 'Banner',
	'Fire Font-s', 'ANSI Shadow', 'Small Slant',
	'NT Greek', 'Doom', 'Bigfig'
];

var z = Math.floor(Math.random() * fonts.length);

checkInput();

//switching between calls
if (action === 'do-what-it-says') {
	doThings();
} else {
	liriSwitch();
}

function liriSwitch() {
	switch (action) {
		case 'my-tweets':
			tweets();
			break
		case 'spotify-this-song':
			spotifyThis();
			break
		case 'movie-this':
			OMDBapi();
			break
		default:
			console.log("{Please enter a command: my-tweets, spotify-this-song, movie-this, do-what-it-says}");
			break;
	}
}

//if no input 
function checkInput() {
	if (checkBlank === undefined) {
		liriTweet = 'baddadjokes';
		liriSpotify = 'The+Sign';
		liriMovie = 'Mr.+Nobody';
	} else {
		//replace or elminate spaces
		for (var i = 3; i < userInput.length; i++) {

			if (i > 3 && i < userInput.length) {
				liriTweet = liriTweet + userInput[i];
				liriSpotify = liriSpotify + '+' + userInput[i];
				liriMovie = liriMovie + '+' + userInput[i];
			} else {
				liriTweet += userInput[i];
				liriSpotify += userInput[i];
				liriMovie += userInput[i];
			}
		}
	}

}
writeInput();


//tweeter functions
function tweets() {

	writeUser = liriTweet;

	//keys
	var client = new Twitter({
		consumer_key: process.env.TWITTER_CONSUMER_KEY,
		consumer_secret: process.env.TWITTER_CONSUMER_SECRET,
		access_token_key: process.env.TWITTER_ACCESS_TOKEN_KEY,
		access_token_secret: process.env.TWITTER_ACCESS_TOKEN_SECRET
	});

	//
	var params = {
		screen_name: liriTweet,
		count: 20
	};

	client.get('statuses/user_timeline', params, function (error, tweets, response) {

		if (!error) {
			console.log('\n');

			// elminate hashtags 
			for (var i = 0; i < tweets.length; i++) {
				var textOnly = tweets[i].text.split('#');
				console.log('Twitter #' + [i + 1] + ' ' + textOnly[0]);
				console.log('------------------------');
			}
			figletText = liriTweet;
			figletFunction();
		} else {
			console.log('No Such Twitter User');
		}
	});
};

//spotify api
function spotifyThis() {

	//keys

	writeUser = liriSpotify;

	var spotify = new Spotify({
		id: process.env.SPOTIFY_ID,
		secret: process.env.SPOTIFY_SECRET
	});

	//parameters
	var spotifyPara = {
		type: 'track',
		query: liriSpotify,
		limit: 2
	};

	//callback
	spotify.search(spotifyPara, function (err, data) {

		//log onto console.
		if (err) {
			return console.log('Error occurred: ' + err);
		} else {

			for (var i = 0; i < data.tracks.items.length; i++) {
				var artistName = data.tracks.items[i].album.artists[0].name;
				var songName = data.tracks.items[i].name;
				var songSample = data.tracks.items[i].album.artists[0].external_urls.spotify;
				var albumName = data.tracks.items[i].album.name;

				console.log('\n' + artistName);
				console.log(songName);
				console.log(songSample);
				console.log(albumName);
				console.log('-----------------------\n')

				figletText = artistName;
				figletFunction();
			}
		}
	});
}
//Movie
function OMDBapi() {

	writeUser = liriMovie;

	var key = process.env.OMDB_API_KEY;

	var queryUrl = "http://www.omdbapi.com/?t=" + liriMovie + "&y=&plot=short&apikey=" + key;

	request(queryUrl, function (error, response, data) {

		//if not movie exist
		if (JSON.parse(data).Title === undefined) {

			//taking out the + and putting back spaces
			var splitFailed = liriMovie.split('+');
			var failedTitle = '';

			for (var i = 0; i < splitFailed.length; i++) {

				failedTitle = failedTitle + ' ' + splitFailed[i];
			}
			console.log('Error movie title: ' + failedTitle + ' was not found');
		} else if (!error && response.statusCode === 200) {

			// console.log("Movie Title: " + JSON.parse(data).Title);
			figletText = JSON.parse(data).Title;
			figletFunction();

			console.log("Year Released: " + JSON.parse(data).Year);
			console.log("IMDB Rating: " + JSON.parse(data).imdbRating);
			console.log("Country where movie was produced: " + JSON.parse(data).Country);
			console.log("Movie Language: " + JSON.parse(data).Language);
			console.log("Movie Plot: " + JSON.parse(data).Plot);
			console.log("Movie Actors: " + JSON.parse(data).Actors);

			if (JSON.parse(data).Ratings[1] === undefined) {
				console.log("Rotten Tomatoes Rating: Sorry no rating");
			} else {
				console.log("Rotten Tomatoes Rating: " + JSON.parse(data).Ratings[1].Value);
			}
			console.log("------------------------------------------------");
		}
	});
}
//do things function
function doThings() {

	fs.readFile("random.txt", "utf8", function (error, data) {

		if (error) {
			return console.log(error);
		} else {

			var dataArr = data.split(",");

			action = dataArr[0];

			liriTweet = dataArr[1];
			liriSpotify = dataArr[1];
			liriMovie = dataArr[1];

			liriSwitch();
		}
	});
}

//changing fonts
function figletFunction() {

	figlet.text(figletText, fonts[z], function (err, data) {
		if (err) {
			console.log('Something went wrong...');
			console.dir(err);
			return;
		}
		console.log(data);
	});

}

//bonus write file
function writeInput() {

	var logLiri = action + ': ' + writeUser + '\n';

	fs.appendFile('log.txt', logLiri, function (err) {

		if (err) {
			return console.log(err)
		}

	});

}