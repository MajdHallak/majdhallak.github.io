<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;


class PortfolioController extends Controller {
    public function index() {
        return view('portfolio.index');
    }

    public function showContactForm() {
        return view('email.contact');
    }

    public function submitContactForm(Request $request) {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('majdhallak90@gmail.com')->send(new ContactMail($data));

        Session::flash('message', 'Thank you for your email');

        return redirect('/');
    }
}
