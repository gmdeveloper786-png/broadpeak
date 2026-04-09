<?php

namespace App\Http\Controllers;

use App\Mail\ContactSubmissionMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        $to = config('mail.contact_to');

        Mail::to($to)->send(new ContactSubmissionMail('Contact form', $validated));

        return redirect()->back()->with('form_success', 'Thank you — your message has been sent.');
    }

    public function quote(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'message' => 'nullable|string|max:5000',
        ]);

        $to = config('mail.contact_to');

        Mail::to($to)->send(new ContactSubmissionMail('Request quote', $validated));

        return redirect()->back()->with('form_success', 'Thank you — your quote request has been sent.');
    }
}
