<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model{
    use HasFactory;

    protected $fillable = [
        'company_name', 'description', 'logo_image', 'address',
        'price', 'balans', 'paymart', 'start', 'start_count',
    ];

    public function items(){
        return $this->hasMany(CompanyItem::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
