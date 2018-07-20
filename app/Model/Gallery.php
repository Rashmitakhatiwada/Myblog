<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
  protected $table ='gallerys';
    protected $fillable = [
        'gtype',
        'gtitle',
        'blog_id',
        'gdescription',
        'gimage',
        'gstatus',
    ];  
}
