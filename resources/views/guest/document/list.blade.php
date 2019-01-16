<table class="table">
<thead>
<tr>
  	<th scope="col">#</th>
	<th scope="col">Description</th>
	<th scope="col">File</th>
	<th scope="col" class="text-center">Action</th>
</tr>
</thead>
<tbody>
@foreach ($documents as $document)
	<tr>
		<td scope="row">{{ $document->id }}</td>
  	<td>{{ $document->description }}</td>
  	<td>{{ $document->image }}</td>
  	<td class="text-center">
  		<button type="button" class="btn my_modal btn-default btn-block" data-toggle="modal" data-target="#modal-default" data-link="{{ asset('images/'.$document->image ) }}">
        View
      </button>
  	</td>
	</tr>
 
@endforeach
@if(count($documents) == 0)
<tr>
    <td colspan="6" class="text-center"><span class=" label label-danger">No Document Found.</span></td>
</tr>
@endif
<tr>
    <td colspan="6" class="text-center">
      <a href="{{url('document/create')}}"><span class="label label-success">Upload New Document</span></a>
    </td>
</tr>
</tbody>
</table>

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <img class="imagepreview img-responsive" src="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>     
@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		$('.my_modal').click(function(){
	      $('.imagepreview').attr('src', $(this).data('link'));
	    });
	})
</script>

@endsection