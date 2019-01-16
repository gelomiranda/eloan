<div class="row">
  	<div class="form-group">
		{{ Form::label('amount', 'Select Loan Amount') }}
		{{ Form::select('amount', array('1000' => '1000','2000' => '2000','3000' => '3000'),null,['class' => 'form-control','id' => 'amount']) }}
	</div>
	<div class="form-group">
	</div>
	<div>
		{{ Form::label('', 'Select terms of payment: ') }}
		{{ Form::label('15days', '15 Days') }}
    	{{ Form::radio('terms', '15', true) }}
		{{ Form::label('description', '30 Days') }}
    	{{ Form::radio('terms', '30', true) }}
	</div>
	<div>
		<hr>
		<p>Loan amount: <span class="label label-warning pull-right" id="loanAmount"></span></p>
		<p>Loan Interest: <span class="label label-warning pull-right" id="interest">100 PHP</span></p>
		<p>Convenience fee: <span class="label label-warning pull-right" >100 PHP</span></p>
		<hr>
		<p>Total Repayment Amount: <span class="label label-success pull-right" id="estimatedAmount"></span></p>
	</div>
	<div class="form-group col-xs">
    {{ Form::button('Submit Loan',['type' => 'submit','class'=> 'form-control btn-primary']) }}
  </div>
</div>

