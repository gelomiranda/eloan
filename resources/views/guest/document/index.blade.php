@extends('layouts.app')
@section('menu','Category')
@section('action','List')

@section('content')
 	<div class="col">
 		<div class="box-body">
			@include('guest.document.list',['documents' => $documents]) 	  
		</div>
	</div>
@endsection