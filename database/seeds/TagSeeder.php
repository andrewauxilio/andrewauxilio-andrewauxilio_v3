<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'PHP'
        ]);

        DB::table('tags')->insert([
            'name' => 'Laravel'
        ]);

        DB::table('tags')->insert([
            'name' => 'JavaScript'
        ]);

        DB::table('tags')->insert([
            'name' => 'VueJS'
        ]);

        DB::table('tags')->insert([
            'name' => 'Learning'
        ]);

        DB::table('tags')->insert([
            'name' => 'Concepts'
        ]);
    }
}
