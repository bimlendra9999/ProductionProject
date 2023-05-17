<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class UserProfileController extends Controller
{
    public function index(){
        return view('front.profile');
    }

    public function profileUpdate(Request $request){
        //validation rules

        $request->validate([
            'name' =>'required|min:4|string|max:255',
            'email'=>'required|email|string|max:255',
            'phone'=>'required',
        ]);
        $user =Auth::user();

        $imageName = Carbon::now()->timestamp. '.' . $request->image->extension();
        $request->image->move(public_path('profiles'), $imageName);
        $user->profile_photo_path = $imageName;

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->save();
        return back()->with('success','Your Profile has been Updated Successfully');
    }
}
