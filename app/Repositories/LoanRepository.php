<?php
 
namespace App\Repositories;
 
use App\loan;
 
class LoanRepository
{
  
  protected $loan;
 
  public function __construct(loan $loan)
  {
    $this->loan = $loan;
  }
    public function create($attributes)
  {
    return $this->loan->create($attributes);
  }
  
  public function all()
  {
    return $this->loan->all();
  }
 
  public function find($id)
  {
   return $this->loan->find($id);
  }

  public function guestLoan($userId){
    return $this->loan->where('user_id','=',$userId);
  }

  public function checkGuestLoan($userId,$status,$operator)
  {
   return $this->loan->where('user_id', '=', $userId)
                     ->where('status', $operator , $status);
  }
  
  public function update($id, array $attributes)
  {
  return $this->loan->find($id)->update($attributes);
  }
 
  public function delete($id)
  {
   return $this->loan->find($id)->delete();
  }
}