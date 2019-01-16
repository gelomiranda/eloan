@extends('layouts.app')
@section('menu','Document')
@section('action','Create')
@section('content')
<div class="col-sm-6">
    <div class="box-body">
      {{ Form::open( array( 'route' => ['document.store'], 'role' => 'form','enctype' => 'multipart/form-data') ) }}
        @csrf
        <div class="form-group">
          {{ Form::label('image', 'Select Image') }}

          {{ Form::file('image', array('class' => 'image')) }}
        </div>

        <div class="form-group">
          {{ Form::label('description', 'Description') }}

           {{ Form::text('description', null,['class' => 'form-control','placeholder' => 'Enter description eg.(SSS ID)']) }}
        </div>
        <div class="form-group col-xs">
          {{ Form::button('Create',['type' => 'submit','class'=> 'form-control btn-primary']) }}
        </div>
      {{ Form::close() }}
  </div>
</div>

@endsection