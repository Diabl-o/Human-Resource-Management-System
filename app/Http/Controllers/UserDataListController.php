<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UserDataListController extends Controller
{
   public function ShowUsers(Request $request){

    $user=User::with('position')->get();

        return view('laravel-examples.user-management',['data'=>$user]);
    }

    public function DeleteUsers(string $id){
        $users=user::find($id);
        $users->delete();

       return redirect()->route('user-management')->with('success1','User Deleted successfully');
    }

    


}
