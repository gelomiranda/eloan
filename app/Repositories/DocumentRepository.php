<?php
 
namespace App\Repositories;
 
use App\Document;
use App\User;
 
class documentRepository
{
  
  protected $document;
 
  public function __construct(Document $document)
  {
    $this->document = $document;
  }
  
  public function store($attributes)
  {
    return $this->document->create($attributes);
  }
  
  public function all()
  {
    return $this->document->all();
  }

  public function guest($userId){
    return User::find($userId)->document;
  }
 
  public function find($id)
  {
   return $this->document->find($id);
  }
  
  public function update($id, array $attributes)
  {
  return $this->document->find($id)->update($attributes);
  }
 
  public function delete($id)
  {
   return $this->document->find($id)->delete();
  }
  
}