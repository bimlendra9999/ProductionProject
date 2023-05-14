<?php

namespace App\Http\Controllers\Sprovider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Import
use App\Models\ServiceProvider;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class SproviderProfileController extends Controller
{
    public function index(){
        $sprovider = ServiceProvider::where('user_id',Auth::user()->id)->first();
        return view('sprovider.sproviderprofile',compact('sprovider'));
    }

    public function edit(){
        $sprovider = ServiceProvider::where('user_id',Auth::user()->id)->first();
        $scategories = ServiceCategory::all();
        return view('sprovider.sproviderprofileedit',compact('sprovider','scategories'));
    }

    public function update(Request $request, $id){
        $serviceprovider =ServiceProvider::where('user_id',Auth::user()->id)->first();


        $imageName = Carbon::now()->timestamp. '.' . $request->image->extension();
        $request->image->move(public_path('sproviders'), $imageName);
        $serviceprovider->image = $imageName;


        $serviceprovider->about = $request->about;
        $serviceprovider->city = $request->city;
        $serviceprovider->service_category_id = $request->service_category_id;
        $serviceprovider->service_locations = $request->service_locations;
        $serviceprovider->save();
        return redirect()->route('sprovider.edit_profile')->with('success', 'Your profile has been updated successfully');
    }
}
