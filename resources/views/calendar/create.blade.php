@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
<form method="post" action="{{ route('calendar.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="begin" type="datetime-local" name="partydate">
    <x-adminlte-input name="finish" type="datetime-local" name="partydate">
</form>
@stop