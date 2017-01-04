@extends('layout.main')

@section('content')
<div class="container" style="text-align: center;">

    <h1 id="app-title" class="animated fadeIn">My HumHub site</h1>

    <br>

    <div class="panel panel-default animated bounceIn" style="max-width: 300px; margin: 0 auto 20px; text-align: left;">

        <div class="panel-heading"><strong>Please</strong> sign in</div>

        <div class="panel-body">


            <p>If you're already a member, please login with your username/email and password.</p>

            <form id="account-login-form" action="" method="post">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="form-group field-login_username required">

                    <input type="text" class="form-control" name="Login[username]" placeholder="Email" value="{{ Request::old('email') }}">
                    {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
                    
                </div>
                <div class="form-group field-login_password required">

                    <input type="password" class="form-control" name="Login[password]" placeholder="password" value="{{ Request::old('password') }}">
                    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                    
                </div>
                <div class="form-group field-login-rememberme">

                    <input type="hidden" name="Login[rememberMe]" value="0">
                    <label for="login-rememberme">
                        <input type="checkbox" id="login-rememberme" name="Login[rememberMe]" value="1" checked="" class="regular-checkbox"> Remember me
                        <div class="regular-checkbox-box"></div
                    label>

                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <button type="submit" id="login-button" class="btn btn-large btn-primary" data-ui-loader="">Sign in</button> 
                    </div>
                    <div class="col-md-8 text-right">
                        <small>
                        Forgot your password?                        
                        <a href=""><br>Create a new one.</a>
                    </small>
                    </div>
                </div>

            </form>
        </div>

    </div>

    <br>

    <div class="panel panel-default animated bounceInLeft" style="max-width: 300px; margin: 0 auto 20px; text-align: left;">

        <div class="panel-heading"><strong>Sign</strong> up</div>

        <div class="panel-body">

            <p>Don't have an account? Join the network by entering your e-mail address.</p>

            <form id="invite-form" action="/HumHub/index.php?r=user%2Fauth%2Flogin" method="post">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="form-group field-register-email required">
                    <input type="email" id="register-email" class="form-control" name="Invite[email]" placeholder="Email" value="{{ Request::old('email') }}">
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
                <hr>
                <button type="submit" class="btn btn-primary" data-ui-loader="">Register</button>
            </form>
        </div>
    </div>


    <div class="text text-center animated fadeIn">
        Choose language: &nbsp;
        <div class="langSwitcher">
            <form id="choose-language-form" action="/HumHub/index.php?r=user%2Fauth%2Flogin" method="post">
                <input type="hidden" name="_csrf" value="R3VmQXQxWmIjGiMFLGkqUAo9NQZNZTUMDEYSIyVGAhYhF1MxNlUtDg=="> 

                <select id="chooselanguage-language" name="ChooseLanguage[language]" onchange="this.form.submit()">
                    <option value="en">English (US)</option>
                    <option value="en_gb">English (UK)</option>
                    <option value="de">Deutsch</option>
                </select> 
            </form>
        </div>
    </div>
</div>
@stop