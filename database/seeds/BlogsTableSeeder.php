<?php

use Illuminate\Database\Seeder;
use App\BlogInfluencer;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(BlogInfluencer::class, 15)->create();
    }
}
