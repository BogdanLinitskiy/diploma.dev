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
        DB::table('sub_categories')->insert([
            [
                'name' => 'Web-Программирование',
                'alias' => 'web-programming',
                'logo'=> 'http://365news.biz/uploads/posts/2015-09/1441610509_kak-luchshe-osvoit-veb-programmirovanie.jpg',
                'category_id' => '1',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Мобильные Приложения',
                'alias' => 'mobile-app',
                'logo'=> 'http://gik.by/images/content/mobil-razrabotka.png',
                'category_id' => '1',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'ЧатБоты',
                'alias' => 'chatbots',
                'logo'=> 'https://cdn-images-1.medium.com/max/2000/1*RD1s9xBIvd_ycJUnX12Tyw@2x.png',
                'category_id' => '1',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Базы Данных',
                'alias' => 'databases',
                'logo'=> 'http://s41.radikal.ru/i091/1204/53/abc0824f2b06.jpg',
                'category_id' => '1',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
