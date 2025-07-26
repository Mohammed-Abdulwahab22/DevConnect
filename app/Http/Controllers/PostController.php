<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource (all posts for the homepage).
     */
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        return view('home', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate both title and content
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'max:255'], // New: Validate title
            'content' => ['required', 'string', 'max:500'],
        ]);

        // Create the post for the authenticated user, including the title
        Auth::user()->posts()->create([
            'title' => $validatedData['title'], // Save the title
            'content' => $validatedData['content'],
            'upvotes' => 0,
        ]);

        // Redirect back to the home page (posts index) after creating a post.
        // This is generally more user-friendly for a social feed.
        return redirect()->route('home')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource (single post).
     * Using Route Model Binding: Laravel automatically injects the Post model based on the route parameter.
     */
    public function show(Post $post)
    {
        // Option 1: Create a dedicated 'posts/show.blade.php' view.
        // If you want a specific page for each post, you would uncomment this and create the view.
        // return view('posts.show', compact('post'));

        // Option 2 (Recommended for now): Redirect back with an info message.
        // This avoids the view not found error if you don't have a single post view.
        // If you intend to have a 'posts.show' page later, you can remove this redirect.
        return redirect()->back()->with('info', 'Individual post view not implemented yet. Showing all posts.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        // You'll likely need a view for editing, e.g., 'posts.edit'
        // return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'max:255'], // Validate title for update
            'content' => ['required', 'string', 'max:500'],
        ]);

        if (Auth::id() !== $post->user_id) {
            return back()->with('error', 'You are not authorized to update this post.');
        }

        $post->update($validatedData); // Update both title and content

        return redirect()->route('home')->with('success', 'Post updated successfully!'); // Redirect to home
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if (Auth::id() !== $post->user_id) {
            return back()->with('error', 'You are not authorized to delete this post.');
        }

        $post->delete();

        return redirect()->route('home')->with('success', 'Post deleted successfully!');
    }
}