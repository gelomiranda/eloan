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
				<th scope="col" class="text-center">Status</th>
			</tr>
	    </thead>
	    <tbody>
	    	@foreach ($transactions as $transaction)
		      <tr>
		      	<td>
		      		<td scope="row">{{ $transaction->id }}</td>
		        	<td>
		        		<a href="{{ route('category.edit',$category->id) }}">
		        			{{ $transaction->user_id }}
		        		</a>
		        	</td>
		        	<td>{{ $transaction->amount }} PHP</td>
		        	<td>{{ $transaction->term }} PHP</td>
		        	
		      </tr>
		    @endforeach
	    </tbody>
	  </table>
	  </div>
	</div>
	
	<div class="col">
	   <div class="box-header with-border">
          <h3 class="box-title">Category Information</h3>
          <div class="box-tools pull-right">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <a href="{{route('admin.transaction.create')}}"><span class="label label-success">Create</span></a>
          </div><!-- /.box-tools -->
        	</div><!-- /.box-header -->
        	<div class="box-body">
          	The body of the box
        </div><!-- /.box-body -->
	</div>
@endsection

@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
	})
</script>

@endsection
