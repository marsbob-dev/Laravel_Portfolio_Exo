<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioPicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio_pics')->insert([
            [
                'pic' => 'img/portfolio/portfolio-1.jpg',
                'link' => '#',
                'param' => 'App 1',
                'filter' => 'app',
            ],
            [
                'pic' => 'img/portfolio/portfolio-2.jpg',
                'link' => '#',
                'param' => 'Web 3',
                'filter' => 'web',
            ],
            [
                'pic' => 'img/portfolio/portfolio-3.jpg',
                'link' => '#',
                'param' => 'App 2 ',
                'filter' => 'app',
            ],
            [
                'pic' => 'img/portfolio/portfolio-4.jpg',
                'link' => '#',
                'param' => 'Card 2',
                'filter' => 'card',
            ],
            [
                'pic' => 'img/portfolio/portfolio-5.jpg',
                'link' => '#',
                'param' => 'Web 2',
                'filter' => 'web',
            ],
            [
                'pic' => 'img/portfolio/portfolio-6.jpg',
                'link' => '#',
                'param' => 'App 3',
                'filter' => 'app',
            ],
            [
                'pic' => 'img/portfolio/portfolio-7.jpg',
                'link' => '#',
                'param' => 'Card 1',
                'filter' => 'card',
            ],
            [
                'pic' => 'img/portfolio/portfolio-8.jpg',
                'link' => '#',
                'param' => 'Card 3',
                'filter' => 'card',
            ],
            [
                'pic' => 'img/portfolio/portfolio-9.jpg',
                'link' => '#',
                'param' => 'Web 3',
                'filter' => 'web',
            ],
        ]);
    }
}
