@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
  <h2>{{ $calendar->title; }}</h2>
  <div><p>{{ $calendar->begin; }} Start time</p></div>
  <div><p>{{ $calendar->finish; }} End time</p></div>
@stop