<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoatosTableSeeder extends Seeder{
    public function run(): void{
        DB::table('soatos')->insert([
            [
                'soato' => 10000,
                'name' => 'Hududiy Elektr Tarmoqlari',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'soato' => 10207,
                'name' => 'G\'uzor tumani',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'soato' => 10212,
                'name' => 'Dexqonobod tumani',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'soato' => 10220,
                'name' => 'Qamashi tumani',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'soato' => 10224,
                'name' => 'Qamashi tumani',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'soato' => 10229,
                'name' => 'Koson tumani',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'soato' => 10231,
                'name' => 'Baxoriston tumani',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'soato' => 10232,
                'name' => 'Kitob tumani',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'soato' => 10233,
                'name' => 'Mirishkor tumani',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'soato' => 10234,
                'name' => 'Muborak tumani',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'soato' => 10235,
                'name' => 'Nishon shahri',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'soato' => 10237,
                'name' => 'Kasbi tumani',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'soato' => 10240,
                'name' => 'Ko\'kdala tumani',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'soato' => 10242,
                'name' => 'Chiriqchi tumani',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'soato' => 10245,
                'name' => 'Shahrisabz tumani',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'soato' => 10246,
                'name' => 'Shahrisabz shahri',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'soato' => 10250,
                'name' => 'Yakkabog\' tumani',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'soato' => 10401,
                'name' => 'Qarshi shahri',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
