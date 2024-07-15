<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            "name"=> "Javohir",
            "email"=> "javohir070@gmail.com",
            "password"=> bcrypt("0970260j"),
        ]);

        User::create([
            "name"=> "Suhrob",
            "email"=> "suhrob070@gmail.com",
            "password"=> bcrypt("1082787s"),
        ]);
    }
}
