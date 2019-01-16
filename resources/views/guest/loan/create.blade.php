@extends('layouts.app')
@section('menu','Loan')
@section('action','application')
@section('content')
<div class="col-sm-6">
    <div class="box-body">
      {{ Form::open( array( 'route' => ['loan.store'], 'role' => 'form' ) ) }}
        @csrf
        @include('guest.transaction.fields')
      {{ Form::close() }}
  	</div>
</div>

@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){

		$("#estimatedAmount").text(computeAmount( $('input[type=radio][name=terms]:checked').val(), $("#amount").val() ) + " PHP");
	    $("#loanAmount").text($("#amount").val()  + " PHP");

		$('input[type=radio][name=terms]').change(function() {
	       	if($("#amount").val() != 0){
	         	$("#estimatedAmount").text(computeAmount( this.value, $("#amount").val() ) + " PHP");
	       	}
	    });

        $("#amount").change(function(){
            $("#estimatedAmount").html(computeAmount( $('input[type=radio][name=terms]:checked').val(), this.value ) + " PHP") ;
            $("#loanAmount").text($("#amount").val() + " PHP");
        });

        function computeAmount(days,amount){  
		    var day= days;
		    var myamount = 0;
		    myamount = amount;
		    totalAmount = 0;
		    if( day == 30 ){
		     totalAmount = (amount * 0.1) + Number(myamount) + 100;
		     $("#interest").text((amount * 0.1) + " PHP");  
		    }else{
		     totalAmount = (amount * 0.5) + Number(myamount) + 100;
		     $("#interest").text((amount * 0.05) + " PHP");
		    }
		    return totalAmount;
		}
	});
</script>
@endsection

@endsection