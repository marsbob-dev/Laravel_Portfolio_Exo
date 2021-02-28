<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_lists')->insert([
            [
                'name' => 'Birthday:',
                'content' => ' 1 May 1995',
                'class' => 'icofont-rounded-right'
            ],
            [
                'name' => 'Website:',
                'content' => ' www.example.com',
                'class' => 'icofont-rounded-right'
            ],
            [
                'name' => 'Phone:',
                'content' => ' +123 456 7890',
                'class' => 'icofont-rounded-right'
            ],
            [
                'name' => 'City:',
                'content' => ' City : New York, USA',
                'class' => 'icofont-rounded-right'
            ],
            [
                'name' => 'Age:',
                'content' => ' 30',
                'class' => 'icofont-rounded-right'
            ],
            [
                'name' => 'Degree:',
                'content' => ' Master',
                'class' => 'icofont-rounded-right'
            ],
            [
                'name' => 'PhEmailone:',
                'content' => ' email@example.com',
                'class' => 'icofont-rounded-right'
            ],
            [
                'name' => 'Freelance:',
                'content' => ' Available',
                'class' => 'icofont-rounded-right'
            ],
        ]);
    }
}
