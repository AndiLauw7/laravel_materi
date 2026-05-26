<?php

namespace App\Http\Controllers;

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
}
