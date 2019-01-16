<?php
 
namespace App\Repositories;
 
use App\User;
 
class userRepository
{
  
  protected $user;
 
  public function __construct(User $user)
  {
    $this->user = $user;
  }
    public function create($attributes)
  {
    return $this->user->create($attributes);
  }
  
  public function all()
  {
    return $this->user->all();
  }

  public function guest($userId){
    return User::find($userId)->user;
  }
 
  public function find($id)
  {
   return $this->user->find($id);
  }
  
  public function update($id, array $attributes)
  {
  return $this->user->find($id)->update($attributes);
  }
 
  public function delete($id)
  {
   return $this->user->find($id)->delete();
  }
}