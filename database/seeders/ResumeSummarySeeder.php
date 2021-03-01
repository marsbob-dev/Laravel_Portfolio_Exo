<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeSummarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_summaries')->insert([
            [
                'name' => 'Marcelin Bohbot',
                'subtitle' => 'Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.',
                'adress' => 'Portland par 127,Orlando, FL',
                'tel' => '(123) 456-7891',
                'mail' => 'alice.barkley@example.com',
            ]
        ]);
    }
}
