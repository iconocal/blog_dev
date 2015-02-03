@extends('layouts.master')

@section('content')
    
    <div class="page-header"><h1>Create A Post</h1></div>
    


{{ Form::open(array('action' => 'PostsController@store')) }}
  @include('posts.form')

    {{ Form::submit('Create Post', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}



@stop