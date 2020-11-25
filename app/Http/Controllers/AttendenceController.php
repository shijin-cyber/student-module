<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendence;

class AttendenceController extends Controller
{

	public function store(Request $request){
		$attendence = new Attendence;
		$attendence->name = $request->input('name');
		$attendence->date = $request->input('date');
		$attendence->hour1 = $request->input('hour1');
		$attendence->hour2 = $request->input('hour2');
		$attendence->hour3 = $request->input('hour3');
		$attendence->hour4 = $request->input('hour4');
		$attendence->hour5 = $request->input('hour5');
		$attendence->hour6 = $request->input('hour6');
		$attendence->hour7 = $request->input('hour7');
		$attendence->hour8 = $request->input('hour8');
		
		
		$attendence->save();

		

		


	}

	
}
