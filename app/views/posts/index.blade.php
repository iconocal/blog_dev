@extends('layouts.master')

@section('content')
    <h1>All Posts</h1>

    @foreach ($posts as $post)
    <h3>{{{ $post->title }}}</h3>
    <h4>{{{$post->body}}}</h4>
@endforeach


{{ $posts->links() }}


@stop