@extends('layouts.master')

@section('content')
    <h1>New Post</h1>


    <h3>{{{ $post->title }}}</h3>
    <h4>{{{$post->body}}}</h4>






@stop