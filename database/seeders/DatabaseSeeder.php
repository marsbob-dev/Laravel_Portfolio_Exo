<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
                FooterSeeder::class,
                HeroSeeder::class,
                InfoNavSeeder::class,
                LinkNavSeeder::class,
                SocialNavSeeder::class,
            ]
        );
    }
}
