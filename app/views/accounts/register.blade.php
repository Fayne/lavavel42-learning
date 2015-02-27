@extends('layouts.login')

@section('content')

    <div class="body body-s">
        {{ Form::open(array('url'=>'acount/create', 'class'=>'sky-form')) }}
        <header>Login</header>
        @if( count($errors->all()) > 0 || Session::has('error_messages'))
            <ul class="error_messages">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                @if (Session::has('error_messages'))
                    <li>{{ Session::get('error_messages') }}</li>
                @endif
            </ul>
        @endif
        <fieldset>
            <section>
                <div class="row">
                    {{ Form::label('email', 'Email:', array('for' => 'email', 'class' => 'label col col-4')) }}
                    <!-- <label class="label col col-4">E-mail</label> -->
                    <div class="col col-8">
                        <label class="input">
                            <i class="icon-append icon-user"></i>
                            {{ Form::email('email', null, array('id'=>'email', 'placeholder'=>'name@example.com')) }}
                            <!-- <input type="email"> -->
                        </label>
                    </div>
                </div>
            </section>

            <section>
                <div class="row">
                    {{ Form::label('password', 'Password:', array('for' => 'password', 'class' => 'label col col-4')) }}
                    <!-- <label class="label col col-4">Password</label> -->
                    <div class="col col-8">
                        <label class="input">
                            <i class="icon-append icon-lock"></i>
                            {{ Form::password('password', array('id'=>'password', 'placeholder'=>'Password')) }}
                            <!-- <input type="password"> -->
                        </label>
                        <div class="note"><a href="#">Forgot password?</a></div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row">
                    <div class="col col-4"></div>
                    <div class="col col-8">
                        <label class="checkbox"><input type="checkbox" name="remember_me" value="1" checked><i></i>Keep me logged in</label>
                    </div>
                </div>
            </section>
        </fieldset>
        <footer>
            {{ Form::button('Login', array('class'=>'button', 'type'=>'submit'))}}
            <!-- <button type="submit" class="button">Log in</button> -->
            <a href="/admin/register" class="button button-secondary">Register</a>
        </footer>

        <!--
		<p>
			{{ Form::label('email', 'Email:', array('for' => 'email')) }}
			{{ Form::text('email', null, array('id'=>'email', 'placeholder'=>'name@example.com')) }}
	    </p>
	
		<p>
			{{ Form::label('email', 'Password:', array('for' => 'password')) }}
			{{ Form::password('password', array('id'=>'password', 'placeholder'=>'Password')) }}
	    </p>
	
	    <p class="login-submit">
	    	{{ Form::button('Login', array('class'=>'login-button', 'type'=>'submit'))}}
	    </p>
	
	    <p class="forgot-password"><a href="/">Forgot your password?</a></p> -->

        {{ Form::close() }}
    </div>
@stop