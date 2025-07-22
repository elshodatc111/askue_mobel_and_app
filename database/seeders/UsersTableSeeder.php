<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder{
    public function run(): void{
        DB::table('users')->insert([
            [
                'soato' => 10000,
                'name' => 'Elshod Musurmonov',
                'addres' => 'Qarshi shaxar, Navo MFY.',
                'position' => 'admin',
                'phone' => '+998945204004',
                'status' => 'active',
                'code' => null,
                'code_expires_at' => null,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'soato' => 10000,
                'name' => 'Karimov Muzrob',
                'addres' => 'Koson tumani.',
                'position' => 'muhandis', // ✅ to‘g‘rilangan
                'phone' => '+998990000000',
                'status' => 'active',
                'code' => null,
                'code_expires_at' => null,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'soato' => 10000,
                'name' => 'Murodov Elbek',
                'addres' => 'Qarshi sh.',
                'position' => 'muhandis',
                'phone' => '+998990000001',
                'status' => 'active',
                'code' => null,
                'code_expires_at' => null,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
