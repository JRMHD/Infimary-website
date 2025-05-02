<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotification;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Store the form data in the database
        $contact = Contact::create($request->all());

        // Send email notification to the owner
        $toEmail = 'stjamesinfirmarybusia@gmail.com';
        Mail::to($toEmail)->send(new ContactNotification($contact));

        // Redirect back with success message
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
