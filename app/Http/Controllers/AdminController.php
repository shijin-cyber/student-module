<?php

namespace App\Http\Controllers;
use DB;
use\App\Student;
use\App\Attendence;
use App\Post;
use App\Image;
use App\Data;




use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add_student(){

    	return view('add_student');

    }

    public function student_list(){

    	return view('student_list');

    }

     public function updatetest(){

    	return view('stud_update');

    }

    //public function documents(){
      // $id = Student::all();
    // return view('documents', compact('id'));
   // }
    

    public function notes(){
         $images = Image::all();
    
        return view('notes',compact('images'));
    }

    


      


public function list(){
$students = DB::select('select * from students');
return view('student_list',['student'=>$students]);
}


//update

//public function update(){
//$students = DB::select('select * from students');
//return view('student_update',['student'=>$students]);
//}
//public function show($id) {
//$students = DB::select('select * from students where id = ?',[$id]);
//return view('stud_update',['student'=>$students]);
//}
//edit
//public function edit(Request $request,$id) {
	//$students = DB::select('select * from students where id = ?',[$id]);

//$name = $request->input('name');
//$age = $request->input('age');
//$address = $request->input('address');
//$total_perfomance = $request->input('total_perfomance');
//$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
//DB::table('student')->update($data);
// DB::table('student')->whereIn('id', $id)->update($request->all());
//DB::update('update students set name = ?,age=?,address=?,total_perfomance=? where id = ?',[$name,$age,$address,$total_perfomance,$id]);


//echo "Record updated successfully.
//";
//echo '<a href="/student_list">click here to goback</a>';
//return view('stud_update',['student'=>$students]);



//}

 public function edit( Student $id){
        //$todo = Todo::findorfail($id);
       // dd($todo);
        return view('stud_update',['id'=>$id]);

    }
     public function update(Request $req ,Student $id){
        $validateData = $req->validate([
        'name' => "required|max:124",
         //'age' => "required|max:2",
         'address' => "required|max:124",
         'total_perfomance' => "required|max:124",
         'age' => 'numeric|min:6|max:100', 'Lno' => 'numeric|min:2'
        
    ]);
        $id->update($validateData);
        return redirect('student_list');


    }

//delete

public function delete(){
$students = DB::select('select * from students');
return view('stud_delete_view',['student'=>$students]);
}
public function destroy($id) {
	$students = DB::select('select * from students');


DB::delete('delete from students where id = ?',[$id]);
return redirect('student_list');

}
    // public function delete(Student $id){
        //$id->delete();
       // return view('student_list');
    //}


//for lag urls
public function stulist(){
    return view ('test');
}


public function addstu(){
    return redirect ('add_student');
}
//attendence_

 public function attendence_sheet(  ){
    //dd($id);
     $id = Student::all();
     $at = Attendence::all();
     

    //return view('attendence',['id'=> $id]);
     return view('attendence', compact('id','at'));

 }



  

 
 
///attendence
  public function store(Request $req){
        //dd($req);
        //dd($req->post('title'));
        $validateData = $req->validate([
            'name'=>'required| max:124',
            'date'=>'required',
            'hour1'=>'required',
            'hour2'=>'required',
            'hour3'=>'required',
            'hour4'=>'required',
            'hour5'=>'required',
            'hour6'=>'required',
            'hour7'=>'required',
            'hour8'=>'required'
        ]);
       // dd($validateData);
       Attendence::create($validateData);

        //$to = new Todo();
        //$to->title = $req ->post('title');
        //$to->save();
        return back();
    }

    public function attendence_list(Attendence $id){
         $id = Attendence::all();

        return view('attendence_list',['id'=> $id]);
    }
    public function edit_attendence( Attendence $id){
        //$todo = Todo::findorfail($id);
       // dd($todo);
        return view('update_attendence',['id'=>$id]);
    }
    public function update_attendence(Request $req ,Attendence $id){
        $validateData = $req->validate([
            'name'=>'required| max:124',
            'date'=>'required',
            'hour1'=>'required',
            'hour2'=>'required',
            'hour3'=>'required',
            'hour4'=>'required',
            'hour5'=>'required',
            'hour6'=>'required',
            'hour7'=>'required',
            'hour8'=>'required'
        ]);
        $id->update($validateData);
        return redirect('attendence_list');
    }
    public function delete_attendence(Attendence $id){
        $id->delete();
        return back();

    }

    //ajax attendence
     protected $rules =
    [
        'title' => 'required|min:2|max:32|regex:/^[a-z ,.\'-]+$/i',
        'content' => 'required|min:2|max:128|regex:/^[a-z ,.\'-]+$/i'
    ];

    public function index()
    {
        $posts = Post::all();

        return view('attendence.index', ['posts' => $posts]);
    }

    public function storee(Request $request)
    {
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $post = new Post();
            $post->title = $request->title;
            $post->content = $request->content;
            $post->save();
            return response()->json($post);
        }
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('attendence.show', ['post' => $post]);
    }

    public function updatee(Request $request, $id)
    {
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $post = Post::findOrFail($id);
            $post->title = $request->title;
            $post->content = $request->content;
            $post->save();
            return response()->json($post);
        }
    }

    public function destroyy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return response()->json($post);
    }

    public function changeStatus() 
    {
        $id = Input::get('id');

        $post = Post::findOrFail($id);
        $post->is_published = !$post->is_published;
        $post->save();

        return response()->json($post);
    }

    public function ajaxedit(Request $request, $id){
        
        $att = Attendence::find($id);
        
        $att->name =$request->input('name');
        $att->date =$request->input('date');
        $att->hour1 =$request->input('hour1');
         $att->hour2 =$request->input('hour2');
          $att->hour3 =$request->input('hour3');
           $att->hour4 =$request->input('hour4');
            $att->hour5 =$request->input('hour5');
             $att->hour6 =$request->input('hour6');
              $att->hour7 =$request->input('hour7');
               $att->hour8 =$request->input('hour8');
                
                $att->save();


    }
    //documents
   

    public function documentss(){
     $images = Image::all();
      $id = Student::all();
    
        return view('documents',compact('images','id'));
    }
  
    

   

     public function postImage(Request $request){


         $this->validate($request, ['image'=> 'required']);
         $images = $request ->image;
         foreach ($images as  $image) {

            $image_new_name = time() .$image->getClientOriginalName();
            $image->move(public_path().'/image/',$image_new_name);
            $post = new image;
            $post->image ='image/' . $image_new_name;
            $post->name = $request->name;
            $post->department = $request->department;
            $post->batch = $request->batch;
            $post->documenttitle = $request->documenttitle;
            $post->save();
        }
        return redirect('/documents');
}


public function postdata(Request $request){

     $data = new Data;
        $data->name=$request->name;
        $data->department=$request->department;
        $data->year=$request->year;
        $data->save();

     return redirect('/documents');
}
}
    


    




