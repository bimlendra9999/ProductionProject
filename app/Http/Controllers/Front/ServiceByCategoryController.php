<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//import
use App\Models\ServiceCategory;

class ServiceByCategoryController extends Controller
{
    public function index($category_slug){
        $scategory = ServiceCategory::where('slug',$category_slug)->first();
        return view('front.servicebycategory',compact('scategory'));
    }
}
