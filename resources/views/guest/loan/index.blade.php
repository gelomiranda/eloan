@extends('layouts.app')
@section('menu','Loan Application')
@section('action','List')
@section('content')
 	<div class="col">
 		<div class="box-body">
 	  <table class="table">
	    <thead>
	    	<tr>
	    	  	<th scope="col">#</th>
	        	<th scope="col">Amount</th>
	        	<th scope="col">Application Date</th>
	        	<th scope="col">Due Date</th>
	        	<th scope="col">Status</th>
			</tr>
			@foreach ($loans as $loan)
			<tr>
				<td>{{ $loan->id }}</td>
				<td>{{ $loan->amount }}</td>
				
				<td>{{ \Carbon\Carbon::parse($loan->created_at)->format('M/d/Y')  }}</td>
				<td>{{ \Carbon\Carbon::parse($loan->created_at)->addDays($loan->term + 1)->format('M/d/Y') }}</td>
				<td><span class="label label-success">{{ $loan->status }}</span></td>
			</tr>
	    	@endforeach

	    	@if(count($loans) == 0)
	    	<tr>
	    	    <td colspan="6" class="text-center"><span class=" label label-danger">No Loan Found.</span></td>
	    	</tr>
	    	@endif
	    	<tr>
	    	    <td colspan="6" class="text-center"><a href="{{ route('loan.create') }}"><span class="label label-success">Apply Loan</span></a></td>
	    	</tr>	
	    </thead>
	    <tbody>
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