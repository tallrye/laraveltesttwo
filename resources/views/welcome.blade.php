@extends('layout')

@section('content')
    <div class="title">
        {{ trans('localization.welcome') }}, {{ $serhat->name . ' ' .$serhat->surname }}. Laravel 5
        <br/>
        {{ $globalVariable }} <br/>
        The Language is set to: {{ $l }} <br/>
        Go To: <a href="{{ url($l . '/about') }}">About Page</a>
    </div>
@stop