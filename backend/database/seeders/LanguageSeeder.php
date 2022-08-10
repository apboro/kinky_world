<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $main_header = [
            ['main', 'header', 'dating', 'Dating', 'Знакомства', 'Bekanntschaft'],
            ['main', 'header', 'kinkbnb', 'KinkBNB', 'Аренда', 'KinkBNB'],
            ['main', 'header', 'parties', 'Parties', 'Вечеринки', 'Tanzen'],
            ['main', 'header', 'forum', 'Forum', 'Форум', 'Forum'],
            ['main', 'header', 'blogs', 'Blogs', 'Блоги', 'Bloggenzein'],
            ['main', 'header', 'shops', 'Shops', 'Магазины', 'Magazinen'],
            ['main', 'header', 'clubs', 'Clubs', 'Клубы', 'Klububen'],
            ['main', 'header', 'about_us', 'About Us', 'О Нас', 'Uber Alles'],
            ['main', 'header', 'my_account', 'My Account', 'Мой Аккаунт', 'Mein Kampf'],
        ];

        foreach ($main_header as $lang) {
            DB::table('languages')->insert(values: [
                'page' => $lang[0],
                'group' => $lang[1],
                'attribute' => $lang[2],
                'english' => $lang[3],
                'russian' => $lang[4],
                'deutsch' => $lang[5],
        ]);

        }

    }
}
