<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Import
use App\Models\ServiceCategory;
use App\Models\Service;

class HomeController extends Controller
{
    public function index(){
        $scategories = ServiceCategory::inRandomOrder()->take(18)->get();
        $fservices = Service::Where('featured',1)->inRandomOrder()->take(8)->get();
        $fscategories = ServiceCategory::where('featured',1)->take(8)->get();
        $sid = ServiceCategory::whereIn('slug',['ac','tv','refrigarator','gayser','water-purifier'])->get()->pluck('id');
        $aservices = Service::whereIn('service_category_id',$sid)->inRandomOrder()->take(8)->get();
        return view('front.home',compact('scategories','fservices','fscategories','aservices'));
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $fservices = Service::where('name','LIKE','%'.$search_text.'%')->paginate(5);
        return view('front.searchhomeservices',compact('fservices'));
    }
}
