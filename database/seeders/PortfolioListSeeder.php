<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio_lists')->insert([
            [
                'filter' => 'app',
            ],
            [
                'filter' => 'card',
            ],
            [
                'filter' => 'web',
            ],
        ]);
    }
}
