<?php 
namespace App\Services;
use App\Profile;
use App\Repositories\profileRepository;

use Illuminate\Http\Request;
use Auth;
 
class ProfileService
{

	public function __construct(ProfileRepository $profile)
	{
		$this->profile = $profile;
	}
	 
	public function index()
	{
		return $this->profile->all();
	}

	public function guest($userid){
		return $this->profile->guest($userid);
	}
	 
	public function create(Request $request)
	{
		$this->profile->create([
			'user_id' => Auth::id(),
			'amount' => $request['amount'],
			'status' => 'pending'
		]);
	}
	 
	public function read($id)
	{
	     return $this->profile->find($id);
	}
	 
	public function update(Request $request, $id)
	{
	   	$attributes = $request->all();
	   	$this->profile->update($id, $attributes);
		return redirect()->route('profile.index')
                       ->with('status',__('messages.profile_updated'));
	}
 
	public function delete($id)
	{
	    return $this->profile->delete($id);
	}

	public function approve($id)
	{
		$attributes = array(
			'is_approved' => '1',
			'approved_by' => Auth::user()->name,
			'approved_at' => \Carbon\Carbon::now()
		);
		$this->profile->update($id, $attributes);

		return redirect()->back()->with('status', 'Profile successfully approved!'); 
	}

}