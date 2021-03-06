<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Validator;
use Response;
use App\Post;
use View;
use App\Attendence;

class TestController extends Controller
{
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

    public function store(Request $request)
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

    public function update(Request $request, $id)
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

    public function destroy($id)
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
   // public function attendence_sheet( Attendence $id){
    //dd($id);
    // $id = Attendence::all();

    //return view('attendence',['id'=> $id]);

    public function dropzone(){
        return view('test');

    }

    public function upload(Request $request){
    $image = $request->file('file');
    $imageName = time(). '.' .$image->extension();
    $image->move(public_path('dropzone'),$imageName);
    return response()->json(['success'=>$imageName]);
}



}
