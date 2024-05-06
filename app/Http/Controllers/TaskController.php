<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function show(){

        $users=User::all();

        return view('laravel-examples/task',
            ['users'=>$users]);
    }

   
}
