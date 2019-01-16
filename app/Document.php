<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'description',
        'image',
        'user_id',
        'type' 
    ];
}
