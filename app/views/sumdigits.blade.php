
<?php

function sumDigits($num) {
     if (is_numeric($num)) {
         $sum = array_sum(str_split($num));
         return $sum;
     } 
}

$number = Request::input('integer');

$sum = sumDigits($number);

?>


@extends('layouts.master')

@include('partials.navbar')

@section('content')

<div class="container">


<br><br>

<h1>Sum 'Dem Digits!</h1>

<div>

{{ Form::open() }}
    <div class="form-group">
        {{ Form::label('integer', 'Enter an integer to sum') }}
        {{ Form::number('integer', Input::old('integer'), array('class' => "form-control")) }}
    </div>

    {{ Form::submit('Go Time!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>


<p>The sum of {{{$number}}} is {{{$sum}}}.</p>



{{-- end main container div --}}
</div>
@stop