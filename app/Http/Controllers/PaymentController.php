<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Omnipay\Omnipay;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct() {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    //Handle PAyment Request
    public function pay(Request $request)
    {
        if (!Auth::check()) {
            // User is not logged in, redirect to the login page
            return redirect()->route('login');
        }
        try{
            $response = $this->gateway->purchase(array(
                'amount' => $request->amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error')
            ))->send();

            if($response->isRedirect()){
                $response->redirect();
            } else{
                return $response->getMessage();
            }
        } catch(\Throwable $th){
            //throw $th
            return $th->getMessage();
        }
    }

    public function success(Request $request)
    {
        if($request->input('paymentId') && $request->input('PayerID')){
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));

            $response = $transaction->send();

            if($response->isSuccessful()){
                $arr = $response->getData();

                $payment = new Payment();
                $payment->payment_id = $arr['id'];
                $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                $payment->payer_email = $arr['payer']['payer_info']['email'];
                $payment->amount = $arr['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY');
                $payment->payment_status = $arr['state'];
                $payment->save();
                return redirect()->back()->with('success','Thank you for your payment. Our team will contact you soon. Your Transaction id is : ' .$arr['id']);
            }
            else{
                return $response->getMessage();
            }
        } else{
            return "Sorry, Your Payment is declined!!!";
        }
    }
    public function error()
    {
        return "User Declined the payment";
    }
}
