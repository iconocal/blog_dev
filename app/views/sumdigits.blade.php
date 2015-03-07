
<?php

$sum = 0;

function sumDigits($num) {
     if (is_numeric($num)) {
         $sum = array_sum(str_split($num));
         return $sum;
     } 
}

if(isset($_POST['integer'])) {
        $sum = sumDigits($_POST['integer']);
    }

?>


@extends('layouts.master')

@section('content')

<div class="container">
<h1>Sum Digits!</h1>



{{ Form::open(array('url' => '/sumdigits')) }}
    <div class="form-group">
        {{ Form::label('integer', 'Enter an integer') }}
        {{ Form::number('integer', Input::old('integer'), array('class' => "form-control")) }}
{{--         {{ $errors->first('integer', '<span class="help-block">:message</span>') }} --}}
    </div>

    {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}


<p>The sum is {{{$sum}}}.</p>



{{-- end main container div --}}
</div>
@stop