<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $page='home';
        $sliderdata=Transfer::limit(4)->get();
        $transferlist1=Transfer::limit(6)->get();
        return view('home.index',[
            'page'=>$page,
            'sliderdata'=>$sliderdata,
            'transferlist1'=>$transferlist1
        ]);

    }

    public function transfer($id)
    {
        $data =Transfer::find($id);
        $images = DB::table('images')->where('transfer_id', $id)->get();
        return view('home.transfer',[
            'data'=>$data,
            'images'=>$images
        ]);
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

