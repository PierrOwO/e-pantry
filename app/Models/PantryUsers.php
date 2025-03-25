<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PantryUsers extends Model
{

    public $timestamps = false;
    protected $table = 'pantry_users';
    protected $fillable = [
        'pantry_id',
        'user_id',
    ];
}
