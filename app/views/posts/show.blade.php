@extends('layouts.master')

@include('partials.jumbo')


@section('content')

<div class="container">
    <h2>{{{ $post->title }}}</h3>
    <h4>by {{{$post->user->email}}}</h5>
    <p>{{{$post->body}}}</p>
    <p>Created: {{{$post->created_at->diffForHumans() }}}</p>


    <div class="post-body">
<!--         <p>{{{ $post->body }}}</p> -->
        @if (Auth::check())
<!--             {{{ Auth::id() }}} -->
            <a href="{{{ action('PostsController@edit', $post->id) }}}" class="btn btn-primary pull-right">Edit Post</a>
        @endif

        @if (Auth::check())
        {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete')) }}
            {{ Form::submit('Delete Post', array('class' => 'btn btn-danger')) }}
        {{ Form::close() }}
        @endif

    </div>

</div>

@stop