<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Robert Wagner',
            'email' => 'readytoproblems@gmail.com',
            'password' => bcrypt('1234qwer')
        ]);
    }
}
