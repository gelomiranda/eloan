
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
	        	<th scope="col">Interest</th>
	        	<th scope="col">Application Date</th>
	        	<th scope="col">Payment Date</th>
	        	<th scope="col">Status</th>
				<th scope="col" class="text-center">Action</th>
			</tr>
	    </thead>
	    <tbody>
	    	
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
            <a href="{{ route('transaction.create') }}"><span class="label label-success">Create</span></a>
            
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
