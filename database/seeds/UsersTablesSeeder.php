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
            'name'           =>  'Lakatos Gábor',
            'email'          =>  'lakatos.gabor998@gmail.com',
            'password'       =>   Hash::make('password'),
            'remember_token' =>   Str::random(10),
                    
            
        ]);
    }
}
