<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        echo "Home Controller Test";

    }


    public function test()

    {
        return view('home.test');


    }

    public function param($id,$number)

    {
        //echo "Paramater 1:", $id;
        //echo "<br>Paramater 2:", $number;
        //echo "<br>Sum Paramaters :", $id+$number;
        return view('home.test2',
        [
            'id' => $id,
            'number' =>$number
        ]);

    }

         public function save(Request $request)
         {
             //echo "Save Function<br>";
             //echo "First Name :", $_REQUEST["fname"];
             //echo "Last Name :", $_REQUEST["lname"];


         }
}


