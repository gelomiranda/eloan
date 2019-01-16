<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Profile extends Model
{
    protected $fillable = [
        'first_name',
        'user_id', 
        'middle_name', 
        'last_name',
        'address', 
        'mobile_no', 
        'birth_date', 
        'job_title',
        'no_of_years',
        'office_address',
        'office_contact_no',
        'bank_account_no',
        'bank_account_name',
        'monthly_gross_income',
        'current_employer',
        'is_approved',
        'approved_by',
        'approved_at'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
