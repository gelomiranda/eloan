<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;


class Category extends Model
{
    protected $fillable = [
        'description', 'terms', 'minimum_amount', 'maximum_amount', 'incremental','increment_value','interest_rate'
    ];

    private $rules = array(
    	 	'description' => 'required|unique:categories|max:255',
            'terms'		  => 'required|integer|numeric|min:1'
    );

    private $errors;

    public function validate($data)
    {
        // make a new validator object
        $v = Validator::make($data, $this->rules);

        // check for failure
        if ($v->fails())
        {
            // set errors and return false
            $this->errors = $v->errors();
            return false;
        }

        // validation pass
        return true;
    }

    public function errors()
    {
        return $this->errors;
    }
}
