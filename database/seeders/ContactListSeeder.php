<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_lists')->insert([
            [
                'class' => 'address',
                'icon' => 'icofont-google-map',
                'title' => 'Location:',
                'content' => 'A108 Adam Street, New York, NY 535022',
            ],
            [
                'class' => 'email',
                'icon' => 'icofont-envelope',
                'title' => 'Email:',
                'content' => 'info@example.com',
            ],
            [
                'class' => 'phone',
                'icon' => 'icofont-phone',
                'title' => 'Call:',
                'content' => '+1 5589 55488 555',
            ],
        ]);
    }
}
