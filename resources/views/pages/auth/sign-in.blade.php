@extends('layout.auth')

@section('content')


<div class="card">
    <header class="auth-header">
        <h1 class="auth-title">
            <div class="logo"> 
            	<span class="l l1"></span> 
            	<span class="l l2"></span> 
            	<span class="l l3"></span> 
            	<span class="l l4"></span> 
            	<span class="l l5"></span> 
            </div> 

            {{ Config('website.sitename')}}
        </h1>
    </header>
    <div class="auth-content">
        <p class="text-xs-center">{{ __("LOGIN TO CONTINUE") }}</p>

		@if(count(Session::get('error')) > 0)
		     <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
		@endif

        @if(count(Session::get('success')) > 0)
             <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif


        <form id="login-form" action="{{ action('AuthController@postSignin') }}" method="post" >
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}"> 
            	<label>{{ __("Email") }}</label> 
            	<input type="email" class="form-control underlined" name="email" placeholder="{{ __('Your Email') }}" value="{{ Request::old('email') }}">
            	{!! $errors->first('email', '<p class="has-danger form-control-feedback">:message</p>') !!} 
            </div>
            
            <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}"> 
            	<label>{{ __("Password") }}</label> 
            	<input type="password" class="form-control underlined" name="password" placeholder="{{ __('Your password') }}" value="{{ Request::old('password') }}"> 
            	{!! $errors->first('password', '<p class="has-danger form-control-feedback">:message</p>') !!}
            </div>
            
            <div class="form-group"> 
            	<label for="remember">
					<input class="checkbox" id="remember" type="checkbox"> 
					<span>{{ __("Remember me") }}</span>
				</label> 
				<a href="reset.html" class="forgot-btn pull-right">{{ __("Forgot password?") }}</a> 
			</div>
            <div class="form-group"> 
            	<input type="submit" class="btn btn-block btn-primary" value="{{ __('Login') }}">
            </div>
            <div class="form-group">
                <p class="text-muted text-xs-center">
                	{{ __("Do not have an account") }}? 
                	<a href="{{ action('AuthController@getSignup') }}">{{ __("Sign Up!") }}</a>
                </p>
            </div>
        </form>
    </div>
</div>
<div class="text-xs-center">
    <a href="{{ URL::to('/') }}" class="btn btn-secondary rounded btn-sm"> <i class="fa fa-arrow-left"></i> {{ __("Back to dashboard") }} </a>
</div>
@stop

@push('script')

@endpush