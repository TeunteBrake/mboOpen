<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class LedenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            [
                'name' => 'Han',
                'email' => 'han@gmail.com',
                'password' => Hash::make('test12345'),
                'lid' => 1
            ],
            [
                'name' => 'Erik',
                'email' => 'erik@gmail.com',
                'password' => Hash::make('test12345'),
                'lid' => 1
            ],
            [
                'name' => 'Leo',
                'email' => 'leo@gmail.com',
                'password' => Hash::make('test12345'),
                'lid' => 1
            ],
            [
                'name' => 'Thomas',
                'email' => 'thomas@gmail.com',
                'password' => Hash::make('test12345'),
                'lid' => 1
            ],
            [
                'name' => 'Alwin',
                'email' => 'alwin@gmail.com',
                'password' => Hash::make('test12345'),
                'lid' => 1
            ],
        ];

        foreach ($users as $user){
            DB::table('users')->insert($user);
        }



    }
}
