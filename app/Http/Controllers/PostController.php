<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    { 
        $this->authorizeResource(Post::class, 'post');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderByDesc('created_at')->paginate(9);
        return view("admin.post.index",["posts"=> $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view("admin.post.create",["categories"=> $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    { 
        if($request->hasFile("photo")){
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post-photo', $name);
        }
        // dd($path);
        $post = Post::create([
            'user_id'=> Auth::user()->id,
            "category_id" => $request->category_id,
            'title'=> $request->title,
            'photo'=> $path ?? null,
            'short_content'=> $request->short_content,
            'content'=> $request->content,
        ]);
        return redirect()->route("posts.index")->with("success","yuklandi");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {   
        $categorys = Category::all();
        return view("admin.post.show",[
            "post"=> $post,
            "categorys"=> $categorys,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view("admin.post.edit",["post"=> $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if($request->hasFile("photo"))
        {  
            if(isset($post->photo)){
                Storage::delete($post->photo);
            }
            $name = $request->file("photo")->getClientOriginalName();
            $path = $request->file("photo")->storeAs("post-photo", $name);
        }
        $post->update([
            "title"=> $request->title,
            "photo"=> $path ?? $post->photo,
            "short_content"=> $request->short_content,
            "content"=> $request->content

        ]);
        return redirect()->route("posts.index")->with("success","");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if(isset($post->photo))
        {
            Storage::delete($post->photo);
        }
        $post->delete();
        return redirect()->route("posts.index")->with("success","");
    }
}
