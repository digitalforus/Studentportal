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
        DB::table('users')->insert([
            'name' => 'Hope',
            'email' => 'blessyn2hope@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
