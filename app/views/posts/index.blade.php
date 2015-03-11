@extends('layouts.master')

@include('partials.navbar')

@include('partials.jumbo')

@section('content')

<div class="container">
            <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
@if (Auth::check())
    <a href="{{{ action('PostsController@create') }}}" class="btn btn-primary">New Post</a>
@endif

@foreach ($posts as $post)
        <div class="post-preview">
        <h2 class="post-title">{{{ $post->title }}}</h2>
        <h4>by {{{$post->user->email}}}</h4>
        <p>{{{$post->body}}}</p>
        <p class="post-meta">Created: {{{$post->created_at->diffForHumans() }}}</p>
        <a href="{{{action('PostsController@show', $post->id) }}}">Read More</a>
        </div>
        <hr>
@endforeach

</div>
</div>





{{-- Begin Pagination --}}
<div>

{{ $posts->appends(array('search' => Input::get('search')))->links() }}

</div>
{{-- End Pagination --}}

</div>

@stop