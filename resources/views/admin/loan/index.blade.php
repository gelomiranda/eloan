@extends('layouts.app')
@section('menu','Loan')
@section('action','List')

@section('content')
 	<div class="col">
 		<div class="box-body">
 	  <table class="table">
	    <thead>
	    	<tr>
	    	  	
	        	<th scope="col">Loan ID</th>
	        	<th scope="col">Client</th>
	        	<th scope="col">Amount</th>
	        	<th scope="col">Terms</th>
				<th scope="col">Application Date</th>
				<th scope="col" class="text-center">Status</th>
			</tr>
	    </thead>
	    <tbody>
	    	@foreach ($loans as $loan)
		      <tr>
		      		<td scope="row">
						<a href="{{ route('admin.loan.show',$loan->id) }}">
		      				{{ $loan->id }}
		      			</a>
		      		</td>
		        	<td>
		        		<a href="{{ route('admin.loan.show',$loan->id) }}">
		        			{{ $loan->user->profile->first_name .' '.  $loan->user->profile->last_name}}
		        		</a>
		        	</td>
		        	<td>{{ $loan->amount }} PHP</td>
		        	<td>{{ $loan->term }} Days</td>
		        	<td>{{ \Carbon\Carbon::parse($loan->created_at)->format('M/d/Y')  }}</td>
		        	<td  class="text-center">{{ $loan->status }} </td>
		        	{{ Form::close() }}
		        	</td>
		      </tr>
		    @endforeach
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
