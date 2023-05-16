<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Payment;

class PaymentControllerData extends Controller
{
    public function index(){
        $payments = Payment::paginate(5);
        return view('admin.payment.index', compact('payments'));
    }

    public function destroy($id){
        $payment = Payment::find($id);
        $payment->delete();
        return redirect()->route('payment.records')->with('success','Payment record has been deleted successfully');
    }
}
