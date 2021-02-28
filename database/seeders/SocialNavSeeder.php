<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialNavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_navs')->insert([
            [
                'icon' => 'bx bxl-twitter',
                'class' => 'twitter',
                'link' => 'https://twitter.com/home?lang=fr'
            ],
            [
                'icon' => 'bx bxl-facebook',
                'class' => 'facebook',
                'link' => 'https://www.facebook.com/'
            ],
            [
                'icon' => 'bx bxl-instagram',
                'class' => 'instagram',
                'link' => 'https://www.instagram.com/'
            ],
            [
                'icon' => 'bx bxl-skype',
                'class' => 'skype',
                'link' => 'https://www.skype.com/fr/'
            ],
            [
                'icon' => 'bx bxl-linkedin',
                'class' => 'linkedin',
                'link' => 'https://fr.linkedin.com/'
            ]
        ]);
    }
}
