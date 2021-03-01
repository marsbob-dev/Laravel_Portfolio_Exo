<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactsListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts_lists')->insert([
            [
                'logo' => 'icofont-simple-smile',
                'number' => '232',
                'title' => 'Happy Clients',
                'content' => ' consequuntur quae',
            ],
            [
                'logo' => 'icofont-document-folder',
                'number' => '521',
                'title' => 'Projects',
                'content' => ' adipisci atque cum quia aut',
            ],
            [
                'logo' => 'icofont-live-support',
                'number' => '1463',
                'title' => 'Hours Of Support',
                'content' => ' aut commodi quaerat',
            ],
            [
                'logo' => 'icofont-users-alt-5',
                'number' => '15',
                'title' => 'Hard Workers',
                'content' => ' rerum asperiores dolor',
            ],
        ]);
    }
}
