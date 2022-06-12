<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Setting;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();

        return view('home.user.index', ['setting' => $setting]);
    }

    public function Comment()
    {
        $setting = Setting::first();
        $comments = Comment::where('user_id', '=', Auth::id())->get();
        return view('home.user.comments', [
            'comments' => $comments,
            'setting' => $setting
        ]);

    }

    public function transfer()
    {
        $setting = Setting::first();
        $transfers = Transfer::where('user_id', '=', Auth::id())->get();
        return view('home.user.transfers', [
            'transfers' => $transfers,
            'setting' => $setting
        ]);

    }

    public function storetransfer(Request $request)
    {

        $data = new Transfer();
        $data->category_id = $request->category_id;
        $data->user_id = Auth::id(); // $request->user_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->base_price = $request->base_price;
        $data->km_price = $request->km_price;
        $data->capacity = $request->capacity;
        $data->status = $request->status;
        $data->slug = $request->slug;
        $data->detail = $request->detail;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();

        return redirect('userpanel/transfer');

    }

    public function transferupdate(Request $request, $id)
    {
        $data = Transfer::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = Auth::id();
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->base_price = $request->base_price;
        $data->km_price = $request->km_price;
        $data->capacity = $request->capacity;
        $data->status = $request->status;
        $data->slug = $request->slug;
        $data->detail = $request->detail;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();

        return redirect('userpanel/transfer');
    }

    public function transferedit($id)
    {
        //
        $setting = Setting::first();
        $transfer = Transfer::find($id);
        $data=Category::all();
        return view('home.user.transferedit', [
            'setting'=>$setting,
            'transfer'=>$transfer,
            'data'=>$data
        ]);
    }

    public function addtransfer()
    {
        $setting=Setting::first();
        $data=Category::all();
        return view('home.user.addtransfers', [
            'setting'=>$setting,
            'data'=>$data
        ]);

    }

    public function transferdestroy($id)
    {
        //
        $setting=Setting::first();
        $data =Transfer::find($id);
        $data->delete();
        return redirect(route('userpanel.transfer'), [
            'transfers' => $data,
            'setting'=>$setting
        ]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function commentdestroy($id)
    {
        //
        $data =Comment::find($id);
        $data->delete();
        return redirect(route('userpanel.Comment'));

    }
}
