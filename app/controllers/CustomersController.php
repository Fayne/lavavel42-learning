<?php

class CustomersController extends BaseController {

	protected $layout = 'layouts.main';
	
	public function __construct() {
		$this->beforeFilter('login');
	}
	
	public function getIndex(){
		$customers = DB::table('customers')->simplePaginate(15);
		return View::make('customers.index')
			->with('customers', $customers);
	}
	
	
}
