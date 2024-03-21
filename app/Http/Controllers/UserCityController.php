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


    public function city(string $id){
        $city = DB::table('cities')->where('id',$id)->get();
        //return $city;

        return view('city',['data'=> $city]);
    }


    public function deletecity(string $id){
        $city = DB::table('cities')
                    ->where('id', $id)
                    ->delete();


        if($city){
            return redirect()->route('showcity');
        }else{
            echo "<h2>Record Not Deleted</h2>";
        }
    }
}
