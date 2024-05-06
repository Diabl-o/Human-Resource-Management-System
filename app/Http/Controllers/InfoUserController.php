<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Str;

class InfoUserController extends Controller
{

    public function create()
    {
        return view('laravel-examples/user-profile');
    }

    public function UpdateProfilePass(Request $request){

        $user = User::find(auth()->user()->id);
        

        $Validated = $request->validate([
            'password'=>['required', Password::min(8)
            ->mixedCase()
            ->numbers()
            ->symbols()
            ,],

            'new_password'=>['required', Password::min(8)
            ->mixedCase()
            ->numbers()
            ->symbols()
            ,],
            'confirm_password'=>['required','same:new_password', Password::min(8)
            ->mixedCase()
            ->numbers()
            ->symbols()
            ,],

        ]);


        if(password_verify($Validated['password'],$user->password)){
            $newhash = bcrypt($Validated['new_password'] );


            $user->password = $newhash;
            $user->setRememberToken(Str::random(60));
            
            if ($user->save()) {
                return redirect('/user-profile')->with('success','Password updated successfully');
            } else {
                return redirect('/user-profile')->with('danger', 'Failed to update password. Please try again.');
                
            }


        }
        else{

            return redirect('/user-profile')->with('danger', 'Incorrect current password. Please try again.');
                

            
                
            
        }



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
