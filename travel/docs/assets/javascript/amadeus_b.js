// $(document).ready( function () {
//     // $('#td').dataTable();
//     $('#thead').dataTable();
//         // $('#Ratings').dataTable();
//     // $('#Actors').dataTable();
//     $('#thead').dataTable( {
//     select: true
// } );
    // var today = moment().format('YYYY-MM-DD');
    // var date = today;
    // need if today is after P.M, must search tomorrow.

    
//     var date = moment().add(1, 'days').format('YYYY-MM-DD'); 
//     var apiKey = "p8YSKZZKV403qdiG3zvO2jbw3pnEdPZY";
//     // var origin = (ui.item.value);
//     // console.log(ui.item.value);
//     console.log("GET 404 ORIGIN error on page load represented no origin input, don't worry just start typing and autocomplete will kick in ");
//      $.ajax({
//       url: "https://api.sandbox.amadeus.com/v1.2/flights/low-fare-search?origin=" + origin + "&destination=" + cityName + "&departure_date=" + tomorrow + "&apikey=" + apiKey,

//       // https://api.sandbox.amadeus.com/v1.2/flights/inspiration-search?origin=" + origin + "&departure_date=" + date + "&apikey=" + apiKey,
//       // working on a link which will pick up with Form results and insert at the right part of the API string ;)
//       // url: "https://api.sandbox.amadeus.com/v1.2/flights/inspiration-search?origin=" + FormAnswer + "&apikey=p8YSKZZKV403qdiG3zvO2jbw3pnEdPZY",
//       method: "GET"

//       }).done(function(data) {

// // creating an array with the data from the API
//       Array['#origin'] = data['origin'];
//       // Array['#outbound'] = data['outbound'];
//       // Array['#flights'] = data['flights'];
//       Array['#currency'] = data['currency'];
//       Array['#results'] = data['results'];

//       Array['#departure_date'] = data['departure_date'];
//       Array['#return_date'] = data['return_date'];
//       Array['#price'] = data['price'];
//       Array['#airport'] = data['airport'];
//       Array['#terminal'] = data['terminal'];
//       Array['#destination'] = data['destination'];
//       console.log('origin is ' + data.origin);
//       console.log(moment().format('YYYY-MM-DD'));

//       // moment().format('YYYY-MM-DD');
//       // console.log(moment().date(Number));

