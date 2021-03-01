<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeProSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_pros')->insert([
            [
                'name' => 'Senior graphic design specialist',
                'year' => '2019 - Present',
                'place' => 'Experion, New York, NY ',
                'job1' => 'Lead in the design, development, and implementation of the graphic, layout, and production communication materials',
                'job2' => 'Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project.',
                'job3' => 'Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design',
                'job4' => 'Oversee the efficient use of production project budgets ranging from $2,000 - $25,000',
            ],
            [
                'name' => 'Graphic design specialist',
                'year' => '2017 - 2018',
                'place' => 'Stepping Stone Advertising, New York, NY',
                'job1' => 'Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).',
                'job2' => 'Managed up to 5 projects or tasks at a given time while under pressure',
                'job3' => 'Recommended and consulted with clients on the most appropriate graphic design',
                'job4' => 'Created 4+ design presentations and proposals a month for clients and account managers',
            ],
        ]);
    }
}
