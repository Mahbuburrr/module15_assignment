<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request,$id){

        $name="Donal Trump";
        $age="75";
        $data=[
            'id'=>"1",
            'name'=>$name,
             'age'=>$age
        ];

        //Set your cookie variables stated in the question


 $name= "access_token";


$value = "123-XYZ";


$minutes = 1;


$path = "/";



$domain = $_SERVER['SERVER_NAME'];


$secure =false;


$httpOnly = true;

return response()->json(['message'=>'Registration Success','data'=>[$data]],200)->cookie('my-cookies',$name,$secure,$path,$domain,$httpOnly,$minutes,$value);



    }
}
