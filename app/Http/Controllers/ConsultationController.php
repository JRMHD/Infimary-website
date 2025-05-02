<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConsultationMail;

class ConsultationController extends Controller
{
    /**
     * Store a newly created consultation request in the database
     * and send emails to the owner and the client.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'reason' => 'required',
            'preferred_date' => 'required|date',
        ]);

        $consultation = Consultation::create($validatedData);

        // Send email to the owner
        Mail::to('stjamesinfirmarybusia@gmail.com')->send(new ConsultationMail($consultation));

        // Send email to the person who submitted the form
        Mail::to($consultation->email)->send(new ConsultationMail($consultation, true));

        return redirect()->back()->with('success', 'Thank you for your consultation request. We will get back to you soon.');
    }
}