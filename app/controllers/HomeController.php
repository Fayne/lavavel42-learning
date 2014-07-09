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

	public function index(){
		return View::make('front/index');
	}
	
	public function home(){
		$firstname = Auth::user()->firstname;
		return View::make('front/index')->with('name', $firstname);
	}

	public function pass(){
		$pass = '111111';
		return View::make('front/pass', array("pass" => $pass));
	}

}
