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
                AboutSeeder::class,
                AboutListSeeder::class,
                FactsSeeder::class,
                FactsListSeeder::class,
                SkillsSeeder::class,
                SkillsListSeeder::class,
                ResumeSeeder::class,
                ResumeEducationSeeder::class,
                ResumeProSeeder::class,
                ResumeSummarySeeder::class,
                PortfolioSeeder::class,
                PortfolioSeeder::class,
                PortfolioListSeeder::class,
                PortfolioPicSeeder::class,
                ContactSeeder::class,
                ContactListSeeder::class,
            ]
        );
    }
}
