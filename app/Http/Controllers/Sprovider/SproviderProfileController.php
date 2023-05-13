<?php

namespace App\Http\Controllers\Sprovider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Import
use App\Models\ServiceProvider;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Auth;

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
}
