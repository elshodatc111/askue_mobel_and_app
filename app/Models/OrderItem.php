<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'company_item_id', 'count', 'price'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function companyItem()
    {
        return $this->belongsTo(CompanyItem::class);
    }
}
