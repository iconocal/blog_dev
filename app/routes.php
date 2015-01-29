<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	// return View::make('hello');
    return 'Hello Codeup!';
});

Route::get('parks', function(){
    return View::make('parks');
});

Route::post('parks', function() {
    return 'Which will you see???';
});




/////////////////

// Route::get('say-hello/{urlName}', function($argName) {
// $data = array(
//     'viewName' => $argName,
//     'age'      => 0
//     );

//     // Return View::make('sayhello')->with('viewName', $argName);
//     return View::make('sayhello', $data);
//     return View::make('sayhello')->($data);
// });

///////////////////


// Route::get('say-hello/{name}/{age}', function($name, $age) {
//     return "Hello $name! I hear you're $age years old!";
// });

// Route::get('resume', function() {
//     return 'This is my resume.';
// });

// Route::get('portfolio', function() {
//     return 'This is my portfolio.';
// });


// Create a route that responds to a GET request on the path /rolldice.
// Within the route, return a random number between 1 and 6.
// Add a view named roll-dice.php. Instead of just returning the random number, show the view and have it display the random number.
// Modify the route to take in a parameter named guess. Someone will access the route by visiting http://blog.dev/rolldice/1, where 1 is their guess.
// Modify the route and view so that you can display the guess in addition to the roll and also tell if the guess matches the roll.

Route::get('roll-dice/{guess}', function($guess){
    $roll = rand(1, 6);

    return View::make('roll-dice')->with('roll', $roll)->with('guess', $guess);
});





