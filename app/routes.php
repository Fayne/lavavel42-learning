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
Route::get('helloworld', function()
{
    return 'Hello World';
});

// if url is like 'localhost/demo/post', this route cannot work well.
Route::post('demo/post', function()
{
    return 'Hello Demo';
});

Route::match(array('GET', 'POST'), 'demo/post', function()
{
    return 'Hello GET and POST';
});

Route::any('getpost', function()
{
    return 'Hello everyone!';
});

// you should visit url like 'https://localhost/ssl'.
Route::get('ssl', array('https', function()
{
    return 'Must be over HTTPS';
}));

Route::get('userid/{id}', function($id)
{
    return 'User ID:' . $id;
});

Route::get('username/{name?}', function($name = 'John')
{
    return 'Username: ' . $name;
});

// if parameter doesn't match expression, it won't enter the block.
Route::get('checkusername/{name?}', function($name = 'John')
{
    return 'Username: ' . $name;
})
->where('name', '[A-Za-z]*');

Route::get('user/{id}/{name}', function($id, $name)
{
    return 'User ID:' . $id . '<br>Username: ' . $name;
})
->where(array('id' => '[0-9]+', 'name' => '[A-Za-z]+'));

Route::get('olduser/{id}', function($id)
{
    return 'Old User: ' . $id;
});
Route::get('newuser/{id}', function($id)
{
    return 'New User: ' . $id;
});
Route::get('confirmuser/{id}', array("before" => "filteruser"), function($id)
{
    return 'User ID:' . $id;
});

Route::group(array('prefix' => 'admin'), function() {

    // Route::get('login', function(){
    	// return 'Please login.';
    // });

    // Route::get('register', 'AdminController@register');
	
	// Route::post('createUser', 'AdminController@createUser');
	
	Route::controller('', 'AdminController');

    Route::get('foo', array("before" => "auth"), function() {
        return 'It is a foo.';
    });
	
});

Route::controller('customers', 'CustomersController');

Route::get('/', array("before" => "login", 'uses' => 'HomeController@home'));

Route::get('pass', 'HomeController@pass');

Route::get('/demo', function()
{
	return View::make('demo');
});

Route::get('/hello/', function()
{
	return View::make('hello');
});

