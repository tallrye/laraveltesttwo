@extends('layout')

@section('content')
	<div class="title">
        {{ trans('localization.welcome') }}. Laravel 5
        <br/>
        {{ $globalVariable }} <br/>
        The Language is set to: {{ $l }} <br/>
        Go To: <a href="{{ url($l . '/') }}">Home Page</a>
    </div>

@stop