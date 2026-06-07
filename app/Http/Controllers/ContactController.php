<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function show() {
        return view('contact');
    }

    public function submit(Request $request) {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|string|max:20',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required',
        ]);

        $recaptchaResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => config('services.recaptcha.secret_key'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ])->json();

        if (! ($recaptchaResponse['success'] ?? false)) {
            return back()->withErrors(['g-recaptcha-response' => 'Please complete the reCAPTCHA.'])->withInput();
        }

        $contactData = $request->only(['name', 'email', 'phone', 'message']);

        Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactMail($contactData));

        return back()->with('success', 'Thank you! Your message has been sent.');
    }
}
