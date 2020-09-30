<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class UsersTablesSeeder extends Seeder
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
            'neptun'         =>  'UDBOC3',
            'usertype'       =>  'oktato',
            'name'           =>  'Lakatos Gábor',
            'email'          =>  'lakatos.gabor998@gmail.com',
            'password'       =>   Hash::make('oktato'),
            'remember_token' =>   Str::random(10),   
        ]);


        User::create([
            'neptun'         =>  'ABEOA2',
            'usertype'       =>  'hallgato',
            'name'           =>  'Teszt Elek',
            'email'          =>  'elek@gmail.com',
            'password'       =>   Hash::make('hallgato'),
            'remember_token' =>   Str::random(10),   
        ]);
    }
}
