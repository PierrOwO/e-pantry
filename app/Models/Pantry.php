<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pantry extends Model
{

    public $timestamps = false;
    protected $table = 'pantries';
    protected $fillable = [
        'name',
    ];
}
