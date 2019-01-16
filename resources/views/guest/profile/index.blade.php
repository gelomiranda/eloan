@extends('layouts.app')
@section('menu','Profile')
@section('action','Create')
@section('content')
<div class="col-sm-12">
    <div class="box-body">
      {{ Form::model( $profile, ['route' => ['profile.update', $profile->user_id], 'method' => 'put', 'role' => 'form'] ) }}
		@csrf
        @include('guest.profile.fields')
      {{ Form::close() }}
  </div>
</div>

@endsection