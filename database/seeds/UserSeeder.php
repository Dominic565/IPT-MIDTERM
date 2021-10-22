<?php

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
        $data = [
            [
                'lname' => 'Ike',
                'fname' => 'Belida',
                'address' => 'Panaytayon, Tubigon, Bohol',
                'phone' => '09224658184',
                'email' => 'Ikeb@yahoo.com',
                'password' => bcrypt('Sanaoll')
            ],
            [
                'lname' => 'Kenneth',
                'fname' => 'Delima',
                'address' => 'Panaytayon, Tubigon, Bohol',
                'phone' => '09984564659',
                'email' => 'Delimakenneth@yahoo.com',
                'password' => bcrypt('xb')
            ],
            [
                'lname' => 'Jay',
                'fname' => 'Calamba',
                'address' => 'Matabao, Tubigon, Bohol',
                'phone' => '09686121881',
                'email' => 'JayC@yahoo.com',
                'password' => bcrypt('Kreutzer')
            ]
        ];

        foreach($data as $user){
            \App\User::create($user);
        }
    }
}
