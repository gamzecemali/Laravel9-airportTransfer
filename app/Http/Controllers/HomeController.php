<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AdminPanel\CategoryController;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Setting;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public static function maincategorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public function index()
    {
        $page = 'home';
        $sliderdata = Transfer::limit(4)->get();
        $transferlist1 = Transfer::limit(6)->get();
        $setting = Setting::first();

        return view('home.index', [
            'page' => $page,
            'setting' => $setting,
            'sliderdata' => $sliderdata,
            'transferlist1' => $transferlist1
        ]);

    }

    public function about()
    {

        $setting = Setting::first();
        $data = Transfer::All();
        $transferlist1 = Transfer::limit(6)->get();
        return view('home.about', [
            'setting' => $setting,
            'transferlist1' => $transferlist1,
            'data' => $data
        ]);

    }

    public function faq()
    {
        $setting = Setting::first();
        $datalist = Faq::all();
        return view('home.faq', [
            'setting' => $setting,
            'datalist' => $datalist,
        ]);

    }


    public function references()
    {

        $setting = Setting::first();
        return view('home.references', [
            'setting' => $setting,
        ]);
    }

    public function contact()
    {

        $setting = Setting::first();
        return view('home.contact', [
            'setting' => $setting,
        ]);
    }

    public function storemessage(Request $request)
    {

        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->message = $request->input('message');
        $data->subject = $request->input('subject');
        $data->save();
        return redirect()->route('contact')->with('info', 'Your message has been sent. Thank You.');

    }

    public function storecomment(Request $request)
    {
        //dd($request);
        $data = new Comment();
        $data->user_id = Auth::id();
        $data->transfer_id = $request->input('transfer_id');
        $data->subject = $request->input('subject');
        $data->ip = $request->ip();
        $data->Comment = $request->input('Comment');
        $data->rate = $request->input('rate');
        $data->save();
        return redirect()->route('transfer', ['id' => $request->input('transfer_id')])->with('success', 'Your comment has been sent. Thank You.');

    }


    public function transfer($id)
    {
        $data = Transfer::find($id);
        $setting = Setting::first();
        $images = DB::table('images')->where('transfer_id', $id)->get();
        $reviews = Comment::where('transfer_id', $id)->where('status', 'True')->get();
        return view('home.transfer', [
            'data' => $data,
            'images' => $images,
            'setting' => $setting,
            'reviews' => $reviews,

        ]);
    }


    public function categorytransfers($id)
    {


        $category = Category::find($id);
        $setting = Setting::first();
        $transfers = Transfer::where('category_id', '=', $id)->get();
        return view('home.categorytransfers', [
            'category' => $category,
            'setting' => $setting,
            'transfers' => $transfers
        ]);

    }

    public function test()

    {
        return view('home.test');

    }

    public function param($id, $number)

    {
        //echo "Paramater 1:", $id;
        //echo "<br>Paramater 2:", $number;
        //echo "<br>Sum Paramaters :", $id+$number;
        return view('home.test2',
            [
                'id' => $id,
                'number' => $number
            ]);

    }

    public function save(Request $request)
    {
        //echo "Save Function<br>";
        //echo "First Name :", $_REQUEST["fname"];
        //echo "Last Name :", $_REQUEST["lname"];


    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenereteToken();
        return redirect('/');

    }
}



