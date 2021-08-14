<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  
///use DB ;
class PostController extends Controller
{
    public function getallpost()
    {
        $posts = DB :: table('posts')->get() ;
        return view('posts.post', compact('posts')) ;
    }
    public function addPost()
    {
        return(view('posts.add-post'));
    }
    public function addpostsubmit(Request $request)
    {
        DB::table('posts')->insert([
            'title' => $request->title ,
            'body' => $request->body 
        ]);
        return(back()->with('post_created','Post has been created successfully!'));
    }
    public function getpostById($id)
    {
        $post = DB::table('posts')->where('id',$id)->first();
        return view('posts.single-post',compact('post'));
    }
    public function deletepost($id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return back()->with('post_deleted','Post has been deleted successfully!');
    }
    public function editpost($id)
    {   
        $post = DB :: table('posts')->where('id', $id)->first();
        return view('posts.edit-post', compact('post'));
    }
    public function updatePost(Request $request)
    {
        DB::table('posts')->where('id',$request->id)->update([
            'title' =>$request->title ,
            'body' =>$request->body 
        ]);
        return back()->with('post_updated','Post has been updated successfully!');

    }

}
