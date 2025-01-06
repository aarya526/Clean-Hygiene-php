<?php

namespace App\Http\Controllers;

use App\Models\CareerForm;
use App\Models\CustomerSupport;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {
        return view("index");
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function services()
    {
        return view('services');
    }

    public function careers()
    {
        return view('careers');
    }

    public function careerFormSubmit(Request $request)
    {

        //validate form data
        $validateData = $request->validate([
            'fullName' => 'required|string|max:255',
            'contact' => 'required|digits:10',
            'email' => 'required|email|max:255',
            'currentAddress' => 'required|string|max:255',
            'workExperience' => 'required|numeric',
            // 'previousJob' => 'required|string|max:255',
            // 'previousEmployer' => 'required|string|max:255',
            // 'references' => 'required|string|max:255',
            'preferedCleaningType' => 'required|string|max:255',
            'preferedWorkType' => 'required|string|max:255',
            'preferedWorkLocation' => 'required|string|max:255',
            'toolsExpertise' => 'required|string|max:255',
            'shiftPreference' => 'required|string|max:255',
            'identityProof' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'declaration' => 'accepted',
        ]);
        $career = new CareerForm();
        $career->fullName = $request->fullName;
        $career->contact = $request->contact;
        $career->email = $request->email;
        $career->currentAddress = $request->currentAddress;
        $career->workExperience = $request->workExperience;
        if ($request->has('previousJob')) {
            $career->previousJob = $request->previousJob;
        }
        if ($request->has('previousEmployer')) {
            $career->previousEmployer = $request->previousEmployer;
        }
        if ($request->has('references')) {
            $career->references = $request->references;
        }
        $career->preferedCleaningType = $request->preferedCleaningType;
        $career->preferedWorkType = $request->preferedWorkType;
        $career->preferedWorkLocation = $request->preferedWorkLocation;
        $career->toolsExpertise = $request->toolsExpertise;
        $career->shiftPreference = $request->shiftPreference;
        // Handle file upload for para image
        if ($request->hasFile('identityProof')) {
            $image = $request->file('identityProof');
            $imagePath = $image->store('cleaningServiceProfessional', 'public'); // Store in 'storage/app/public/cleaningServiceProfessional'
            $career->identityProofUrl = $imagePath;
        }
        $career->declarationCheck = $request->declaration;
        $career->createdOn = now();
        $career->save();
        return redirect('/careers')->with('success', 'Career Form Submitted Successfully!');
    }

    public function testimonials()
    {
        return view('testimonials');
    }

    public function getaQuote()
    {
        return view('quoteForm');
    }

    public function getaQuotePost(Request $request)
    {
        $quote = new CustomerSupport();
        $quote->type = "quote";
        $quote->subject = "Enquiry - Quotation Request";
        $quote->message = $request->message;
        $quote->fullName = $request->fullName;
        $quote->email = $request->email;
        $quote->contact = $request->contact;
        $quote->company = $request->company;
        $quote->gst = $request->gst;
        $quote->source = $request->source;
        $quote->category = $request->category;
        $quote->createdOn = now();
        $quote->save();
        return redirect('/getaQuote')->with('success', "Your Request has been submitted Successfully. Our Experts will contact you shortly!");
    }

    public function contactUs()
    {
        return view('contactUs');
    }

    public function contactUsPost(Request $request)
    {
        $contact = new CustomerSupport();
        $contact->type = "contactUs";
        $contact->fullName = $request->fullName;
        $contact->contact = $request->contact;
        $contact->email = $request->email;
        $contact->company = $request->company;
        $contact->gst = $request->gst;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->createdOn = now();
        $contact->save();
        return redirect('/contactUs')->with('success', 'Contact Us Request Created Successfully!');
    }


    public function blog()
    {
        return view('blog');
    }

    public function faq()
    {
        return view('faq');
    }
}
