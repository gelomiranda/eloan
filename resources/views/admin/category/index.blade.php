@extends('layouts.app')
@section('menu','Category')
@section('action','List')

@section('content')
 	<div class="col">
 		<div class="box-body">
 	  <table class="table">
	    <thead>
	    	<tr>
	    	  	<th><input type="checkbox"></th>
	        	<th scope="col">#</th>
	        	<th scope="col">Description</th>
	        	<th scope="col">Terms</th>
	        	<th scope="col">Min. Amount</th>
				<th scope="col">Max. Amount</th>
				<th scope="col" class="text-center">Available</th>
				<th scope="col" class="text-center">Action</th>
			</tr>
	    </thead>
	    <tbody>
	    	@foreach ($categories as $category)
	      <tr>
	      	<td><input type="checkbox"></td>
	        	<td scope="row">{{ $category->id }}</td>
	        	<td>
	        		<a href="{{ route('admin.category.edit',$category->id) }}">
	        			{{ $category->description }}
	        		</a>
	        	</td>
	        	<td>{{ $category->terms }} Month</td>
	        	<td>{{ $category->minimum_amount }} PHP</td>
	        	<td>{{ $category->maximum_amount }} PHP</td>
	        	<td class="text-center">@if( $category->toggle === 1 ) Yes @else No @endif </td>
	        	<td class="text-center">
	        		{{ Form::open(['method' => 'post','route'=> array('admin.category.destroy',$category->id),]) }}
 						{{ method_field('DELETE') }}
                  <button class="btn btn-default" type="submit">Delete</button>
               {{ Form::close() }}
	        	</td>
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
            <a href="{{route('admin.category.create')}}"><span class="label label-success">Create</span></a>
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