//       /* either put all your dependent code here */
//       // var data = (data);
//           console.dir(data);
//     console.log("The Element is: " + data);
//     console.log("The destination is: " + data.results[0].destination);
//     console.log("The destination is: " + data.results[1].destination);
//     console.log("The destination is: " + data.results[2].destination);
//     console.log("The destination is: " + data.results[3].destination);
//     console.log("The destination is: " + data.results[4].destination);
//     console.log("The destination is: " + data.results[5].destination);
//     console.log("The destination is: " + data.results[6].destination);
//     console.log("The destination is: " + data.results[7].destination);
//     console.log("The destination is: " + data.results[8].destination);
//     console.log("The destination is: " + data.results[9].destination);
//     console.log("The destination is: " + data.results[10].destination);
//     console.log("The departure_date: " + data.results[0].departure_date);
//     console.log("The departure_date: " + data.results[1].departure_date);
//     console.log("The departure_date: " + data.results[2].departure_date);
//     console.log("The departure_date: " + data.results[3].departure_date);
//     console.log("The departure_date: " + data.results[4].departure_date);
//     console.log("The departure_date: " + data.results[5].departure_date);
//     console.log("The departure_date: " + data.results[6].departure_date);
//     console.log("The departure_date: " + data.results[7].departure_date);
//     console.log("The departure_date: " + data.results[8].departure_date);
//     console.log("The departure_date: " + data.results[9].departure_date);
//     console.log("The departure_date: " + data.results[10].departure_date);
//     console.log("The return_date: " + data.results[0].return_date);
//     console.log("The return_date: " + data.results[1].return_date);
//     console.log("The return_date: " + data.results[2].return_date);
//     console.log("The return_date: " + data.results[3].return_date);
//     console.log("The return_date: " + data.results[4].return_date);
//     console.log("The return_date: " + data.results[5].return_date);
//     console.log("The return_date: " + data.results[6].return_date);
//     console.log("The return_date: " + data.results[7].return_date);
//     console.log("The return_date: " + data.results[8].return_date);
//     console.log("The return_date: " + data.results[9].return_date);
//     console.log("The return_date: " + data.results[10].return_date);
//     console.log("The price is: " + data.results[0].price);
//     console.log("The price is: " + data.results[1].price);
//     console.log("The price is: " + data.results[2].price);
//     console.log("The price is: " + data.results[3].price);
//     console.log("The price is: " + data.results[4].price);
//     console.log("The price is: " + data.results[5].price);
//     console.log("The price is: " + data.results[6].price);
//     console.log("The price is: " + data.results[7].price);
//     console.log("The price is: " + data.results[8].price);
//     console.log("The price is: " + data.results[9].price);
//     console.log("The price is: " + data.results[10].price);
//     console.log("The airline info: " + data.results[0].airline);
//     console.log("The airline info: " + data.results[1].airline);
//     console.log("The airline info: " + data.results[2].airline);
//     console.log("The airline info: " + data.results[3].airline);
//     console.log("The airline info: " + data.results[4].airline);
//     console.log("The airline info: " + data.results[5].airline);
//     console.log("The airline info: " + data.results[6].airline);
//     console.log("The airline info: " + data.results[7].airline);
//     console.log("The airline info: " + data.results[8].airline);
//     console.log("The airline info: " + data.results[9].airline);
//     console.log("The airline info: " + data.results[10].airline);
//     console.log("The airport info: " + data.results[0].airport);
//     console.log("The airport info: " + data.results[1].airport);
//     console.log("The airport info: " + data.results[2].airport);
//     console.log("The airport info: " + data.results[3].airport);
//     console.log("The airport info: " + data.results[4].airport);
//     console.log("The airport info: " + data.results[5].airport);
//     console.log("The airport info: " + data.results[6].airport);
//     console.log("The airport info: " + data.results[7].airport);
//     console.log("The airport info: " + data.results[8].airport);
//     console.log("The airport info: " + data.results[9].airport);
//     console.log("The airport info: " + data.results[10].airport);
//     console.log("The terminal is: " + data.results[0].terminal);
//     console.log("The terminal is: " + data.results[1].terminal);
//     console.log("The terminal is: " + data.results[2].terminal);
//     console.log("The terminal is: " + data.results[3].terminal);
//     console.log("The terminal is: " + data.results[4].terminal);
//     console.log("The terminal is: " + data.results[5].terminal);
//     console.log("The terminal is: " + data.results[6].terminal);
//     console.log("The terminal is: " + data.results[7].terminal);
//     console.log("The terminal is: " + data.results[8].terminal);
//     console.log("The terminal is: " + data.results[9].terminal);
//     console.log("The terminal is: " + data.results[10].terminal);

//       // var year = (year);
//       /* or just call a callback function: */
//       callback(data);
//       // console.dir(data);
//       console.log("Here's the currency value: " + data.currency);


//     // console.log("The Language is: " + data.Language);
//     // console.log("The Metascore is: " + data.Metascore);
//     // console.log("The Plot is: " + data.Plot);
//     // console.log("The Poster: " + data.Poster);
//     // console.log("The Production is: " + data.Production);
//     // console.log("The Rated value: " + data.Rated);
//     // console.log("The Ratings are: " + data.Ratings);
//     // console.log("The Release value: " + data.Released);
//     // console.log("The data value: " + data.data);
//     // console.log("The Runtime is: " + data.Runtime);
//     // console.log("The Title is: " + data.Title);
//     // data.append(data.Title);

//     // console.log("The Type is: " + data.Type);
//     // console.log("The Website is: " + data.Website);
//     // console.log("The Writers are: " + data.Writer);
//     // console.log("The Year is: " + data.Year);
//     // Year.append(data.Year);

//     // console.log("This is the damn year " + data.Year);
//     // console.log("The IMDB ID is: " + data.imdbID);
//     // console.log("The the IMDB Ratings are: " + data.imdbRating);
//     // console.log("The IMDB Votes are: " + data.imdbVotes);
//     // work with the data here
//     console.log(data.results[0].destination  + " " + data.results[1].destination);
//     console.dir(this);
//     // array that needs to be sorted

