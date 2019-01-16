<div class="row">
  <div class="col-sm-6">
    <div class="form-group">
        {{ Form::label('first_name', 'First Name') }}
        {{ Form::text('first_name',null,['class' => 'form-control','placeholder' => 'Enter first name' , $profile->is_approved == 1 ? 'readonly':'']) }}
    </div>
    <div class="form-group">
        {{ Form::label('middle_name', 'Middle Name') }}
        {{ Form::text('middle_name',null,['class' => 'form-control','placeholder' => 'Enter middle name' , $profile->is_approved == 1 ? 'readonly':'']) }}
    </div>
    <div class="form-group">
        {{ Form::label('last_name', 'Last Name') }}
        {{ Form::text('last_name',null,['class' => 'form-control','placeholder' => 'Enter last name' , $profile->is_approved == 1 ? 'readonly':'']) }}
    </div>
    <div class="form-group">
        {{ Form::label('address', 'Address') }}
        {{ Form::text('address',null,['class' => 'form-control','placeholder' => 'Enter permanent address' , $profile->is_approved == 1 ? 'readonly':'']) }}
    </div>
    <div class="form-group">
        {{ Form::label('mobile_no', 'Mobile Number') }}
        {{ Form::text('mobile_no',null,['class' => 'form-control','placeholder' => 'Enter mobile number' , $profile->is_approved == 1 ? 'readonly':'']) }}
    </div>
    <div class="form-group">
        {{ Form::label('birth_date', 'Birth Date') }}
        {{ Form::date('birth_date',null,['class' => 'form-control','placeholder' => 'Enter birthdate' , $profile->is_approved == 1 ? 'readonly':'']) }}
    </div>

    <div class="form-group">
        {{ Form::label('job_title', 'Job title') }}
        {{ Form::text('job_title',null,['class' => 'form-control','placeholder' => 'Enter job title' , $profile->is_approved == 1 ? 'readonly':'']) }}
    </div>
    <div class="row">
        <div class="form-group col-xs-6">
          <div class="form-group">
              {{ Form::label('current_employer', 'Current Employer') }}
              {{ Form::text('current_employer',null,['class' => 'form-control','placeholder' => 'Name of your company' , $profile->is_approved == 1 ? 'readonly':'']) }}
          </div>
        </div>
        <div class="form-group col-xs-6">
          <div class="form-group">
              {{ Form::label('no_of_years', 'No. of tenure') }}
              {{ Form::text('no_of_years',null,['class' => 'form-control','placeholder' => 'Number of service' , $profile->is_approved == 1 ? 'readonly':'']) }}
          </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-xs-6">
          <div class="form-group">
              {{ Form::label('office_address', 'Employer Address') }}
              {{ Form::text('office_address',null,['class' => 'form-control','placeholder' => 'Name of your company' , $profile->is_approved == 1 ? 'readonly':'']) }}
          </div>
        </div>
        <div class="form-group col-xs-6">
          <div class="form-group">
              {{ Form::label('office_contact_no', 'Employer Contact No.') }}
              {{ Form::text('office_contact_no',null,['class' => 'form-control','placeholder' => 'Number of service' , $profile->is_approved == 1 ? 'readonly':'']) }}
          </div>
        </div>
    </div>
     <div class="form-group">
        {{ Form::label('monthly_gross_income', 'Monthly Gross Income') }}
        {{ Form::text('monthly_gross_income',null,['class' => 'form-control','placeholder' => 'Enter gross income' , $profile->is_approved == 1 ? 'readonly':'']) }}
    </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
        {{ Form::label('bank_account_name', 'Bank account name') }}
        {{ Form::text('bank_account_name',null,['class' => 'form-control','placeholder' => 'Enter bank account name' , $profile->is_approved == 1 ? 'readonly':'']) }}
    </div>
    <div class="form-group">
        {{ Form::label('bank_account_no', 'Bank account no.') }}
        {{ Form::text('bank_account_no',null,['class' => 'form-control','placeholder' => 'Enter bank account number' , $profile->is_approved == 1 ? 'readonly':'']) }}
    </div>
  </div>
  @if($profile->is_approved == 0)
  <div class="form-group col-xs">
    {{ Form::button('Create',['type' => 'submit','class'=> 'form-control btn-primary']) }}
  </div>
  @endif
</div>
