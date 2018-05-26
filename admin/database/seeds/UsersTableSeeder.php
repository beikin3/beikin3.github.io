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
        DB::table('users')->insert([
            'name' => "Ricardo",
            'email' => 'pareja.r@gmail.com',
            'password' => bcrypt('beikin'),
        ]);
        DB::table('users')->insert([
            'name' => "No",
            'email' => 'noelle.muraro@gmail.com',
            'password' => bcrypt('beikin'),
        ]);
        DB::table('users')->insert([
            'name' => "Luana",
            'email' => 'lua.muraro@gmail.com',
            'password' => bcrypt('beikin'),
        ]);
    }
}
