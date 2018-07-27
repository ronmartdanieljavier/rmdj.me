{{--<!doctype html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}
    {{--<head>--}}
        {{--<meta charset="utf-8">--}}
        {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
        {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

        {{--<title>R.M.D.J</title>--}}

        {{--<!-- Fonts -->--}}
        {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}
        {{--<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">--}}
        {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}

        {{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
        {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}
        {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
        {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}

        {{--<!-- Styles -->--}}
        {{--<style>--}}
            {{--html, body {--}}
                {{--background-color: #fff;--}}
                {{--color: #636b6f;--}}
                {{--font-family: 'Raleway', sans-serif;--}}
                {{--font-weight: 100;--}}
                {{--height: 100vh;--}}
                {{--margin: 0;--}}
            {{--}--}}

            {{--.full-height {--}}
                {{--height: 100vh;--}}
            {{--}--}}

            {{--.flex-center {--}}
                {{--align-items: center;--}}
                {{--display: flex;--}}
                {{--justify-content: center;--}}
                {{--height: 100vh;--}}
            {{--}--}}

            {{--.position-ref {--}}
                {{--position: relative;--}}
            {{--}--}}

            {{--.top-right {--}}
                {{--position: absolute;--}}
                {{--right: 10px;--}}
                {{--top: 18px;--}}
            {{--}--}}

            {{--.content {--}}
                {{--text-align: center;--}}
                {{--height: 1vh;--}}
            {{--}--}}

            {{--.title {--}}
                {{--font-size: 84px;--}}
            {{--}--}}

            {{--.links > a {--}}
                {{--color: #636b6f;--}}
                {{--padding: 0 25px;--}}
                {{--font-size: 12px;--}}
                {{--font-weight: 600;--}}
                {{--letter-spacing: .1rem;--}}
                {{--text-decoration: none;--}}
                {{--text-transform: uppercase;--}}
            {{--}--}}

            {{--.m-b-md {--}}
                {{--margin-bottom: 30px;--}}
            {{--}--}}

        {{--</style>--}}
        {{--<!-- Styles -->--}}
        {{--<link href="{{ asset('css/header.css') }}" rel="stylesheet">--}}
    {{--</head>--}}
    {{--<body>--}}
        {{--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">--}}
            {{--<a class="navbar-brand" href="#">R.M.D.J</a>--}}
            {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
                {{--<span class="navbar-toggler-icon"></span>--}}
            {{--</button>--}}

            {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                {{--<ul class="navbar-nav mr-auto">--}}
                    {{--<li class="nav-item active">--}}
                        {{--<a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">About Me</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item dropdown">--}}
                        {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                            {{--Passions--}}
                        {{--</a>--}}
                        {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                            {{--<a class="dropdown-item" href="#">Careers</a>--}}
                            {{--<a class="dropdown-item" href="#">Adventures</a>--}}
                            {{--<div class="dropdown-divider"></div>--}}
                            {{--<a class="dropdown-item" href="#">Interests</a>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">Contact Me</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<form class="form-inline my-2 my-lg-0">--}}
                    {{--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
                    {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</nav>--}}
    {{--@if (Route::has('login'))--}}
    {{--<div class="top-right links">--}}
    {{--@auth--}}
        {{--<a class="btn btn-primary" href="{{ url('/home') }}">Home</a>--}}
        {{--@else--}}
            {{--<a href="{{ route('login') }}">Login</a>--}}
            {{--<a href="{{ route('register') }}">Register</a>--}}
            {{--@endauth--}}
            {{--</div>--}}
            {{--@endif--}}
        {{--<div id="aboutHeader" class="flex-center position-ref full-height">--}}



            {{--<div class="" style="text-align: center;padding-left: 5em;">--}}
                {{--<div class="ui text container">--}}
                    {{--<span id="welcome" class="ui header">--}}
                        {{--Hi, I'm Ron Mart Daniel Javier--}}
                    {{--</span>--}}
                    {{--<br/>--}}
                    {{--<span id="welcomeDesc" class="ui header">--}}
                        {{--a software engineer.--}}
                    {{--</span>--}}
                    {{--<br/>--}}
                    {{--<br/>--}}
                    {{--<button type="button" class="btn btn-primary btn-lg">Learn more</button>--}}
                    {{--<div class="ui huge primary button">Get Started <i class="right arrow icon"></i></div>--}}

                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="content">--}}
                {{--<img id="aboutImgCloud1" class="" src="../assets/images/aboutCloud1v2.svg" />--}}
                {{--<img id="aboutImgCloud1" class="" src="{{ asset('images/aboutCloud1v2.svg')  }}" />--}}
                {{--<img id="aboutImgCloudMini1" src="../assets/images/aboutCloudMini1.svg" />--}}
                {{--<img id="aboutImgCloudMini1" src="{{ asset('images/aboutCloudMini1.svg')  }}" />--}}
                {{--<img id="aboutImgCloudMini2" src="{{ asset('images/aboutCloudMini2.svg')  }}" />--}}
                {{--<img id="aboutImgCloudMini3" src="{{ asset('images/aboutCloudMini3.svg')  }}" />--}}
                {{--<img id="aboutImgCloudMini2" src="../assets/images/aboutCloudMini2.svg" />--}}
                {{--<img id="aboutImgCloudMini3" src="../assets/images/aboutCloudMini3.svg" />--}}





                {{--<div class="title m-b-md">--}}
                    {{--Laravel--}}
                {{--</div>--}}

                {{--<div class="links">--}}
                    {{--<a href="https://laravel.com/docs">Documentation</a>--}}
                    {{--<a href="https://laracasts.com">Laracasts</a>--}}
                    {{--<a href="https://laravel-news.com">News</a>--}}
                    {{--<a href="https://forge.laravel.com">Forge</a>--}}
                    {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</body>--}}
{{--</html>--}}

@extends('layouts.app')

@section('content')
    <home-component></home-component>
@endsection