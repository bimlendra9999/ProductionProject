<?php

namespace App\Http\Controllers\Sprovider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SproviderDashboardController extends Controller
{
    public function index(){
        return view('sprovider.dashboard');
    }
}
