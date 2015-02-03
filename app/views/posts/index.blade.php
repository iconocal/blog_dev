@extends('layouts.master')


@section('content')

@foreach ($posts as $post)
    <article>
        <h2>{{{ $post->title }}}</h2>
        <p>{{{$post->body}}}</p>
        <p>Created: {{{$post->created_at->diffForHumans() }}}</p>
        <a href="{{{action('PostsController@show', $post->id) }}}">Read More</a>
    </article>
@endforeach


{{ $posts->links() }}


@stop