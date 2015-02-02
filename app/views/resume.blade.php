<!-- resume.blade.php -->


@extends('layouts.master')

@section('content')
    <h1>This is my resume.</h1>

    <a class="btn btn-default" href="{{ action('HomeController@showPortfolio') }}" role="button">Portfolio</a>

<!--         <a href="{{ action('HomeController@showPortfolio') }}">My Portfolio</a> -->

<a class="btn btn-default" href="{{ action('HomeController@showGame') }}" role="button">Whack-A-Moron</a>
 
@stop









