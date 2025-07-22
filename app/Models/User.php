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
        'company_id',
        'name',
        'position',
        'phone',
        'code',
        'code_expires_at',
        'status',
    ];

    protected $hidden = [
        'code',            
        'remember_token',  
    ];

    protected $casts = [
        'code_expires_at' => 'datetime',
    ];

    public function isCodeExpired(): bool{
        return !$this->code_expires_at || Carbon::now()->greaterThan($this->code_expires_at);
    }

    public function getMaskedPhone(): string{
        $start = substr($this->phone, 0, 4);
        $end = substr($this->phone, -4);
        return $start . '****' . $end;
    }

    public function isPending(): bool{
        return $this->status === 'pending';
    }
    public function isPhoneVerification(): bool{
        return $this->status === 'phone';
    }
    public function isActive(): bool{
        return $this->status === 'active';
    }

}
