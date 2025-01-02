<?php

namespace App\Http\Controllers;

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
