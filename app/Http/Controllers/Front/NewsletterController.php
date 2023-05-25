<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Subscriber;

class NewsletterController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);
        $subscribe = new Subscriber();
        $subscribe->name = $request->name;
        $subscribe->email = $request->email;
        $subscribe->save();
        return redirect()->route('user.dashboard')->with('success', 'Thanku you for your subscription.');
    }
}
