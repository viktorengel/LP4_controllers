<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        /* $notes = Notes::all(); */
        return view('user.index',[
            'users' => $users,
            /* 'notes' => $notes */
        ]);
    }

}
