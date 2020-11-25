<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Attendence;
use Illuminate\Support\Facades\Auth;
use DB;
use\App\Image;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    //public function index()
    

    //{
         //$at = Attendence::all();
    
         //return view('home', compact('at'));
   // }

     public function index(Request $request)
     {
       //$at = Attendence::all();
    $id = Auth::user()->name;
    $images = Image::all();
    
    
    $data['data'] = DB::table('Attendences')->where('name','=', $id )->first();



       //dd($id);
       //dd($data);
    
    if(count ($data)>0){
    return view('home',compact('data','images'));
    }
    
    {
        return view('home');
    }
}


   












    public function admin()
    {
        return view('admin');
    }
    public function test()
    {
        return view('test');
    }
}
