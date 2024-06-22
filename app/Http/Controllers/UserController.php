<?php

namespace App\Http\Controllers;

use App\User; // Ensure to import the User model
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

   public function create()
   {
       return view('users.create', compact('users'));
   }
   
}


