<?php

namespace YourVendor\ContactForm\Http\Controllers;

use App\Http\Controllers\Controller;
use YourVendor\ContactForm\Http\Requests\ContactFormRequest;
use YourVendor\ContactForm\Models\ContactSubmission;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function showForm()
    {
        return view('contactform::contact');
    }

    public function submitForm(ContactFormRequest $request)
    {
        ContactSubmission::create($request->all());

        return redirect()->route('contact.thankyou');
    }

    public function thankYou()
    {
        return view('contactform::thankyou');
    }

    public function listSubmissions()
    {
        $submissions = ContactSubmission::all();

        return view('contactform::admin.submissions', compact('submissions'));
    }
}
