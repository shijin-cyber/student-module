<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;



class DataController extends Controller
{
  public  function create (Request $req){

        $validatedData = $req->validate([
        'name' => "required|max:124",
         //'age' => "required|max:2",
         'address' => "required|max:124",
         'total_perfomance' => "required|max:124",
         'age' => 'numeric|min:6|max:100', 'Lno' => 'numeric|min:2'
        
    ]);
    	
  	   // $students= new Student;
       // $students->name = $req->name;
  	   // $students->age = $req->age;
  	   // $students->address = $req->address;
       // $students->total_perfomance = $req->total_perfomance;
  	   // $students->save();
        Student::create($validatedData);
       

        return view('add_student');

  	   

    }
   // public function store(Request $request)
//{
    //$validatedData = $request->validate([
        //'name' => 'required|unique:posts|max:255',
        //'body' => 'required',
    //]);
  //}
    
}