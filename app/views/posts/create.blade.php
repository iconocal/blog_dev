@extends('layouts.master')

@section('content')
    <h1>Create A Post</h1>

<form action="{{{ action('PostsController@store') }}}" method="POST">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{{ Input::old('title') }}}" placeholder="Enter Title">
    {{ $errors->first('title', '<span class="help-block">:message</span>') }}
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <input type="text" class="form-control" id="body" name="body" value="{{{ Input::old('body') }}}" placeholder="Enter Body">
    {{ $errors->first('body', '<p class="help-block">:message</p>') }}
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>



@stop