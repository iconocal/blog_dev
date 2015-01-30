<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function sayHello($name)
	{
		// code here
		// logic here
		return View::make('hello')->with('name', $name);
	}

	public function showResume($name) 
	{
        return View::make('resume')->with('name', $name);
	}

	public function showPortfolio() 
	{
		return View::make('portfolio');
	}

	public function playGame()
	{
		return view::make('whackamole');
	}



















}
