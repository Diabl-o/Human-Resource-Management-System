<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\View;

class InfoUserController extends Controller
{

    public function create()
    {
        return view('laravel-examples/user-profile');
    }

    public function store(Request $request)
    {

        $attributes = request()->validate([
            'first_name' => ['required', 'max:50','alpha'],
            'last_name' => ['required', 'max:50','alpha'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users')->ignore(Auth::user()->id)],
            'phone'     => ['nullable','digits:10','numeric'],
            
        ]);
        if($request->get('email') != Auth::user()->email)
        {
            if(env('IS_DEMO') && Auth::user()->id == 1)
            {
                return redirect()->back()->withErrors(['msg2' => 'You are in a demo version, you can\'t change the email address.']);
                
            }
            
        }
        else{
            $attribute = request()->validate([
                'email' => ['required', 'email', 'max:50', Rule::unique('users')->ignore(Auth::user()->id)],
            ]);
        }
        
        
        $users = User::find(auth()->user()->id);
        $users->first_name = $attributes['first_name'];
        $users->last_name = $attributes['last_name'];
        $users->email = $attributes['email'];
        $users->phone1 = $attributes['phone'];
        $users->save();

        


        return redirect('/user-profile')->with('success','Profile updated successfully');
    }


    public function uploadImage(Request $request)
    {
        // Validate the incoming request to ensure it contains a file and is an image
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the validation rules as needed
        ]);

        // Retrieve the authenticated user
        $user = User::find(auth()->user()->id);

        // Get the uploaded image file
        $image = $request->file('image');

        // Read the image file contents
        $imageData = file_get_contents($image->path());

        // Get the image file type
        $imageType = $image->getClientOriginalExtension();

        // Update the user's image_blob and image_type fields with the uploaded image data
        $user->image_blob = $imageData;
        $user->image_type = $imageType;
        $user->save();

        // Optionally, you may want to redirect the user somewhere after saving the image
        return redirect()->back()->with('success', 'Profile Picture changed successfully!');
    }




}
