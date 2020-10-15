<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('admin.index');
    }

    public function blogView()
    {   
        //$posts= Post::all();
        //$posts= Post::orderBy('title', 'desc')->take(9)->get();
        $posts= Post::orderBy('id', 'desc')->paginate(9);
        return view('blog')->with('posts', $posts);
    }


    public function blogList()
    {   
        $posts= Post::orderBy('id', 'desc')->paginate(9);
        return view('admin.blog-list')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'category'=>'required',
            'image'=>'required'
        ]);

        $post = new Post;
        $post->title=$request->input('title');
        $post->category=$request->input('category');
        $post->image='abc.png';
        $post->description=$request->input('description');
        $post->save();

        return redirect('admin/blog-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        return view('blog-detail')->with('post', $post); 
    }

    public function showBlog($id)
    {
        $post=Post::find($id);
        return view('admin.blog-detail')->with('post', $post); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        return view('admin.blog-edit')->with('post', $post);
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
        $this->validate($request, [
            'title'=>'required',
            'category'=>'required',
            'image'=>'required'
        ]);

        $post = Post::find($id);
        $post->title=$request->input('title');
        $post->category=$request->input('category');
        $post->image='abc.png';
        $post->description=$request->input('description');
        $post->save();

        return redirect('admin/blog-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect('admin/blog-list');    }
}
