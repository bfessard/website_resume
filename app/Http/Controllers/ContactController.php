<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getForm()
    {

        return view('index');
    }

    public function PostForm(ContactRequest $request)
    {
        mail::send('email_contact',$request->all(),function($message)
        {
            $message->to('baptistefessard@gmail.com')->subject('Contact');
        });

        return back()->with('success', 'Votre email a bien été envoyé');





    }
}
