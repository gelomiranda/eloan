@extends('layouts.app')
@section('menu','Category')
@section('action','Create')
@section('content')
<div class="col-sm-6">
    <div class="box-body">
      {{ Form::open( array( 'route' => ['admin.category.store'], 'role' => 'form' ) ) }}
        @csrf
        @include('admin.category._fields')
      {{ Form::close() }}
  </div>
</div>

@endsection