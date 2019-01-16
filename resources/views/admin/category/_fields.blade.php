<!-- text input -->
  <div class="form-group">
    {{ Form::label('description', 'Description') }}
    {{ Form::text('description',null,['class' => 'form-control','placeholder' => 'Enter category description']) }}
  </div>
  <div class="row">
    <div class="form-group col-xs-6">
      {{ Form::label('minimum_amount', 'Minimum Amount') }}
      {{ Form::text('minimum_amount', null,['class' => 'form-control','placeholder' => 'Enter minimum loanable amount']) }}
    </div>
    <div class="form-group col-xs-6">
      {{ Form::label('maximum_amount', 'Maximum Amount') }}
      {{ Form::text('maximum_amount', null,['class' => 'form-control','placeholder' => 'Enter maximum loanable amount']) }}
    </div>
  </div>
  <div class="row">
    <div class="form-group col-xs-6">
      {{ Form::label('terms', 'Terms') }}
      {{ Form::text('terms', null,['class' => 'form-control','placeholder' => 'Enter number of terms']) }}
    </div>
    <div class="form-group col-xs-6">
      {{ Form::label('interest_rate', 'Interest Rate') }}
      {{ Form::text('interest_rate', null, ['class' => 'form-control','placeholder' => 'Enter interest rate']) }}
    </div>
  </div>
  <div class="row">
    <div class="form-group col-xs-6">
      {{ Form::label('incremental', 'Increment on renewal') }}
      {{ Form::select('incremental', array('1' => 'Yes', '0' => 'No'),null,['class' => 'form-control']) }}
    </div>
    <div class="form-group col-xs-6">
      {{ Form::label('increment_value', 'Increment Value') }}
      {{ Form::text('increment_value', null,['class' => 'form-control','placeholder' => 'Amount to be increment upon renewal']) }}
    </div>
  </div>
  <div class="form-group col-xs">
    {{ Form::button('Create',['type' => 'submit','class'=> 'form-control btn-primary']) }}
  </div>
  
</div>
