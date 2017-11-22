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
            'name' => 'Tolu',
            'email' => 'UCTI250@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
