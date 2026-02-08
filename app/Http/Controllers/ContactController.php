<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function show() {
        return view('contact');
    }

    public function submit(Request $request) {
        $contactData = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|string|max:20',
            'message' => 'required|string',
        ]);


        // Send the email to the admin
        Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactMail($contactData));

        return back()->with('success', 'Thank you! Your message has been sent.');
    }
}
