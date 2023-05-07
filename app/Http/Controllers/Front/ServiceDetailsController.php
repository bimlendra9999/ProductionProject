<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Service;

class ServiceDetailsController extends Controller
{
    public function index($service_slug){
        $service = Service::where('slug',$service_slug)->first();
        $r_service = Service::where('service_category_id',$service->service_category_id)->where('slug','!=',$service_slug)->inRandomOrder()->first();
        // $servicedetails = Service::where('slug',$service_slug)->first();
        return view('front.servicedetails',compact('service','r_service'));
    }
}
