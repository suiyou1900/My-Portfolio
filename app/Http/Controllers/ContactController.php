<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use App\Http\Requests\MailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(MailRequest $request)
    {
        Mail::to('suiyouKSY108@gmail.com')->send(new ContactMail($request->name,$request->email,$request->body));
        return response()->json('success');

    }
}
