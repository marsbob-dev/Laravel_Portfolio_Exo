<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinkNavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('link_navs')->insert([
            [
                'link' => 'Home',
                'icon' => 'bx bx-home',
                'href' => '#hero'
            ],
            [
                'link' => 'About',
                'icon' => 'bx bx-user',
                'href' => '#about'
            ],
            [
                'link' => 'Resume',
                'icon' => 'bx bx-file-blank',
                'href' => '#resume'
            ],
            [
                'link' => 'Portfolio',
                'icon' => 'bx bx-book-content',
                'href' => '#portfolio'
            ],
            [
                'link' => 'Contact',
                'icon' => 'bx bx-envelope',
                'href' => '#contact'
            ]
        ]);
    }
}
