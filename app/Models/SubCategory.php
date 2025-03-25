<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{

    public $timestamps = false;
    protected $table = 'sub_categories';
    protected $fillable = [
        'category_id',
        'name',
        'mame_pl',
    ];
}
