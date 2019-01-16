@extends('layouts.app')
@section('menu','Users Profile')
@section('action','List')
@section('content')
 	<div class="col">
 		<div class="box-body">
 	  <table class="table">
	    <thead>
	    	<tr>
	    	  	<th scope="col">#</th>
	        	<th scope="col">Name</th>
	        	<th scope="col">Address</th>
	        	<th scope="col">Contact No.</th>
	        	<th scope="col">Company</th>
	        	<th scope="col">Bank Name</th>
	        	<th scope="col">Date Applied</th>
	        	<th scope="col" class="text-center">Status</th>
			</tr>
			@foreach ($profiles as $profile)
			<tr>
				<td>{{ $profile->id }}</td>
				<td><a href="{{ route('admin.profile.show',['id' => $profile->id]) }}">{{ $profile->first_name.' '.$profile->middle_name.' '.$profile->last_name }}</a> </td>
				<td>{{ $profile->address }}</td>
				<td>{{ $profile->mobile_no }}</td>
				<td>{{ $profile->current_employer }}</td>
				<td>{{ $profile->bank_account_name }}</td>
				<td>{{ \Carbon\Carbon::parse($profile->created_at)->format('M/d/Y')  }}</td>
				<td class="text-center">
					@if($profile->is_approved == 1)
					<label class="label label-success">
						{{ 'Approved' }}
					</label>
					@else
					<label class="label label-danger">
						{{ 'For Approval'}}
					</label>
					@endif
				</td>
			</tr>
	    	@endforeach	
	    </thead>
	    <tbody>
	    	
	    </tbody>
	  </table>
	  </div>
	</div>
@endsection

@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
	})
</script>

@endsection