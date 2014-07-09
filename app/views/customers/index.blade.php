@extends('layouts.default')

@section('content')
<style type="text/css">
	.container{
		margin: 30px auto 0;
		width: 500px;
	}
	ul.pagination{
		width: 500px;
		margin: 20px auto 0;
		list-style-type: none;
	}
	ul.pagination li{
		float: left;
		margin: 0 5px;
	}
</style>
<div class="container">
	@foreach( $customers as $customer )
		<div><span>ID: {{{ $customer->id }}}</span>&nbsp;&nbsp;&nbsp;<span>Name: {{{ $customer->firstname }}}</span></div>
	@endforeach
</div>
{{ $customers->links() }}
@stop