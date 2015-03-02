@extends('layouts.master')


@section('content')

<div class="container">
@if (Auth::check())
    <a href="{{{ action('PostsController@create') }}}" class="btn btn-primary">New Post</a>
@endif

@foreach ($posts as $post)
    <article>
        <h2>{{{ $post->title }}}</h2>
        <h4>by {{{$post->user->email}}}</h4>
        <p>{{{$post->body}}}</p>
        <p>Created: {{{$post->created_at->diffForHumans() }}}</p>
        <a href="{{{action('PostsController@show', $post->id) }}}">Read More</a>
    </article>
@endforeach


<div>

{{ $posts->appends(array('search' => Input::get('search')))->links() }}

</div>

</div>

@stop