<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $posts= Post::all();
        return view('post.index')->with('posts', $posts);
    }
      public function post(){
        return view('usersPages.post');
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
    public function postimage(Request $request)
    {
        $post = new Post();
        
        $post->equipment_type =$request->input('equipment_type');
        $post->sub_county	 =$request->input('sub_county');
        $post->manufacturer =$request->input('manufacturer');
        $post->list_title =$request->input('list_title');
        $post->cost =$request->input('cost');
        if ($request->hasfile('image')) {
            # code...
            $file=$request->file('image');
            $extension =$file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/post/', $filename);
            $post->image = $filename;

        }else {
            return $request;
            $post->image = '';

        }
        $post->save();

        return view('post')->with('post', $post);
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
}
