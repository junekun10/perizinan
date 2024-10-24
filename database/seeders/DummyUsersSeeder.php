<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'kordinator keamanan',
                'email'=>'kordinator@gmail.com',
                'role'=>'kordinator',
                'password'=>bcrypt('123456')
             ],
             [
                'name'=>'operator',
                'email'=>'operator@gmail.com',
                'role'=>'operator',
                'password'=>bcrypt('110720')
             ],
        ];

        foreach($userData as $key => $val){
            User::create($val);

        }

    }
}
