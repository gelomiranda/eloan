<?php
 
namespace App\Repositories;
 
use App\Transaction;
 
class TransactionRepository
{
  
  protected $transaction;
 
  public function __construct(transaction $transaction)
  {
    $this->transaction = $transaction;
  }
    public function create($attributes)
  {
    return $this->transaction->create($attributes);
  }
  
  public function all()
  {
    return $this->transaction->all();
  }
 
  public function find($id)
  {
   return $this->transaction->find($id);
  }
  
  public function update($id, array $attributes)
  {
  return $this->transaction->find($id)->update($attributes);
  }
 
  public function delete($id)
  {
   return $this->transaction->find($id)->delete();
  }
}