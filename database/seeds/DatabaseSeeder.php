<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('MoviesTableSeeder');
        $this->call('ActorsTableSeeder');
        $this->call('GradesTableSeeder');
        $this->call('ActorMovieTableSeeder');
    }
}
