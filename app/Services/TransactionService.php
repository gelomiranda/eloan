<?php 
namespace App\Services;
use App\Transaction;
use App\Repositories\TransactionRepository;
use Illuminate\Http\Request;
use Auth;
 
class TransactionService
{

	public function __construct(TransactionRepository $transaction)
	{
		$this->transaction = $transaction ;
	}
	 
	public function index()
	{
		return $this->post->all();
	}
	 
	public function create(Request $request)
	{
		$this->transaction->create([
			'user_id' => Auth::id(),
			'amount' => $request['amount'],
			'status' => 'pending'
		]);
	}
	 
	public function read($id)
	{
	     return $this->post->find($id);
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