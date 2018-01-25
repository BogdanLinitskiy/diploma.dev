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
            ],

            [
                'name' => 'SEO',
                'alias' => 'seo',
                'logo'=> 'https://seo-wave.com/images/blog/seo.jpg',
                'category_id' => '2',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Web аналитика',
                'alias' => 'web-analytics',
                'logo'=> 'https://www.360logica.com/blog/wp-content/uploads/2017/06/web-analytics.png',
                'category_id' => '2',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Мобильная реклама',
                'alias' => 'mobile-advertising',
                'logo'=> 'https://i2.wp.com/richtopia.com/wp-content/uploads/2015/07/mobile-marketing-strategies.jpg?fit=959%2C460&ssl=1',
                'category_id' => '2',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'SMM',
                'alias' => 'smm',
                'logo'=> 'http://static.orgpage.ru/newsphotos/20/2019224719.jpg',
                'category_id' => '2',
                'created_at' => date("Y-m-d H:i:s")
            ],

            [
                'name' => 'Интро и Анимационные логотипы',
                'alias' => 'intro-and-logos',
                'logo'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2vTvHeQ1SVsBXq3JvYt-186QDTRIu4EugQY2bTGSJ7uIqqb4-',
                'category_id' => '3',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Лирика и Музыкальные видео',
                'alias' => 'intro-and-logos',
                'logo'=> 'https://image.freepik.com/free-vector/selecting-items-related-to-a-music-studio_23-2147564288.jpg',
                'category_id' => '3',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Рекламные видеоролики',
                'alias' => 'promotional-videos',
                'logo'=> 'http://www.emprise.in/wp-content/uploads/2015/03/PROMOTIONAL-VIDEO-BLOG.jpg',
                'category_id' => '3',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Редактирование треков и Post Production',
                'alias' => 'editing-and-post-production',
                'logo'=> 'http://www.timelinevideo.com/timeline/wp-content/uploads/2015/03/IMGP0238-Edit.jpg',
                'category_id' => '3',
                'created_at' => date("Y-m-d H:i:s")
            ],

            [
                'name' => 'Дизайн Логотипа',
                'alias' => 'logo-design',
                'logo'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtvBon4elPOSmkXRcMbuK-I9rJAwn9FbTYxajOBu12KOqlK6hV',
                'category_id' => '4',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => '3D и 2D Модели',
                'alias' => '3d-and-2d-models',
                'logo'=> 'https://retrostylegames.com/img/2016/07/Star_Wars_Finn_VS_Kylo_Ren_FP3_648x324-648x324.jpg',
                'category_id' => '4',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Футболки',
                'alias' => 't-shirts',
                'logo'=> 'https://lh3.googleusercontent.com/litggqFrv_9DGasSDHBh32OeFRdSXJkGSH60TZaLexTF-9NU-YYZHjmA9q1j9iqRG3o=w300',
                'category_id' => '4',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Флаеры и Плакаты',
                'alias' => 'flyers-and-posters',
                'logo'=> 'http://www.timelinevideo.com/timeline/wp-content/uploads/2015/03/IMGP0238-Edit.jpg',
                'category_id' => '4',
                'created_at' => date("Y-m-d H:i:s")
            ],

            [
                'name' => 'Онлайн Уроки',
                'alias' => 'online-lessons',
                'logo'=> 'http://bravothree.com/bt-content/uploads/2014/05/Classroom-online.jpg',
                'category_id' => '5',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Здоровье, Питание и Фитнес',
                'alias' => 'health-nutrition-and-fitness',
                'logo'=> 'http://www.timelinevideo.com/timeline/wp-content/uploads/2015/03/IMGP0238-Edit.jpg',
                'category_id' => '5',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Гейминг',
                'alias' => 'gaming',
                'logo'=> 'https://i.imgpile.com/7b9e5a733c4914cd0adb9db3daac3933.jpg',
                'category_id' => '5',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Прочее',
                'alias' => 'other',
                'logo'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0dk9iP2lV7sZF0cF-gm-Rv52JZ_M9QwEQajefURVjs8Cj56LG',
                'category_id' => '5',
                'created_at' => date("Y-m-d H:i:s")
            ],

            [
                'name' => 'Виртуальный помошник',
                'alias' => 'virtual-assistant',
                'logo'=> 'https://udemy-images.udemy.com/course/750x422/48733_cb80_18.jpg',
                'category_id' => '6',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Бизнес планы',
                'alias' => 'business-plans',
                'logo'=> 'http://7593905ebe364c1571aac60b.xeclftautua6y.maxcdn-edge.com/wp-content/uploads/2016/05/Biz-plan-YouTube.jpg',
                'category_id' => '6',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Исследование рынка',
                'alias' => 'market-research',
                'logo'=> 'http://pestleanalysis.com/wp-content/uploads/2017/05/why-market-research-is-important.jpg',
                'category_id' => '6',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Совет по карьере',
                'alias' => 'career-advice',
                'logo'=> 'http://blocblog.s3.amazonaws.com/2014/09/career-advice.jpg',
                'category_id' => '6',
                'created_at' => date("Y-m-d H:i:s")
            ],
        ]);
    }
}