//       // $('#table').dataTable(data.Year);
//       // // $('#Rating').dataTable(data.Ratings[0].Value);
//       // $('#data').dataTable(data.Actors);
//       // $('#table').dataTable(data.Title);
//       $('#departure_date').append("<br>" + data.results[0].departure_date);
//       $('#departure_date').append("<br>" + data.results[1].departure_date);
//       $('#departure_date').append("<br>" + data.results[2].departure_date);
//       $('#departure_date').append("<br>" + data.results[3].departure_date);
//       $('#departure_date').append("<br>" + data.results[4].departure_date);
//       $('#departure_date').append("<br>" + data.results[5].departure_date);
//       $('#departure_date').append("<br>" + data.results[6].departure_date);
//       $('#departure_date').append("<br>" + data.results[7].departure_date);
//       $('#departure_date').append("<br>" + data.results[8].departure_date);
//       $('#departure_date').append("<br>" + data.results[9].departure_date);
//       $('#departure_date').append("<br>" + data.results[10].departure_date);
//       $('#return_date').append("<br>" + data.results[0].return_date);
//       $('#return_date').append("<br>" + data.results[1].return_date);
//       $('#return_date').append("<br>" + data.results[2].return_date);
//       $('#return_date').append("<br>" + data.results[3].return_date);
//       $('#return_date').append("<br>" + data.results[4].return_date);
//       $('#return_date').append("<br>" + data.results[5].return_date);
//       $('#return_date').append("<br>" + data.results[6].return_date);
//       $('#return_date').append("<br>" + data.results[7].return_date);
//       $('#return_date').append("<br>" + data.results[8].return_date);
//       $('#return_date').append("<br>" + data.results[9].return_date);
//       $('#return_date').append("<br>" + data.results[10].return_date);
//       $('#price').append("<br> $" + data.results[0].price);
//       $('#price').append("<br> $" + data.results[1].price);
//       $('#price').append("<br> $" + data.results[2].price);
//       $('#price').append("<br> $" + data.results[3].price);
//       $('#price').append("<br> $" + data.results[4].price);
//       $('#price').append("<br> $" + data.results[5].price);
//       $('#price').append("<br> $" + data.results[6].price);
//       $('#price').append("<br> $" + data.results[7].price);
//       $('#price').append("<br> $" + data.results[8].price);
//       $('#price').append("<br> $" + data.results[9].price);
//       $('#price').append("<br> $" + data.results[10].price);
//       $('#destination').append("<br>" + data.results[0].destination);

//     $('#destination').append("<br>" + data.results[1].destination);
//     $('#destination').append("<br>" + data.results[2].destination);
//     $('#destination').append("<br>" + data.results[3].destination);
//     $('#destination').append("<br>" + data.results[4].destination);
//     $('#destination').append("<br>" + data.results[5].destination);
//     $('#destination').append("<br>" + data.results[6].destination);
//     $('#destination').append("<br>" + data.results[7].destination);
//     $('#destination').append("<br>" + data.results[8].destination);
//     $('#destination').append("<br>" + data.results[9].destination);
//     $('#destination').append("<br>" + data.results[10].destination);
//       $('#origin').append("<br>" + data.origin);
//       $('#origin').append("<br>" + data.origin);
//       $('#origin').append("<br>" + data.origin);
//       $('#origin').append("<br>" + data.origin);
//       $('#origin').append("<br>" + data.origin);
//       $('#origin').append("<br>" + data.origin);
//       $('#origin').append("<br>" + data.origin);
//       $('#origin').append("<br>" + data.origin);
//       $('#origin').append("<br>" + data.origin);
//       $('#origin').append("<br>" + data.origin);
//       $('#origin').append("<br>" + data.origin);
//       // $('#origin').append("<br>" + data.origin);
//     // $('#Year').append("<br>" + data.Year);
//     // $("#Ratings").append("<br>" + data.Ratings[0].Value);
//     // $('#Actors').append("<br>" + data.Actors);
//     // $('#movieTitle').append("<br>" + data.Title);
//   });

// /* code to be executed after the ajax call */
// function callback(data){
//     // var data = (data);
//     // data = data;
//     // var Origin = (data.origin);

// };

    console.log("Because our AJAX requests are asynchronous, this line of code will most likely log first");
    // console.log(darkKnight);

// function callback(data){
