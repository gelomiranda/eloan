<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
       'user_id',
       'amount',
       'status',
       'interest',
       'term',
       'remark'
    ];

    public function user()
    {
        return $this->hasOne('App\User','id');
    }

    public function details()
    {
      return $this->hasMany('App\LoanDetail','loan_id');
    }
}
