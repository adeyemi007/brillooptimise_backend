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
        \App\Models\User::factory(10)->create();
        \App\Models\Page::factory(8)->create();
        \App\Models\Blog::factory(8)->create();
        \App\Models\BlogCategory::factory(3)->create();
        \App\Models\BlogTag::factory(8)->create();
        $this->call(ServicesSeeder::class);
        $this->call(TeamMembersSeeder::class);
    }
}
