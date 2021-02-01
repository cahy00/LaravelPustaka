<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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
        User::create([
            'name' => 'Bambank',
            'email' => 'cgumilang48@gmail.com',
            'password' => Hash::make('222222'),
            'role' => '1',
            'remember_token' => Str::random(60),
        ]);
    }
}
