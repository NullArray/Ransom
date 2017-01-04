<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{!! config('website.sitename') !!} | Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="{{ URL::to('/') }}/css/vendor.css">
        <link rel="stylesheet" href="{{ URL::to('/') }}/css/app.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Theme initialization -->
        @stack('style')
    </head>
    
    <body>

        <div class="auth">
            <div class="auth-container">
                @yield('content')
            </div>
        </div>

    </body>

</html>