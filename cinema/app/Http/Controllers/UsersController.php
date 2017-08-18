<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
      $user = User::orderBy('name','asc')->get();
      return view('users.index')->with('user',$user);
    }
}
