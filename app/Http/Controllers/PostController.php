<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Notifications\Postnotification;
use App\Notifications\PostNotification as NotificationsPostNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        // $user = User::find(1);
        // $messages["hi"] = "Hey, Happy Birthday {$user->name}";
        // $messages["show"] = "On behalf of the entire company I wish you a very happy birthday and send you my best wishes for much happiness in your life.";
          
        // $user->notify(new Postnotification($messages));
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user(); 
        $data = $request->validate([ 
            'title' => 'required|nullable', 
            'content' => 'required|nullable', 
        ]); 
        $data['user_id'] = $user->id; 
        Post::create($data);
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
 
     public function show(Post $post)
     {
        return view('posts.show',compact('post'));
     }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $user = Auth::user();
       $data= $request->validate([
            'title' => 'required|nullable', 
            'content' => 'required|nullable', 
        ]);
        $data['user_id'] = $user->id;
        $post->update($data);
        return redirect()->route('posts.index',compact('post'))->with('success', 'Post updated successfully.');

    }
    /**
     * send notification
     */
    // public function sendNotification()
    // {
    //     $user = User::find(1); // Replace with the user you want to notify
    //     $user->notify(new PostNotification());
    // }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
