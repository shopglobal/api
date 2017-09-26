var Request = require('request');
var Twitter = require('twitter');
var Spotify = require('node-spotify-api');

var fs = require('fs');

var keys = require("./keys.js");

var client = new Twitter(keys.twitterKeys);

var spotify = new Spotify({
    id: 'd448e292932a49ceaa3deb1e498aeee5',
    secret: 'aa40d58a935a4e918004b1a43da5372c'
});

var action = process.argv[2];

switch (action) {
    case "my-tweets":
        listTweets();
        break;

    case "spotify-this-song":
        spotifyThis();
        break;

    case "movie-this":
        movieLookUp();
        break;

    case "do-what-it-says":
        doIt();
        break;
}

// TWITTER 
function listTweets() {

    var params = {
        screen_name: "megan_sloe"
    };

    client.get('search/tweets', {
        q: "megan_sloe"
    }, function(error, tweets, response) {
        if (error) {
            console.log('error:', error);
            console.log('statusCode:', response && response.statusCode);
        } else {
            for (i = 0; i < tweets["statuses"].length; i++) {
                console.log("----------------------");
                console.log("Megan tweeted: '" + tweets["statuses"][i].text + "'");
                console.log("Tweeted on: " + tweets["statuses"][i]["created_at"]);
            }
        }
    });
}

// SPOTIFY
function spotifyThis() {

    var nodeArgs = process.argv;
    var song = "";

    for (i = 3; i < nodeArgs.length; i++) {
        song = song + " " + nodeArgs[i];
    }

    if (nodeArgs.length === 3) {
        song = "The Sign";
    }

    console.log("Searching for: " + song);

    spotify.search({
        type: 'track',
        query: song
    }, function(error, data) {

        if (error) {
            console.log('Error occurred: ' + error);
            return;
        } else {
            console.log("---------------------");

            console.log("Artist(s): " + data["tracks"].items[1].artists[0].name);

            console.log("Song Title: " + data["tracks"].items[0].name);

            console.log("Preview Link: " + data["tracks"].items[0].preview_url);

            console.log("Album Name: " + data["tracks"].items[0].album.name);
            console.log("---------------------");
        }
    });
}

// OMDB API
function movieLookUp() {

    var nodeArgs = process.argv;
    var movie = nodeArgs[3];

    for (i = 4; i < nodeArgs.length; i++) {
        movie += "+" + nodeArgs[i];
    }

    if (nodeArgs[3] === undefined) {
        movie = "Mr+Nobody";
    }
    // var movieQueryURL = "http://www.omdbapi.com/?t=" + movie + "&apikey=96e2da14&plot=full&tomatoes=true";
    var movieQueryURL = "http://www.omdbapi.com/?t=" + movie + "&apikey=BanMePls&plot=full&tomatoes=true";

    Request(movieQueryURL, function(error, response, body) {

        if (error) {
            console.log('error:', error);
            console.log('statusCode:', response && response.statusCode);
        } else {

            var obj = JSON.parse(body);

            console.log("----------");

            console.log("Title: " + obj["Title"]);

            console.log("Year: " + obj["Year"]);

            console.log("IMDB Rating: " + obj["imdbRating"]);

            console.log("Produced in: " + obj["Country"]);

            console.log("Language: " + obj["Language"]);

            console.log("Plot: " + obj["Plot"]);

            console.log("Actors: " + obj["Actors"]);

            console.log("Rotten Tomatoes Rating: " + obj.Ratings[1].Value);

            console.log("----------");
        }
    });
}

function doIt() {

    fs.readFile("random.txt", "utf8", function(error, data) {
        if (error) {
            console.log('error:', error);
            console.log('statusCode:', response && response.statusCode);
        } else {

            var cleanData = data.replace(/['"]+/g, '');

            var commands = cleanData.split(",");

            for (i = 0; i < commands.length; i++)
                process.argv[i + 2] = commands[i];
        }

        var action = process.argv[2];

        switch (action) {
            case "my-tweets":
                listTweets();
                break;

            case "spotify-this-song":
                spotifyThis();
                break;

            case "movie-this":
                movieLookUp();
                break;
        }

    });
}