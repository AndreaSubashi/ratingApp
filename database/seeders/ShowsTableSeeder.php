<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShowsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('shows')->insert([
            ['title' => 'Breaking Bad', 'genre' => 'Crime, Drama', 'description' => 'A high school chemistry teacher turned methamphetamine producer.', 'poster_path' => 'breaking_bad.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Stranger Things', 'genre' => 'Fantasy, Drama', 'description' => 'A group of kids uncover supernatural mysteries in their small town.', 'poster_path' => 'stranger_things.jpg', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
