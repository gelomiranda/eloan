<?php
 
namespace App\Repositories;
 
use App\Profile;
use App\User;
 
class ProfileRepository
{
  
  protected $profile;
 
  public function __construct(Profile $profile)
  {
    $this->profile = $profile;
  }
    public function create($attributes)
  {
    return $this->profile->create($attributes);
  }
  
  public function all()
  {
    return $this->profile->all();
  }

  public function guest($userId){
    return User::find($userId)->profile;
  }
 
  public function find($id)
  {
   return $this->profile->find($id);
  }
  
  public function update($id, array $attributes)
  {
  return $this->profile->find($id)->update($attributes);
  }
 
  public function delete($id)
  {
   return $this->profile->find($id)->delete();
  }
}