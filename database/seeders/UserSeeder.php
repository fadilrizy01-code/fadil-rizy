<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       for ($i=0; $i <10 ; $i++) { 
       User::create([

            'name'=> fake("id_ID")->name(),
            'email'=> fake("id_ID")->email(),
            'password'=>bcrypt("1325465"),


       ]);
       }
    }
}
