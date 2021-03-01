<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills_lists')->insert([
            [
                'title' => 'HTML ',
                'content' => '100',
            ],
            [
                'title' => 'CSS ',
                'content' => '90',
            ],
            [
                'title' => 'JavaScript ',
                'content' => '75',
            ],
            [
                'title' => 'PHP ',
                'content' => '80',
            ],
            [
                'title' => 'WordPress/CMS ',
                'content' => '90',
            ],
            [
                'title' => 'Photoshop ',
                'content' => '55',
            ],
        ]);
    }
}
