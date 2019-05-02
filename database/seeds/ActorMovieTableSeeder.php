<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ActorMovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actor_movie')->insert([
            [
                'actor_id' => 1,
                'movie_id' => 1,
            ],
            [
                'actor_id' => 2,
                'movie_id' => 1,
            ],
            [
                'actor_id' => 3,
                'movie_id' => 1,
            ],
            [
                'actor_id' => 4,
                'movie_id' => 2,
            ],
            [
                'actor_id' => 1,
                'movie_id' => 4,
            ],
            [
                'actor_id' => 4,
                'movie_id' => 3,
            ]
        ]);
    }
}
