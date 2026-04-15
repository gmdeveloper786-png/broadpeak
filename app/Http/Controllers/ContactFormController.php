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
            'cv' => 'nullable|file|max:5120|mimes:pdf,doc,docx',
        ]);

        $attachmentPath = null;
        $attachmentOriginalName = null;
        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $attachmentPath = $file->getRealPath();
            $attachmentOriginalName = $file->getClientOriginalName();
        }

        $fields = collect($validated)->except('cv')->all();
        if ($attachmentOriginalName !== null) {
            $fields['cv'] = 'Attached: '.$attachmentOriginalName;
        }

        $to = config('mail.contact_to');

        Mail::to($to)->send(new ContactSubmissionMail(
            'Contact form',
            $fields,
            $attachmentPath,
            $attachmentOriginalName
        ));

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
