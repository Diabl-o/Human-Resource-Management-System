<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Bank_detail;
use App\Models\Emergency_contact;
use App\Models\Office_hour;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserEditController extends Controller
{
    public function ShowUser(Request $request){


        $daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

        $id = $request->input('id');

        $user=User::with('position')->with('officeHours')->with('temporaryAddress')->with('permanentAddress')->find($id);

        return view('laravel-examples.user-edit', [
            'data' => $user,
            'daysOfWeek' => $daysOfWeek,
        ]);
    }

    public function UpdateUserImage(Request $request){

        $id = $request->input('id');

        $user=User::find($id);
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the validation rules as needed
        ]);

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
        return redirect()->route('user-edit',['id' => $user->id])->with('success', 'Profile Picture changed successfully!');
        
        
    }

    public function UpdateUser(Request $request){

        $id = $request->input('id');

        $user=User::with('position')->find($id);

        $attributes = request()->validate([
            'first_name' => ['required', 'max:50','alpha'],
            'last_name' => ['required', 'max:50','alpha'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users')->ignore($user->id)],
            'phone'     => ['required','digits:10','numeric'],
            'phone2' => ['nullable','digits:10','numeric'],
            'date_of_birth' => ['date'],
            'blood_group' => ['in:1,2,3,4,5,6,7,8'],
        ]);

        User::where('id',$user->id)
        ->update([
            'first_name'    => $attributes['first_name'],
            'last_name'    => $attributes['last_name'],
            'email' => $attributes['email'],
            'phone1'     => $attributes['phone'],
            'phone2'     => $attributes['phone2'],
            'date_of_birth'     => $attributes['date_of_birth'],
            'blood_group_id'     => $attributes['blood_group'],

        ]);

        return redirect()->route('user-edit',['id' => $user->id])->with('success', 'Profile Updated successfully!');

    }


    public function UpdateUserTemp(Request $request){

        $id = $request->input('id');

        $user=User::with('position')->find($id);

        $validatedData = $request->validate([
            'district' => 'required|string|max:80',
            'city' => 'required|string|max:80',
            'tole' => 'required|string|max:50',
            'ward_no' => 'required|string|max:20',
            'zipcode' => 'required|string|max:20',
            'zone' => 'required|string|max:80',
        ]);

        $address = Address::firstOrNew(['u_id' => $user->id, 'type' => 'Temporary']);

        $address->district =$validatedData['district'];
        $address->city = $validatedData['city'];
        $address->tole = $validatedData['tole'];
        $address->ward_no = $validatedData['ward_no'];
        $address->zipcode =$validatedData['zipcode'];
        $address->zone = $validatedData['zone'];
        $address->type = 'Temporary';

    // Save the updated address
        $address->save();

        return redirect()->route('user-edit',['id' => $user->id])->with('success', 'Profile Updated successfully!');

    }

    public function UpdateUserPer(Request $request){

        $id = $request->input('id');

        $user=User::with('position')->find($id);

        $validatedData = $request->validate([
            'district' => 'required|string|max:80',
            'city' => 'required|string|max:80',
            'tole' => 'required|string|max:50',
            'ward_no' => 'required|string|max:20',
            'zipcode' => 'required|string|max:20',
            'zone' => 'required|string|max:80',
        ]);

        $address = Address::firstOrNew(['u_id' => $user->id, 'type' => 'Permanent']);

        $address->district =$validatedData['district'];
        $address->city = $validatedData['city'];
        $address->tole = $validatedData['tole'];
        $address->ward_no = $validatedData['ward_no'];
        $address->zipcode =$validatedData['zipcode'];
        $address->zone = $validatedData['zone'];
        $address->type = 'Permanent';

    // Save the updated address
        $address->save();

        return redirect()->route('user-edit',['id' => $user->id])->with('success', 'Profile Updated successfully!');

    }


    public function UpdateUserEm(Request $request){

        $id = $request->input('id');

        $user=User::with('position')->find($id);

        $Validated = $request->validate([
            'e_name'=>['required', 'max:50','regex:/^[a-zA-Z]+(\s{0,2})[a-zA-Z]+$/'],
            'e_phone'=>['required','digits:10','numeric'],
            'relation'=>['required','max:80','regex:/^[a-zA-Z ]+$/'],

        ]);

        $emergency=Emergency_contact::firstOrNew(['u_id' => $user->id]);

        $emergency->name=$Validated['e_name'];
        $emergency->phone=$Validated['e_phone'];
        $emergency->relation=$Validated['relation'];


        $emergency->save();

        return redirect()->route('user-edit',['id' => $user->id])->with('success', 'Profile Updated successfully!');

    }


    public function UpdateUserEmadd(Request $request){

        $id = $request->input('id');
        $user=User::with('position')->find($id);



        $eid=$request->input('e_id');

        if($eid){

       

        $validatedData = $request->validate([
            'district' => 'required|string|max:80',
            'city' => 'required|string|max:80',
            'tole' => 'required|string|max:50',
            'ward_no' => 'required|string|max:20',
            'zipcode' => 'required|string|max:20',
            'zone' => 'required|string|max:80',
        ]);

        $address = Address::firstOrNew(['e_id' => $eid, 'type' => 'Permanent']);

        $address->district =$validatedData['district'];
        $address->city = $validatedData['city'];
        $address->tole = $validatedData['tole'];
        $address->ward_no = $validatedData['ward_no'];
        $address->zipcode =$validatedData['zipcode'];
        $address->zone = $validatedData['zone'];
        $address->type = 'Permanent';

    // Save the updated address
        $address->save();

        return redirect()->route('user-edit',['id' => $user->id])->with('success', 'Profile Updated successfully!');

    }
    else{
        return redirect()->route('user-edit',['id' => $user->id])->with('danger', 'First update emergency contact details!!!');
    }



    }


    public function UpdateUserBank(Request $request){

        $id = $request->input('id');
        $user=User::with('position')->find($id);

        $Validated = $request->validate([
            'bank_name'=>['required', 'max:100','regex:/^[a-zA-Z ]+$/'],
            'account_name'=>['required','max:100','regex:/^[a-zA-Z ]+$/'],
            'account_number'=>['required','max:255','regex:/^[0-9a-zA-Z]+$/'],

        ]);

        $bank=Bank_detail::firstOrNew(['u_id' => $user->id]);

        $bank->bank_name=$Validated['bank_name'];
        $bank->account_name=$Validated['account_name'];
        $bank->account_number=$Validated['account_number'];

        $bank->save();


        return redirect()->route('user-edit',['id' => $user->id])->with('success', 'Profile Updated successfully!');





    }


    public function UpdateUserPass(Request $request){

        $id = $request->input('id');
        $user=User::with('position')->find($id);

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
                return redirect()->route('user-edit', ['id' => $user->id])
                    ->with('success', 'Password updated successfully!');
            } else {
                return redirect()->route('user-edit', ['id' => $user->id])
                    ->with('danger', 'Failed to update password. Please try again.');
            }


        }
        else{

            
                return redirect()->route('user-edit', ['id' => $user->id])
                    ->with('danger', 'Incorrect current password. Please try again.');
            
        }



    }


    public function UpdateUserOffice(Request $request){

        $id = $request->input('id');
        $user=User::with('position')->find($id);

        $daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

        $Validated=$request->validate([
           
            'position'=>'required|in:1,2,3,4',
            'salary' =>'required|decimal:0,2'
        ]);


        User::where('id',$user->id)
        ->update([
            'position_id'=>$Validated['position'],
            'salary' =>$Validated['salary']

        ]);




        foreach ($daysOfWeek as $day) {
            $validatedData = $request->validate([
                'office_hours_start.'.$day => 'nullable|date_format:H:i',
                'office_hours_end.'.$day => 'nullable|after:office_hours_start.'.$day,
                'cbox.'.$day => 'boolean',
            ]);

            if(isset($validatedData['cbox'][$day])){
                $officeHour = Office_hour::updateOrCreate(
                    ['u_id' => $user->id, 'day_of_week' => $day],
                    [
                        'u_id' => $user->id,
                        'day_of_week' => $day,
                        'start_time' => null,
                        'end_time' => null,
                        'closed'=>  1,
                    ]
                );

            }
            else{
            $officeHour = Office_hour::updateOrCreate(
                ['u_id' => $user->id, 'day_of_week' => $day],
                [
                    'u_id' => $user->id,
                    'day_of_week' => $day,
                    'start_time' => $validatedData['office_hours_start'][$day],
                    'end_time' => $validatedData['office_hours_end'][$day],
                    'closed'=> 0,
                ]
            );
            }
        }

        return redirect()->route('user-edit', ['id' => $user->id])
        ->with('success', 'Profile updated successfully!');
    

    }



}


