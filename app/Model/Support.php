<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    protected $table ='supports';
    protected $primaryKey='id';
    protected $fillable = [
        'name', 'email', 'message','isSolved'
    ];
}
