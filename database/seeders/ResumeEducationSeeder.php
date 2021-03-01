<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeEducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_education')->insert([
            [
                'title' => 'Master of Fine Arts & Graphic Design',
                'year' => '2015 - 2016',
                'subtitle' => 'Rochester Institute of Technology, Rochester, NY',
                'content' => 'Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend',
            ],
            [
                'title' => 'Bachelor of Fine Arts & Graphic Design',
                'year' => '2010 - 2014',
                'subtitle' => 'Rochester Institute of Technology, Rochester, NY',
                'content' => 'Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila',
            ],
        ]);
    }
}
