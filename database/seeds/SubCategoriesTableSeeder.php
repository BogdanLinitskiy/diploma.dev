<?php

use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_IT')->insert([
            [
                'name' => 'Web-Программирование',
                'alias' => 'web-programming',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Мобильные Приложения',
                'alias' => 'mobile-app',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'ЧатБоты',
                'alias' => 'chatbots',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Базы Данных',
                'alias' => 'databases',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
