<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::get();
        return view('posts-index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-blog-post-form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new post;
        $post->title = $request->title;
        $post->description = $request->description;
        // Post save lägger till och skapar en ny rad i databasen.
        // save har en ruturn bool som är true eller false.
        $post->save();
        // Redirect gör så att vi inte landar på en vit sida. Här bestämmer man vilken vy man hamna på
        // Vi redirectas tillbaka till add-blog-post-form. with gör så att vi kan addera en bit av data till våran session.
        // i detta fall att status har värdet 'Blog Post Form Data Has Been inserted'.
        return redirect('add-blog-post-form')->with('status', 'Blog Post Form Data Has Been inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
