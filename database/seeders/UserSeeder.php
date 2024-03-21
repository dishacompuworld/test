<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //    $users = collect (
    //     [
    //             [
    //                 'name' => 'Sachin Tendulkar',
    //                 'email' => 'sachin@gmail.com',
    //                 'password' => 'new pass'
    //             ],
    //             [
    //                 'name' => 'Vijay Chavan',
    //                 'email' => 'vijay@gmail.com',
    //                 'password' => 'new pass'
    //             ],
    //             [
    //                 'name' => 'Sagar Patil',
    //                 'email' => 'sagar@gmail.com',
    //                 'password' => 'new pass'
    //             ],
    //             [
    //                 'name' => 'Virat Kohali',
    //                 'email' => 'virat@gmail.com',
    //                 'password' => 'new pass'
    //             ]

    //         ]
    //     );



        //for previous method
        // $users->each(function($user){
        //     User::insert($user);
        // });


        //Json File
        // $json = File::get(path:'database/json/user.json');
        // $users=collect(json_decode($json));

        
        // $users->each(function($user){
        //     User::create([
        //         'name' => $user->name,
        //         'email' => $user->email,
        //         'password' => $user->password
        //     ]);

        // });

       
        // User::create([
        //     'name' => 'Sachin Tendulkar',
        //     'email' => 'sachin@gmail.com',
        //     'password' => 'new pass'
        // ]);


        // for($i=1; $i<=20; $i++){
        //     User::create([
        //         'name' => fake()->name(),
        //         'email' => fake()->unique()->email(),
        //         'password' => fake()->password()
        //     ]);
        // }
        

        User::factory(10)->create();

         //User::factory(10)->create();

    }
}
