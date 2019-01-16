<?php 
namespace App\Services;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Auth;
use App\User; 
class userService
{

	public function __construct(UserRepository $user)
	{
		$this->user = $user;
	}
	 
	public function index()
	{
		return $this->user->all();
	}

	public function guest($userid){
		return $this->user->guest($userid);
	}
	 
	public function create(Request $request)
	{
		$this->user->create([
			'user_id' => Auth::id(),
			'amount' => $request['amount'],
			'status' => 'pending'
		]);
	}
	 
	public function read($id)
	{
	     return $this->user->find($id);
	}
	 
	public function update(Request $request, $id)
	{
	   	$attributes = $request->all();
	   	return $this->user->update($id, $attributes);
	}
 
	public function delete($id)
	{
	    return $this->user->delete($id);
	}

}