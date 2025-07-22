<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable{

    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = [
        'company_id', 'name', 'position', 'phone', 'code',
        'code_expires_at', 'status',
    ];

    protected $hidden = ['code', 'remember_token'];

    protected $casts = ['code_expires_at' => 'datetime'];

    const STATUS_ACTIVE = 'active';
    const STATUS_PENDING = 'pending';
    const STATUS_PHONE = 'phone';

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function customerOrders(){
        return $this->hasMany(Order::class, 'cutomer_id');
    }

    public function isCodeExpired(): bool{
        return !$this->code_expires_at || now()->greaterThan($this->code_expires_at);
    }

    public function getMaskedPhone(): string{
        $start = substr($this->phone, 0, 4);
        $end = substr($this->phone, -4);
        return $start . '****' . $end;
    }

    public function isPending(): bool{
        return $this->status === self::STATUS_PENDING;
    }

    public function isPhoneVerification(): bool{
        return $this->status === self::STATUS_PHONE;
    }

    public function isActive(): bool{
        return $this->status === self::STATUS_ACTIVE;
    }

    public function isAdmin(): bool{
        return $this->position === 'admin';
    }

    public function isDirector(): bool{
        return $this->position === 'direktor';
    }

    public function isCourier(): bool{
        return $this->position === 'courer';
    }

    public function scopeActive($query){
        return $query->where('status', self::STATUS_ACTIVE);
    }

    public function scopeByCompany($query, $companyId){
        return $query->where('company_id', $companyId);
    }
}
