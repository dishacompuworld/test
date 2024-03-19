<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        $users = DB::table('users')
        ->select('id','name','email')                
        ->get();
        // return $users;
        
        return view('allusers',['data'=> $users]);
    }


    public function singleuser(string $id){
        $user = DB::table('users')->where('id',$id)->get();
        // return $users;
        return view('user',['data'=> $user]);
    }

    public function adduser(){
        $user = DB::table('users')
        ->insert([
            [
                'name'=> 'Smita Thakur',
                'email' => 'smita@dishacompuworld.com',
                'password' => 'newpassword',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'=> 'Rajesh Thakur',
                'email' => 'rt@dishacompuworld.com',
                'password' => 'newpassword',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'=> 'Arnesh Kothekar',
                'email' => 'arnesh@dishacompuworld.com',
                'password' => 'newpassword',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        if($user){
            echo "<h2>Record successfully Added.</h2>";
        }else{
            echo "<h2>Record Not Added.</h2>";
        }
    }


    public function updateuser(){
        $user = DB::table('users')
            ->where('id', 12)
            ->update([
                'email' => 'new2@gmail.com',
                'password' => 'NewP2assword'
            ]);

        if($user){
            echo "<h2>Record successfully Updated</h2>";
        }else{
            echo "<h2>Record Not Updated</h2>";
        }
    }


    public function deleteuser(string $id){
        $user = DB::table('users')
                    ->where('id', $id)
                    ->delete();


        if($user){
            return redirect()->route('userLoad');
        }else{
            echo "<h2>Record Not Deleted</h2>";
        }
    }

    
    
}
