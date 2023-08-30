<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Notifications\PostNotification;
use Illuminate\Http\Request;
use Notification;

class NotificationController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index()
    {
        return view('posts.index');
    }
    
    // public function sendPostNotification(Request $request) {
    //     $request->validate([
    //         'post_id'=>'required|exists:post,id',
    //     ]);
 
    //     $user = auth()->user();
 
    //     $post = Post::find($request->post_id)->first();
 
    //     $post['buttonText'] = 'View Post';
    //     $post['postUrl'] = route('posts.show');
    //     $post['thanks'] = 'Your thank you message';
  
    //     $user->notify(new PostNotification($post));
   
    //     dd($post);
    // }
}
