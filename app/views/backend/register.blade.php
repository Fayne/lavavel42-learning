@extends('layouts.login')

@section('content')

<div class="body body-s">
	
	{{ Form::open(array('url'=>'admin/create-user', 'class'=>'sky-form')) }}
    <header>Registration</header>
	
	@if( count($errors->all()) > 0 )			
	<ul class="error_messages">
	    @foreach($errors->all() as $error)
	        <li>{{ $error }}</li>
	    @endforeach
	</ul>
	@endif
	<fieldset>
		<div class="row">
			<section class="col col-6">
				<label class="input">
					{{ Form::text('firstname', null, array('class'=>'input-block-level', 'placeholder'=>'First Name')) }}
				</label>
			</section>
			<section class="col col-6">
				<label class="input">
					 {{ Form::text('lastname', null, array('class'=>'input-block-level', 'placeholder'=>'Last Name')) }}
				</label>
			</section>
		</div>
		
	</fieldset>
	<fieldset>					
		
		<section>
			<label class="input">
				<i class="icon-append icon-envelope-alt"></i>
				{{ Form::email('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
				<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
			</label>
		</section>
		
		<section>
			<label class="input">
				<i class="icon-append icon-lock"></i>
				{{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
				<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
			</label>
		</section>
		
		<section>
			<label class="input">
				<i class="icon-append icon-lock"></i>
				 {{ Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirm Password')) }}
				<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
			</label>
		</section>
	</fieldset>
		
	<footer>
		{{ Form::submit('Register', array('class'=>'button'))}}
		<a href="/admin/login" class="button button-secondary">Login</a>
	</footer>
 
 
    <!-- {{ Form::text('firstname', null, array('class'=>'input-block-level', 'placeholder'=>'First Name')) }}
    {{ Form::text('lastname', null, array('class'=>'input-block-level', 'placeholder'=>'Last Name')) }}
    {{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
    {{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
    {{ Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirm Password')) }}
 
    {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
	{{ Form::close() }} -->
</div>
@stop