<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Samantha',
            'email' => 'samantha@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]

        );
    }
}
