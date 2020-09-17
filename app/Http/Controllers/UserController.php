<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($name)
    {
        return view('user', ['name' => $name]);
    }
}
