<?php
namespace App\Http\Controllers;
use App\Models\Tweet;
use App\Events\TestNotification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\PostCreatedNotification;

class TweetController{
public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'author' => 'required|string|max:255',
        'title' => 'required|string|max:255',
    ]);

    // Create the post
    $tweet = Tweet::create([
        'author' => $request->input('author'),
        'title' => $request->input('title'),
    ]);

    // Dispatch the event with the post data
    event(new TestNotification([
        'author' => $tweet->author,
        'title' => $tweet->title,
    ]));

    $user = User::find(Auth::id());

    $user->notify(new PostCreatedNotification($tweet));

    // Redirect with success message
    return redirect()->back()->with('success', 'Post created successfully!');
}}