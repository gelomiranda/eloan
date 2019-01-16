<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'middle_name' => 'required|alpha|max:30',
            'last_name' => 'required|alpha|max:30',
            'address' => 'required|max:255',
            'birth_date' => 'required|date',
            'job_title' => 'required|max:255',
            'no_of_years' => 'required|numeric',
            'office_address' => 'required|max:255',
            'office_contact_no' => 'required|numeric|max:20',
            'bank_account_no' => 'required|numeric',
            'bank_account_name' => 'required|max:30',
            'monthly_gross_income' => 'required|numeric',
            'current_employer' => 'required|max:30'
        ];
    }
}
