<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
     protected $table ='blog';
    protected $fillable = [
        'title','figure',
        'description','heading','fullstory','status',
    ];
}
