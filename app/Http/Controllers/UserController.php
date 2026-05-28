<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('profile', [
            'name' => 'Syah',
            'age' => 20,
            'status' => 'Belajar Laravel'
        ]);
    }
    public function userPosts()
    {
        $user = User::find(1);
        foreach ($user->posts as $post) {
            echo $post->title . " - " . $post->content . "<br>";
        }
        // return dd($user->posts);
    }
}
