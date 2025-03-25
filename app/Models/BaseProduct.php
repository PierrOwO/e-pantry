<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseProduct extends Model
{
    public $timestamps = false;
    protected $table = 'base_products';
    protected $fillable = [
        'name',
        'category_id',
        'sub_category_id',
    ];
}
