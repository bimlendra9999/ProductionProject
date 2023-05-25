<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Subscriber;

class SubscriberController extends Controller
{
    public function index(){
        $subscribers = Subscriber::paginate(5);
        return view('admin.subscriber.index',compact('subscribers'));
    }

    public function destroy($id){
        $subscriber = Subscriber::find($id);
        $subscriber->delete();
        return redirect()->route('subscription')->with('success', 'Subscription has been deleted successfully.');
    }
}
