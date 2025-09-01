<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'nullable|string|max:255',
            'email'   => 'nullable|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'message' => 'nullable|string',
        ]);

        $contact = ContactUs::create($request->only(['name', 'email', 'phone', 'message']));

        return response()->json([
            'success' => true,
            'message' => 'Contact request submitted successfully.',
            'data'    => $contact
        ], 201);
    }
    public function allContact()
    {

        $contacts = ContactUs::latest()->get();

        return view('pages.contacts.all-contacts', compact('contacts'));
    }

    public function view(ContactUs $contact)
    {
        return view('pages.contacts.view', compact('contact'));
    }
}
