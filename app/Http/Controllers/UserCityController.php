<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserCityController extends Controller
{
    public function showCity(){
        $cities = DB::table('cities')
        ->select('id','name')                
        ->get();
        
        // return $cities;
        return view('allcity',['data'=> $cities]);
    }


    public static function showCitySelect(){
        $cities = DB::table('cities')
        ->select('id','name')                
        ->get();
        
        // return $cities;
         return view('adduser',['data'=> $cities]);
    }


    public function city(string $id){
        $city = DB::table('cities')->where('id',$id)->get();
        //return $city;

        return view('city',['data'=> $city]);
    }


    public function addnewcity(Request $request){

        $request->validate([
            'cityname' => 'required',
        ],
        [
           'cityname.required' => 'Enter Name Proprly.',

        ]);

        $city = DB::table('cities')
        ->insert([
            
                'name'=> $request->cityname,
        ]);


        if($city){
            return redirect()->route('loadcity');
        }else{
            echo "<h2>Record Not Added.</h2>";
        }
    }


    public function updatecitypage(string $id){
        // $user = DB::table('users')->where('id',$id)->get();
        $city = DB::table('cities')->find($id);
         //return $user;
        return view('updatecity',['data'=> $city]);
    }

    public function updatecity(Request $request, $idd){
        //return $request;
        $city = DB::table('cities')
            ->where('id', $idd)
            ->update([
                'name' => $request->cityname,
            ]);

        if($city){
            return redirect()->route('loadcity');
        }else{
            echo "<h2>Record Not Updated</h2>";
        }
    }


    public function deletecity(string $id){
        $city = DB::table('cities')
                    ->where('id', $id)
                    ->delete();


        if($city){
            return redirect()->route('loadcity');
        }else{
            echo "<h2>Record Not Deleted</h2>";
        }
    }
}
