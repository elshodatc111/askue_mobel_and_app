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
                'company_id' => 1,
                'name' => 'Elshod Musurmonov',
                'position' => 'admin',
                'phone' => '+998 94 520 4004',
                'code' => null,
                'code_expires_at' => null,
                'status' => 'active',
            ],
            [
                'company_id' => 1,
                'name' => 'Elshod Musurmonov',
                'position' => 'admin',
                'phone' => '+998 90 883 0450',
                'code' => null,
                'code_expires_at' => null,
                'status' => 'active',
            ],
        ]);
    }
}
