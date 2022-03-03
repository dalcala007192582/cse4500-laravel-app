@extends('adminlte::page')

@section('title', 'title')

@section('content_header')
    <h1>Header</h1>
@stop

@section('content')
    <p>Content here</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" ></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable( {
			columnDefs: [ {
				targets: [ 0 ],
				orderData: [ 0, 1 ]
			}, {
				targets: [ 1 ],
				orderData: [ 1, 0 ]
			}, {
				targets: [ 4 ],
				orderData: [ 4, 0 ]
			} ]
		});
	}); </script>
@stop