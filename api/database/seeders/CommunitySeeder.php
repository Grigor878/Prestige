<?php

namespace Database\Seeders;

use App\Models\Community;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $k = [
            [
              'am' => '',
              'en' => '',
              'ru' => '',
            ],
            [
              'am' => 'Աջափնյակ',
              'en' => 'Ajapnyak',
              'ru' => 'Аджапняк',
            ],
            [
              'am' => 'Արաբկիր',
              'en' => 'Arabkir',
              'ru' => 'Арабкир',
            ],
            [
              'am' => 'Ավան',
              'en' => 'Avan',
              'ru' => 'Аван',
            ],
            [
              'am' => 'Դավթաշեն',
              'en' => 'Davtashen',
              'ru' => 'Давташен',
            ],
            [
              'am' => 'Էրեբունի',
              'en' => 'Erebuni',
              'ru' => 'Эребуни',
            ],
            [
              'am' => 'Քանաքեռ-Զեյթուն',
              'en' => 'Kanaker-Zeytun',
              'ru' => 'Канакер-Зейтун',
            ],
            [
              'am' => 'Կենտրոն',
              'en' => 'Kentron',
              'ru' => 'Кентрон',
            ],
            [
              'am' => 'Մալաթիա-Սեբաստիա',
              'en' => 'Malatia-Sebastia',
              'ru' => 'Малатия-Себастия',
            ],
            [
              'am' => 'Նորք-Մարաշ',
              'en' => 'Nork-Marash',
              'ru' => 'Норк-Мараш',
            ],
            [
              'am' => 'Նոր Նորք',
              'en' => 'Nor Nork',
              'ru' => 'Нор Норк',
            ],
            [
              'am' => 'Նուբարաշեն',
              'en' => 'Nubarashen',
              'ru' => 'Нубарашен',
            ],
            [
              'am' => 'Շենգավիթ',
              'en' => 'Shengavit',
              'ru' => 'Шенгавит',
            ],
            [
              'am' => 'Վահագնի թաղամաս',
              'en' => 'Vahagni',
              'ru' => 'Ваагни',
            ]
          ];
      
          foreach ($k as $key => $value) {
            Community::create($value);
          }
    }
}
