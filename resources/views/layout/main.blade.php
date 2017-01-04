<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{!! config('website.sitename') !!}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="{{ URL::to('/') }}/css/vendor.css">
        <link rel="stylesheet" href="{{ URL::to('/') }}/css/app.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
        <!-- Theme initialization -->
        @stack('style')
    </head>
    
    <body>

        <div class="main-wrapper">
            <div class="app" id="app">
                @include("layout.header")

                @include("layout.sidebar")

                <article class="content">
                    <div class="title-block">
                        <h1 class="title"> {{ Config('website.sitename')}} </h1>
                        <p class="title-description"> {{ __("Admin Panel") }} </p>
                    </div>
                    
                    @yield('content')

                </article>