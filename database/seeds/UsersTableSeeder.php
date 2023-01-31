<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'image' => '',
            'name' => 'ashmita',
            'profession' => 'engineer',
            'state' => 'Butwal',
            'country'=> 'Nepal',
            'email' => 'asmita@myself.com',
            'address' => 'rupandehi',
            'password' => Hash::make('asmita123'),
            ]);
    }
}
