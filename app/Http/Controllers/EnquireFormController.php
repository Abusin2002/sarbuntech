<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquire;
class EnquireFormController extends Controller
{
    

public function index()
    {
        $enquiries = Enquire::latest()->paginate(10); // or paginate(10)
        return view('admin.pages.enquire', compact('enquiries'));
    }

public function submit(Request $request)
    {
        // dd($request->all());
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|regex:/^[6-9][0-9]{9}$/',
            'subject' => 'required|string',
            'service' => 'required|string',
            'message' => 'required|string',
        ]);

        // Optionally save to database
        Enquire::create($validated);

        // Optionally send email (example)
        // Mail::to('your-email@example.com')->send(new ContactMail($validated));

        // return back()->with('success', 'Your message has been sent successfully!');
        return response()->json(['message' => 'Your message has been sent successfully!']);
    }
}
