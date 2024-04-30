<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class AddUserController extends Controller
{
    public function showPage(){


        return view('laravel-examples.add-user');
   }

   public function adduser(Request $request){

        $attributes=request()->validate([
            'first_name'=>['required','max:50','alpha'],
            'last_name'=>['required','max:50','alpha'],
            'phone'=>['required','digits:10','numeric'],
            'email'=>['required', 'email', 'max:50', Rule::unique('users', 'email')],
            'phone2'=>['nullable','digits:10','numeric'],
            'blood_group'=>['in:1,2,3,4,5,6,7,8'],
            'password' => ['required', Password::min(8)
            ->mixedCase()
            ->numbers()
            ->symbols()
            ,],

        ]);

        $attributes['password'] = bcrypt($attributes['password'] );
        
        
        $user = new User([
            'first_name' => $attributes['first_name'],
            'last_name' => $attributes['last_name'],
            'phone1' => $attributes['phone'],
            'email' => $attributes['email'],
            'phone2' => $attributes['phone2'],
            'blood_group_id' => $attributes['blood_group'],
            'password' => $attributes['password'],
            'position_id'=>'4',
        ]);
        
        // Save the user to the database
        $user->save();
                

        return redirect()->back()->with('success', 'User Added successfully!');

   }



}
