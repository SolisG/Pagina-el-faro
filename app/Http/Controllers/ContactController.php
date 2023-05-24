<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function getForm()
    {
        return view('contact.form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::create($validatedData);

        // Flash a success message to the session
        $request->session()->flash('success', 'Thank you for your message!');

        // Redirect back to the home page
        return redirect('/');
    }
}
