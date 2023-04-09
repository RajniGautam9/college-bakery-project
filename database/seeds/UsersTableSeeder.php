<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          
            'name' => 'ashmita',
            'state' => 'Butwal',
            'country'=> 'Nepal',
            'email' => 'asmita@myself.com',
             'status' => 1,
            'password' => Hash::make('asmita123'),
            ]);
    }
}
