<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table("users")->insert([
        "name"=> "Abdul Yasir",
        "email"=> "abdulyasir256@gmail.com",
        "password"=> Hash::make("123456"),
       ]);
    }
}
