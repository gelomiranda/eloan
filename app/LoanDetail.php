<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanDetail extends Model
{
     protected $table = 'loan_details';

     protected $fillable = ['loan_id','status','transaction_through','transaction_date'];
}
