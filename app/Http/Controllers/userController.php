<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class userController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
}
