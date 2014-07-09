<?php

class CustomersController extends BaseController {

	protected $layout = 'layouts.main';
	
	public function __construct() {
		$this->beforeFilter('login');
	}
	
	public function getIndex(){
		// $customers = DB::table('customers')->simplePaginate(15);
		$customers = DB::table('customers')
			->where('id', '>', 200000)
			->where('site_id', 2)
			->orderBy('id', 'asc')
			->simplePaginate(20);
			// ->paginate(20);
		return View::make('customers.index')
			->with('customers', $customers);
	}
	
	
}
