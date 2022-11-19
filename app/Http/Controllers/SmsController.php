<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\rest\Client;

class SmsController extends Controller
{
    public function SmsView()
    {
        return view('sms.sms');
    }

    public function SendSms(Request $request)
    {
        // dd($request->mobile_number);
        try {

            $account_sid = env('TWILIO_SID');
            $account_auth_token = env('TWILIO_AUTH_TOKEN');
            $number = env('TWILIO_FROM');

            $client = new Client('AC3966f0bfe5bb0d9395c1fc75b7c3f907', 'a63b345fdf79059318b37e95680a3f6e');

            $client->messages->create('+92'.$request->mobile_number, [
                'from' => '+14013883644',
                'body' => $request->message
            ]);

            return 'Message Sent !';

        } catch(\Throwable $e) {
            return $e->getMessage();
        }
    }
}
