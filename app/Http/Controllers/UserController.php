<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        $users = DB::table('users')
        ->select('id','name','email','city')                
        ->paginate(10, ['*'],'panna');
        // return $users;
        
        return view('allusers',['data'=> $users]);
    }


    public function singleuser(string $id){
        $user = DB::table('users')->where('id',$id)->get();
        // return $users;
        return view('user',['data'=> $user]);
    }

    public function adduser(Request $request){

        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|alpha_num',
            'city' => 'required',
        ],
        [
           'username.required' => 'Enter Name Proprly.',
           'email.required' => 'Enter Email Address.',
           'email.email' => 'Enter Email Address Properly!',
           'password.required' => 'Enter Password field',
           'password.alpha_num' => 'Enter Password field in Alpha Numaric Format!',
           'city.required' => 'Enter City Field.',
        ]);

        $user = DB::table('users')
        ->insert([
            
                'name'=> $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'city' => $request->city,
                'created_at' => now(),
                'updated_at' => now()
        ]);


        // $user = DB::table('users')
        // ->insert([
        //     [
        //         'name'=> 'Smita Thakur',
        //         'email' => 'smita@dishacompuworld.com',
        //         'password' => 'newpassword',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'name'=> 'Rajesh Thakur',
        //         'email' => 'rt@dishacompuworld.com',
        //         'password' => 'newpassword',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'name'=> 'Arnesh Kothekar',
        //         'email' => 'arnesh@dishacompuworld.com',
        //         'password' => 'newpassword',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]
        // ]);

        if($user){
            return redirect()->route('userLoad');
        }else{
            echo "<h2>Record Not Added.</h2>";
        }
    }

    public function updatepage(string $id){
        // $user = DB::table('users')->where('id',$id)->get();
        $user = DB::table('users')->find($id);
         //return $user;
        return view('updateuser',['data'=> $user]);
    }


    public function updateuser(Request $request, $idd){
        //return $request;
        $user = DB::table('users')
            ->where('id', $idd)
            ->update([
                'name' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'city' => $request->city,
                'updated_at' => now()
            ]);

        if($user){
            return redirect()->route('userLoad');
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