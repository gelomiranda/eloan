<?php 
namespace App\Services;
use App\loan;
use App\Repositories\LoanRepository;
use Illuminate\Http\Request;
use Auth;
use App\Services\EmailService as Email;
class LoanService
{
	protected $interest = 0;
	protected $status = '';

	public function __construct(LoanRepository $loan)
	{
		$this->loan = $loan ;
	}
	 
	public function index()
	{
		return $this->loan->all();
	}

	public function guestLoan(){
		return $this->loan->guestLoan(Auth::id());
	}
	 
	public function create(Request $request)
	{
		//Check if the user do have unapproved loan
		$checkGuestLoan = $this->loan->checkGuestLoan(Auth::id(),'PAID','<>')->get();
		if(count($checkGuestLoan) != 0)
		{
			return redirect()->route('loan.index')
                       ->withErrors('Please settle your loan first before applying again.')
                       ->withInput();
		}
		$terms = $request['terms'];
		if($terms == 15)
		{
			$this->interest = '0.05';
		}
		else
		{
			$this->interest = '0.10';
		}

		$this->loan->create([
			'user_id' => Auth::id(),
			'amount' => $request['amount'],
			'status' => 'Pending',
			'interest' => $this->interest,
			'term' => $terms,
			'remark' => 'Loan Application'
		])->details()->create([
		    'status' => 'Pending'
		]);

		Email::send('email.new-application','angelomirandagarcia@gmail.com',array('name' => 'Gelo'));


	}
	 
	public function read($id)
	{
	     return $this->loan->find($id);
	}
	 
	public function update(Request $request, $id)
	{
	   	$attributes = $request->all();
	   	return $this->post->update($id, $attributes);
	}
 
	public function delete($id)
	{
	    return $this->post->delete($id);
	}

}