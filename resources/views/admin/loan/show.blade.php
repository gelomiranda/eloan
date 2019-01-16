@extends('layouts.app')
@section('menu','Loan Information')
@section('action','List')
@section('content')
 	<div class="col">
 		<div class="box-body">
 			<div class="row">
	 			<div class="col-sm-6">
	 				<h4 class="box-title">Loan Information</h4>	
		 			<div>
		 				<p>Amount :<span class="text-bold">{{ $loan->amount  }} PHP</span></p>
		 			</div>
		 			<div>
		 				<p>Terms :<span class="text-bold">{{ $loan->terms  }} Days</span></p>
		 			</div>
		 			<div>
		 				<p>Status :<span class="text-bold">{{ $loan->status  }}</span></p>
		 			</div>
	 			</div>
	 			<div class="col-sm-6">
	 				<div class="form-group col-xs-12">
	 					<h4 class="box-title">Update Status</h4>	
	 				</div>
	 				<div class="form-group col-xs-6">
				      {{ Form::label('status', 'Status') }}
				      {{ Form::select('status', array('Approved' => 'Approved','Closed' => 'Closed','Cancelled' => 'Cancelled'),null,['class' => 'form-control','id' => 'status']) }}
				    </div>
				    <div class="form-group col-xs-6">
				      {{ Form::label('remark', 'Remark') }}
				      {{ Form::text('remark', null, ['class' => 'form-control','placeholder' => 'Enter remark']) }}
				    </div>
	 			</div>
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