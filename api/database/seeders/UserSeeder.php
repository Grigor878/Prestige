<?php

namespace Database\Seeders;

use App\Models\Employe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employe::create([
            'full_name' => json_encode([
                'am' => "Գև",
                'ru' => "Гев",
                'en' => "Gev"
            ]),
            'role' => 'admin',
            'status' => 'approved',
            'email' => 'gev@mail.ru',
            'password' => Hash::make('123456'),
            'phone' => json_encode([
                'tel1' => '',
                'messengers' => ''
            ]),
        ]);
        
        
        Employe::create([
            'full_name' => json_encode([
                'am' => "Գրիգ",
                'ru' => "Григ",
                'en' => "Grig"
            ]),
            'role' => 'admin',
            'status' => 'approved',
            'email' => 'grigsgog@gmail.com',
            'password' => Hash::make('123456'),
            'phone' => json_encode([
                'tel1' => '',
                'tel2' => '',
                'messengers' => ''
            ]),
        ]);
        
    }
}
