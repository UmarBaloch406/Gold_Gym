<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
public function contact()
{
    return view('Contact');
}

    public function submit(Request $req)
    {
        // Validate the form data
        $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        $contact = new Contact();
        $contact->name = $req->name;
        $contact->email =$req->email;
        $contact->subject =$req->subject;
        $contact->message =$req->message;
        $contact->save();

        return redirect('contact')->with('success', 'Your message has been sent successfully!');
    }
}

