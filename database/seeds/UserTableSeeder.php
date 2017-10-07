<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(["name" => "Keith Johnson", "email" => "johnson@email.com", "password" => bcrypt("philadelphia")]);
        User::create(["name" => "Ben Franklin", "email" => "franklin@email.com", "password" => bcrypt("philadelphia")]);
    }
}
