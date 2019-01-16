@extends('layouts.app')
@section('menu','Category')
@section('action','Edit')
@section('content')
<div class="col-sm-6">
    <div class="box-body">
      {{ Form::model( $category, ['route' => ['admin.category.update', $category->id], 'method' => 'put', 'role' => 'form'] ) }}
		@csrf
        @include('admin.category._fields')
      {{ Form::close() }}
  </div>
</div>

@endsection