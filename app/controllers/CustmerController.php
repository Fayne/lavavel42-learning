<?php

class CustomersController extends BaseController {

	protected $layout = 'layouts.main';
	
	public function __construct() {
		// $this->beforeFilter('login');
	}
	
	// public function index(){
		// $customers = DB::table('customers')->paginate(15);
		// return View::make('customers.index')
			// ->with('customers', $customers);
	// }
	
	public function getIndex(){
		return 'aaa';
		$customers = DB::table('customers')->paginate(15);
		return View::make('customers.index')
			->with('customers', $customers);
	}
	
	public function test()
	{
		return 'aaa';
	}
}
