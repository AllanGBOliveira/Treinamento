<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'user_id',
        'user_name',
        'title',
        'author',
        'donor',
        'avaliable'
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
        
    ];
   
}
