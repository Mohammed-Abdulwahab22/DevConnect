<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Logic to retrieve and display posts
        return view('posts.index'); // Make sure this matches your view file name
    }
    public function show($post)
    {
        // Logic to display a single post
        return view('posts.show', compact('post')); // Make sure this matches your view file name
    }
    public function store(Request $request)
    {
        // Logic to create a new post
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = auth()->user()->posts()->create($validatedData);

        return redirect()->route('posts.show', $post)->with('success', 'Post created successfully!');
    }
    public function update(Request $request, $post)
    {
        // Logic to update an existing post
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = auth()->user()->posts()->findOrFail($post);
        $post->update($validatedData);

        return redirect()->route('posts.show', $post)->with('success', 'Post updated successfully!');
    }
    public function destroy($post)
    {
        // Logic to delete a post
        $post = auth()->user()->posts()->findOrFail($post);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }

    
    //
}
