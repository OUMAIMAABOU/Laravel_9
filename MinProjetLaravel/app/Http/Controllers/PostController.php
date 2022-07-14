<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post=Post::all();
        return view('TablePost',['post'=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::all();
        $categories = Categorie::all();
        $tags = Tag::all();
        return view('addPost', compact('posts', 'categories', 'tags'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'image' => 'required',
        //     'description' => 'required',
        //     ]);
        if($request->hasFile('image')){
            $request->file('image')->store('images');

        }
        $Post = new Post();
        $Post->title=$request->input('title');
        $Post->categorie_id=$request->input('Categorie');
        $Post->tag_id =$request->input('tag');
        $Post->slug="test";

        $Post->description=$request->input('Discription');
        $Post->image=$request->file('image')->getClientOriginalName();
        $Post->publish=$request->input('Publish');
        $Post->user_id=11;

        $Post->save(); 
        return redirect()->route('posts.index')
        ->withSuccess(__('Post add successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit( $post)
    {       $posts = Post::all();
        $categories = Categorie::all();
        $tags = Tag::all();
        $posts=Post::find($post);
        return view('edite', compact('posts', 'categories', 'tags'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // $post->edit();
        // $post = post::find($post->id);
        // $post->title = $request->name;
  
        // $post->save();
        // return redirect()->route('posts.index')
        //      ->withSuccess(__('Post delete successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
             ->withSuccess(__('Post delete successfully.'));
    }
}
