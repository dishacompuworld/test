<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function showUsers(){
        $users = DB::table('users')
        // ->select('id','name','email','city')
        // 
        ->select('users.*','cities.name as cityname')
        ->leftjoin('cities','users.city','=', 'cities.id')
        ->paginate(10, ['*'],'panna');
        // ->get();

        //return $users;
        
        return view('allusers',['data'=> $users]);
    }


    public function singleuser(string $id){
        $user = DB::table('users')->where('id',$id)->get();
        // return $users;
        return view('user',['data'=> $user]);
    }

    public function adduser(UserRequest $request){

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
            return redirect()->route('user.index');
        }else{
            echo "<h2>Record Not Added.</h2>";
        }
    }

    public function updatepage(string $id){
        // $user = DB::table('users')->where('id',$id)->get();
        $user = DB::table('users')->find($id);
        $cities = DB::table('cities')->select('id','name')->get();


         //return $user;
        return view('updateuser',['data'=> $user, 'data1'=>$cities]);
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