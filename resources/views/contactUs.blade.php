@push('title')
    <title>Clean Hygiene : Contact Us</title>
@endpush
@extends('common.main')
@section('main-section')
    <div class="wrapper">
        <div class="intro-hero-section">
            <div class="page-title-section">
                <h1>Contact Us</h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Contact Us</li>
                </ol>
            </div>
        </div>

        <div class="contactus-div pr-80 pl-80 pt-90 pb-90">
            <div class="row-100 dis-flex gp-25">
                <div class="col-6 dis-flex flex-direction-column gp-60">
                    <div class="heading-section">
                        <h4 class="sub-heading">Contact Information</h4>
                        <h1 class="main-heading">Have Any Question? Contact With Us</h1>
                    </div>
                    <div class="contact-details dis-flex flex-direction-column gp-25">
                        <h3> <span class="mr-15"><i class="fa-solid fa-phone"></i></span>1 800 222 4357</h3>
                        <h3> <span class="mr-15"><i class="fa-solid fa-location-dot"></i></span>25 Palmal Stree, London,
                            England</h3>
                        <h3> <span class="mr-15"><i class="fa-solid fa-at"></i></span>webtend24@gmail.com</h3>
                    </div>
                </div>
                <div class="col-6 contact-form dis-flex flex-direction-column gp-25">
                    <h3>Get In Touch</h3>
                    @if (Session::has('success'))
                        <div class="message success">
                            Thanks for writting us! we will get back to you shortly.
                        </div>
                    @endif
                    <form action="/contactUsPost" method="post">
                        @csrf
                        <textarea name="message" id="" cols="30" rows="10" placeholder="Type your query......" required></textarea>
                        <div class="dis-flex gp-15 mt-25 mb-25">
                            <input type="text" name="fullName" id="" placeholder="Full Name" required />
                        </div>
                        <div class="dis-flex gp-15 mt-25 mb-25">
                            <input type="text" name="contact" id="" placeholder="Contact Number" required />
                            <input type="text" name="email" id="" placeholder="Email Address" required />
                        </div>
                        <div class="dis-flex gp-15 mt-25 mb-25">
                            <input type="text" name="company" id="" placeholder="Company (optional)" />
                            <input type="text" name="gst" id="" placeholder="GST (optional)" />
                        </div>
                        <div class="dis-flex gp-15 mt-25 mb-25">
                            <input type="text" name="subject" id="" placeholder="Subject" required />
                        </div>
                        <button type="submit" class="bt-yellow">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
