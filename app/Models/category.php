<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{

      protected $table = 'categories';

      
    protected $fillable = [
        'category_name',
        'category_slug',
        'status',
        'category_description'
    ];
}
