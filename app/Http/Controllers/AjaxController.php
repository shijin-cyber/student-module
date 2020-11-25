<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Attendence;
use App\Image;
use File;

class AjaxController extends Controller
{
    public function addstudent(){

    	 $id = Student::all();
    	 return view('add_student_ajax', compact('id'));

    }

    public function store(Request $request){
		$add = new Student;
		$add->name = $request->input('name');
		$add->age = $request->input('age');
		$add->address = $request->input('address');
		$add->total_perfomance = $request->input('total_perfomance');
		
		

		
		
		$add->save();
	}

    


	 public function ajaxedit(Request $request, $id){
        
        $id = Student::find($id);
        
        
        $id->name =$request->input('name');
        $id->age =$request->input('age');
        $id->address =$request->input('address');
         $id->total_perfomance =$request->input('total_perfomance');


         
          
           
                
                $id->save();
               



    }

     public function editattendence(Request $request, $id){
        
        $attendence = Attendence::find($id);
       
        
        
       
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

    public function delete($id){
    	$Students = Student::find($id);
    	$Students->delete();
    	
    }

    public function deleteattendence($id){
    	$Att = Attendence::find($id);
    	$Att->delete();
    	
    }

    public function deletedata($id){
    	$data = Image::find($id);
    	$data->delete();
    	
    }



      public function editfile($id){
        $data = Image::find($id);
        
        return view('editfile')->with('datas',$data);
      }

      public function updatedata (Request $request ,$id){
         $data = Image::find($id);
         $data->documenttitle = $request->documenttitle;
         if($request->hasfile('image')){
            $file = $request->file('image');
            
            $filename = time() .$file->getClientOriginalName();
            $file->move(public_path().'/image/',$filename);
             $data->image ='image/' . $filename;

        }
        $data->save();
        return redirect('documents')->with('images',$data);


      }
}
