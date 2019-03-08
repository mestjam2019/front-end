<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //run the Database seed
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name' => 'Ada Tapily',
            'email' => 'ada@gmail.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10),
            'created_at' => '2019-01-09 11:52:43',
            'updated_at' => '2019-01-09 11:52:43',
        ]);
    }
}
