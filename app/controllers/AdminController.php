<?php

class AdminController extends BaseController {

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
	protected $layout = 'layouts.main';
	
	public function __construct() {
		$this->beforeFilter('csrf', array('on'=>'post'));
	}
	
	public function getLogin(){
		if( Auth::check() ){
			return Redirect::to('/');
		}
		return View::make('backend.login')
			->with('title', 'Login');
	}
	
	public function getRegister(){
		return View::make('backend.register')
			->with('title', 'Registration');
	}
	
	public function postSignin(){
		$validator = Validator::make(Input::all(), User::$login_rules);
		
		if ($validator->passes()) {
			$remember = Input::has('remember_me') ? TRUE : FALSE;
			if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')), $remember)) {
			    return Redirect::intended('/')->with('message', 'You are now logged in!');
			    // return Redirect::to('/')->with('message', 'You are now logged in!');
			} else {
			    return Redirect::to('admin/login')
			        ->with('error_messages', 'Your username/password combination was incorrect')
			        ->withInput();
			}
		}
		else{
			return Redirect::to('admin/login')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
		}
	}
	
	public function postCreateUser(){
		$validator = Validator::make(Input::all(), User::$register_rules);
 
	    if ($validator->passes()) {
	        $user = new User;
		    $user->firstname = Input::get('firstname');
		    $user->lastname = Input::get('lastname');
		    $user->email = Input::get('email');
		    $user->password = Hash::make(Input::get('password'));
		    $user->save();
		 
		    return Redirect::to('admin/login')->with('message', 'Thanks for registering!');
	    } else {
	        return Redirect::to('admin/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
	    }
	}
	
	public function getLogout()	{
		Auth::logout();
		
		return Redirect::to('admin/login')->with('error_messages', 'You have been logout!');
	}
	
	public function getTest(){
		return Redirect::to('admin/demo')->with('out', '<p>Hello world</p>');
	}
	
	public function getDemo(){
		return View::make('demo');
	}
}
