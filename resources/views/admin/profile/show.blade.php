@extends('layouts.app')
@section('menu','User Profile')
@section('action','Information')
@section('content')
 	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-3">
	 			<h4 class="box-title">Personal Information</h4>	
	 			<div>
	 				<p>First Name :<span class="text-bold">{{ $profile->first_name  }}</span></p>
	 			</div>
	 			<div>
	 				<p>Middle Name :<span class="text-bold">{{ $profile->middle_name  }}</span></p>
	 			</div>
	 			<div>
	 				<p>Last Name :<span class="text-bold">{{ $profile->last_name  }}</span></p>
	 			</div>
	 			<div>
	 				<p>Address :<span class="text-bold">{{ $profile->address  }}</span></p>
	 			</div>
	 			<div>
	 				<p>Mobile No. :<span class="text-bold">{{ $profile->mobile_no  }}</span></p>
	 			</div>
			</div>
			<div class="col-sm-3">
	 			<h4 class="box-title">Company Information</h4>	
	 			<div>
	 				<p>Current Employer :<span class="text-bold">{{ $profile->current_employer  }}</span></p>
	 			</div>
	 			<div>
	 				<p>Number of tenure :<span class="text-bold">{{ $profile->no_of_years  }}</span></p>
	 			</div>
	 			<div>
	 				<p>Company Address :<span class="text-bold">{{ $profile->office_address  }}</span></p>
	 			</div>
	 			<div>
	 				<p>Company Contact No :<span class="text-bold">{{ $profile->office_contact_no  }}</span></p>
	 			</div>
	 			<div>
	 				<p>Monthly Income :<span class="text-bold text-italic">{{ $profile->monthly_gross_income  }} PHP</span></p>
	 			</div>
	 		</div>
	 		<div class="col-sm-3">
	 			<h4 class="box-title">Bank Information</h4>	
	 			<div>
	 				<p>Bank Account Name :<span class="text-bold">{{ $profile->bank_account_name  }}</span></p>
	 			</div>
	 			<div>
	 				<p>Bank Account Number:<span class="text-bold">{{ $profile->bank_account_no  }}<span></p>
	 			</div>
	 		</div>
	 		<div class="col-sm-3">
	 			<h4 class="box-title">Additional Information</h4>	
	 			<div>
	 				<p>Created At :<span class="text-bold">{{ \Carbon\Carbon::parse($profile->created_at)->format('M/d/Y') }}</span></p>
	 			</div>
	 			<div>
	 				<p>Updated At:<span class="text-bold">{{ \Carbon\Carbon::parse( $profile->updated_at)->format('M/d/Y')  }}</span></p></div>
	 			<div>
	 				<p>Approved At:<span class="text-bold">{{ \Carbon\Carbon::parse($profile->approved_at)->format('M/d/Y')   }}</span></p></div>
	 			<div>
	 				<p>Approved By:<span class="text-bold">{{ $profile->approved_by  }}</span></p>
	 			</div>
	 		</div>
		</div>
		@if($profile->is_approved == 0)
		<div class="row">
			<div class="col-sm-12">
				{{ Form::model( $profile, ['route' => ['profile.approve', $profile->user_id], 'method' => 'put', 'role' => 'form'] ) }}
					
 					<button class="btn btn-success" type="submit">Approve Profile</button>
                {{ Form::close() }}
			</div>
		</div>
		@endif
	</div>
	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-12">
			<br>
			<br>
				<h4 class="box-title">Uploaded Documents</h4>
				@include('guest.document.list',['documents' => $documents])
			</div>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-12">
			<br>
			<br>
				<h4 class="box-title">Loan History</h4>
				@include('guest.document.list',['documents' => $documents])
			</div>
		</div>
	</div>
@endsection

@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
	})
</script>

@endsection