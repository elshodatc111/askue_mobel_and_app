<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompanyItem extends Model{
    use HasFactory;

    protected $fillable = ['company_id', 'name', 'price', 'status'];

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }
}
