// var Twitter = require('twitter');
var Spotify = require('node-spotify-api');
var request = require("request");
var fs = require('fs');
var movieParam = process.argv;
var movieName = "";
var song = "";
var songParam = process.argv;
var myArgs = process.argv[2];

// var twitterKeys = require('./keys.js');
var params = {screen_name: 'mciarra16', count: 20};

//console.log('myArgs: ', myArgs);
// if (myArgs == "my-tweets"){
// twitterKeys.get('statuses/user_timeline', params, function(error, tweets, response){
//         if (error) {
//             console.log(error);
//         } else{
//             for (var t = 0; t < tweets.length; t++){
//                 console.log("Tweet: " + tweets[t].text);
//                 console.log("Created at: " + tweets[t].created_at);
//             }
            
//             //console.log(tweets.text)
//         }
//     })
// }
// if(myArgs == "spotify-this-song"){

// for (var i = 3; i < songParam.length; i++){
//     if(i > 3 && i < songParam.length){
//         song = song + "+" + songParam[i];
//         //console.log(song);
//     } else{
//         song += songParam[i];
//     }
// }    
// var spotify = new Spotify({
//     id: '59a04cd1a6ea48f38896fec5af3160bc',
//     secret: '2f08c0e6e38f4f8dbfe411bd4a13ce9d'
//   });
  
//   spotify.search({ type: 'track', query: song, limit: 1 }, function(err, data) {
//     if (err) {
//       return console.log('Error occurred: ' + err);
//     } else {
//         console.log("Album: " + data.tracks.items[0].album.name); 
//         console.log("Artist: " + data.tracks.items[0].artists[0].name)
//         console.log("Song: " + data.tracks.items[0].name)
//         console.log("Track: " + data.tracks.items[0].external_urls.spotify)
//     }
//   });
// }

if(myArgs == "movie-this"){

for (var index = 3; index < movieParam.length; index++){
    if(index > 3 && index < movieParam.length){
        movieName = movieName + "+" + movieParam[index];
        console.log(movieName);
    } else{
        movieName += movieParam[index];
    }
}

var queryUrl = "http://www.omdbapi.com/?t=" + movieName + "&y=&plot=short&apikey=40e9cece";
console.log(queryUrl);
request(queryUrl, function(error, response, body){
    if(error){
        throw error
    } else if(response.statusCode == 200){
        console.log("Title: " + JSON.parse(body).Title);
        console.log("Year Released: " +JSON.parse(body).Year);
        console.log("IMDB Rating: " + JSON.parse(body).imdbRating);
        console.log("Rotten Tomatoes Rating: " +JSON.parse(body).Ratings[1].Value);
        console.log("Produced In: " +JSON.parse(body).Country);
        console.log("Language of Movie: " +JSON.parse(body).Language);
        console.log("Plot: " +JSON.parse(body).Plot);
        console.log("Actors: " +JSON.parse(body).Actors);
    } //else if(!movieName){

    //}

})
}

if(myArgs == "do-what-it-says"){
    fs.readFile("random.txt", "utf8", function(error, data){
        if(error){
            throw error;
        } else{
            console.log(data);
        }
    })
}