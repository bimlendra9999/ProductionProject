<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ServiceCategory;

class ServiceCategoryController extends Controller
{
    public function index(){
        $scategories = ServiceCategory::all();
        return view('front.servicecategory',compact('scategories'));
    }

}
