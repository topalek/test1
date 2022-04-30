<?php

namespace App\Http\Controllers;

use App\Http\Requests\CallbackRequest;
use App\Http\Requests\SubscribeRequest;
use App\Mail\CallbackMail;
use App\Mail\SubscribeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function subscribe(SubscribeRequest $request)
    {
        // register subscriber
        $email = $request->subs_email;
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new SubscribeMail($email));
        return redirect()->route('home')->with('status','You successfully subscribed to newsletter');
    }

    public function callback(CallbackRequest $request)
    {
        $userInfo = [...$request->only('name','email','phone','message')];
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new CallbackMail($userInfo));
        return redirect()->route('home')->with('status','We call you back');
    }
}
