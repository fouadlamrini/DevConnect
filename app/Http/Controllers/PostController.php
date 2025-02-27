<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $posts = Post::all();
    return view('dashboardUser', compact('posts'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
    $post = Post::create([
        'user_id' => Auth::user()->id,
        'hashtag_id'=> 1,
        'content' => $request->content,
        'code_snippet' => $request->code_snippet,
        'image' => $request->image, 
    ]);

   
    return redirect()->back()->with('success', 'Post ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
