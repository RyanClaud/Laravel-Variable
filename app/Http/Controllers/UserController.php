<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $title = "Welcome to Laravel";
        $users = ["John", "Jane", "Mark"];

        return view('home', compact('title', 'users'));
    }

    public function greet($name)
    {
        return "Hello {$name}, age 25";
    }

    public function greetWithAge(Request $request)
    {
        $name = $request->query('name');
        $age = $request->query('age');

        return "Hello {$name}, age {$age}";
    }
}