<?php 
namespace App\Services;


use Illuminate\Http\Request;
use Mail; 
class EmailService
{
	public static function send($view,$email,$placeholder){

		Mail::send($view,$placeholder, function($message) use ($email){
			$message->from('us@test.com','Microlending');
            $message->to($email)->subject('Loan Application');
        }); 
	}	

}