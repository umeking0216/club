<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminete\Support\Facades\DB;
use Illuminete\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'bod' => Str::random(100),
            'created_at' => now(),
            'updated_at' => now(),
            ]);
    }
}
