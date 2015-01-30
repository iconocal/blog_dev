@extends('layouts.master')

@section('content')
    <h1>This is Calvin's Portfolio</h1>

    <a href="{{ action('HomeController@showResume') }}">My Resume</a>
@stop