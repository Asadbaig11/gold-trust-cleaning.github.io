<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    public function SendMail(Request $request) 
    {
        // $validator = Validator::make($request->all(), [
        //     'email' => 'required|email|unique'
        // ]);

        // if ($validator->fails()) {
        //     return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
        // }  

        $name = $request->all()['name'];
        $email = $request->all()['email'];
        $phone = $request->all()['phone'];
        $message = $request->all()['message'];
            

        if ($email) {
            Mail::to($email)->send(new ContactMail($name, $email, $phone, $message));
            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "Email Sent"
                ], 
                200
            );
        }
    }
}
