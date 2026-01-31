<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{


public function index()
    {
        $enquiries = Contact::latest()->paginate(10); // or paginate(10)
        return view('admin.pages.contact', compact('enquiries'));
    }
    
public function submit(Request $request)
    {
        // dd($request->all());
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|regex:/^[6-9][0-9]{9}$/',
            'message' => 'required|string',
        ]);

        // Optionally save to database
        Contact::create($validated);

        // Optionally send email (example)
        // Mail::to('your-email@example.com')->send(new ContactMail($validated));

        // return back()->with('success', 'Your message has been sent successfully!');
        return response()->json(['message' => 'Our team will contact you soon!']);
    }

}
