<div class="form-group">
    {{ Form::label('title', 'Post Title') }}
    {{ Form::text('title', Input::old('title'), array('class' => "form-control")) }}
    {{ $errors->first('title', '<span class="help-block">:message</span>') }}
  </div>

  <div class="form-group">
    {{ Form::label('body', 'Post Body') }}
    {{ Form::textarea('body', Input::old('body'), array('class' => "form-control", 'rows' => '4')) }}
    {{ $errors->first('body', '<p class="help-block">:message</p>') }}
  </div>
