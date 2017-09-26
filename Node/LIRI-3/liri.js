const TWITTER_KEYS = require("./keys.js");

const SPOTIFY_CLIENT_ID = "0f26aa8ea3864d9dabe6f224ae8cd8ac";
const SPOTIFY_CLIENT_SECRET = "7fcc32a461bf41e3b66bbe100beb1ca2";

const Twitter = require("twitter");
const Spotify = require("node-spotify-api");
const request = require("request");
const fs =  require("fs");

var command = process.argv[2];
var argument = process.argv[3];



function runCommand(command,argument) {

	if(command==='my-tweets') {
	//show last 20 tweets & when they were created
		var client = new Twitter({
		  consumer_key: TWITTER_KEYS.consumer_key,
		  consumer_secret: TWITTER_KEYS.consumer_secret,
		  access_token_key: TWITTER_KEYS.access_token_key,
		  access_token_secret: TWITTER_KEYS.access_token_secret
		});
		 
		var params = {screen_name: 'JohnSmi60475205'};
		client.get('statuses/user_timeline', params, function(error, tweets, response) {
		  if (!error) {
		  	console.log("TWEETS")
		  	console.log("______________")
		    tweets.forEach((tweet)=>{
		    	console.log(tweet.text)
		    })
		  }
		});
	} else if(command==='spotify-this-song'){
	//log: Artist, song name, preview link from spotify,
	//album that song is from 
	//if no song defined, "The Sign" -- Ace of Base used
		var spotify = new Spotify({
		  id: SPOTIFY_CLIENT_ID,
		  secret: SPOTIFY_CLIENT_SECRET
		});
		 
		spotify.search({ type: 'track', query: argument }, function(err, data) {
		  if (err) {
		    return console.log('Error occurred: ' + err);
		  }
		 var artist = data.tracks.items[0].artists[0].name;
		 var songName = data.tracks.items[0].name;
		 var previewUrl = data.tracks.items[0].external_urls.spotify;

		console.log("Artist: " + artist);
		console.log("Song Name: " + songName);
		console.log("preview url: " + previewUrl) 
		});

	} else if(command==='movie-this') {

		var queryUrl = "http://www.omdbapi.com/?t=" + argument + "&y=&plot=short&apikey=40e9cece";
		
		request(queryUrl, function(error, response, body) {

		  // If the request is successful
		  if (!error && response.statusCode === 200) {

		    // Parse the body of the site and recover just the imdbRating
		    // (Note: The syntax below for parsing isn't obvious. Just spend a few moments dissecting it).
		    var res = JSON.parse(body);
		    console.log("Title: " + res.Title);
		    console.log("Year: " + res.Year);
		    console.log("IMDB Rating: " + res.imdbRating);
		    console.log("Rotten Tomatos Rating: " + res.Ratings[1]);
		    console.log("Country: " + res.Country);
		    console.log("Language: " + res.Language);
		    console.log("Plot: ", res.Plot);
		    console.log("Actors: ", res.Actors);

		  }
		});
	}
	

}
	if(command === 'do-what-it-says'){
		fs.readFile("random.txt","utf-8", function(err,data){
			  if (err) {
			    return console.log(error);
			  }
			  data = data.toString().split(",");
			  runCommand(data[0],data[1]);
		})
		
	} else {
		runCommand(command,argument)


	}

