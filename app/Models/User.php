<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable{
    use HasFactory, Notifiable;
    protected $fillable = [
        'soato',
        'name',
        'addres',
        'position',
        'phone',
        'status',
        'code',
    ];
    protected $hidden = [
        'remember_token',
    ];
    protected function casts(): array{
        return [
            'phone_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
