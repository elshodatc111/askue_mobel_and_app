<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model{
    protected $fillable = [
        'name',
        'addres',
        'description',
        'logo_image',
        'status',
        'balans',
        'paymart',
        'star',
        'star_count',
    ];
}
