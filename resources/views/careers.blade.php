@push('title')
    <title>Clean Hygiene : Careers</title>
@endpush
@extends('common.main')
@section('main-section')
    <div class="wrapper">
        <div class="intro-hero-section">
            <div class="page-title-section">
                <h1>Careers</h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Careers</li>
                </ol>
            </div>
        </div>

        <div class="contactus-div pr-80 pl-80 pt-90 pb-90">
            <div class="row-100 dis-flex gp-25">
                <div class="col-12 dis-flex flex-direction-column gp-60">
                    <div class="heading-section">
                        <h4 class="sub-heading">Submit your details to become a trusted service provider with CleanHygiene.
                        </h4>
                        <h1 class="main-heading">Join Our Network of Cleaning Service Professionals</h1>
                    </div>
                    <div class="contact-form dis-flex flex-direction-column gp-25">
                        @if (Session::has('success'))
                            <div class="message success">
                                Thank You for Your Interest! Your application has been successfully submitted. Our team
                                will review your details and get in touch with you.
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul style="margin: 0;list-style: none;">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('submit.career') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h2 class="contact-form-sub-heading">Basic Details</h2>
                            {{-- <textarea name="message" id="" cols="30" rows="10" placeholder="Type your query......" required></textarea> --}}
                            <div class="dis-flex gp-15 mt-25 mb-25">
                                <input type="text" name="fullName" id="" value="{{ old('fullName') }}"
                                    placeholder="Full Name" />
                            </div>
                            <div class="dis-flex gp-15 mt-25 mb-25">
                                <input type="text" name="contact" id="" value="{{ old('contact') }}"
                                    placeholder="Contact Number" />
                                <input type="text" name="email" id="" value="{{ old('email') }}"
                                    placeholder="Email Address" />
                            </div>
                            <textarea name="currentAddress" id="" cols="30" rows="10" placeholder="Current Address">{{ old('currentAddress') }}</textarea>
                            <h2 class="contact-form-sub-heading">Work Experience</h2>
                            <div class="dis-flex gp-15 mt-25 mb-25">
                                <input type="number" name="workExperience" id=""
                                    value="{{ old('workExperience') }}" placeholder="Total Work Experience" />
                            </div>
                            <div class="dis-flex gp-15 mt-25 mb-25">
                                <input type="text" name="previousJob" id="" value="{{ old('previousJob') }}"
                                    placeholder="Previous Job Role (if any)" />
                                <input type="text" name="previousEmployer" id=""
                                    value="{{ old('previousEmployer') }}" placeholder="Previous Employer Name (if any)" />
                            </div>
                            <div class="dis-flex gp-15 mt-25 mb-25">
                                <input type="text" name="references" id="" value="{{ old('references') }}"
                                    placeholder="Reference (if any)" />
                            </div>
                            <h2 class="contact-form-sub-heading">Skills And Expertise</h2>
                            <div class="dis-flex gp-15 mt-25 mb-25">
                                <select name="preferedCleaningType" id="">
                                    <option value="">----------Prefered Cleaning Type----------</option>
                                    <option value="Home Cleaning"
                                        {{ old('preferedCleaningType') == 'Home Cleaning' ? 'selected' : '' }}>Home
                                        Cleaning</option>
                                    <option value="Office Cleaning"
                                        {{ old('preferedCleaningType') == 'Office Cleaning' ? 'selected' : '' }}>Office
                                        Cleaning
                                    </option>
                                    <option value="Specialised Cleaning"
                                        {{ old('preferedCleaningType') == 'Specialised Cleaning' ? 'selected' : '' }}>
                                        Specialised
                                        Cleaning
                                    </option>
                                </select>
                            </div>
                            <div class="dis-flex gp-15 mt-25 mb-25">
                                <select name="preferedWorkType" id="">
                                    <option value="">----------Prefered Work Type----------</option>
                                    <option value="Full Time"
                                        {{ old('preferedWorkType') == 'Full Time' ? 'selected' : '' }}>Full Time
                                    </option>
                                    <option value="Part Time"
                                        {{ old('preferedWorkType') == 'Part Time' ? 'selected' : '' }}>Part Time
                                    </option>
                                    <option value="Freelance"
                                        {{ old('preferedWorkType') == 'Freelance' ? 'selected' : '' }}>Freelance
                                    </option>
                                </select>
                                <input type="text" name="preferedWorkLocation" id=""
                                    value="{{ old('preferedWorkLocation') }}" placeholder="Prefered Work Location" />
                            </div>
                            <div class="dis-flex gp-15 mt-25 mb-25">
                                <input type="text" name="toolsExpertise" id=""
                                    value="{{ old('toolsExpertise') }}"
                                    placeholder="Tools Expertise eg.Pressure Washers, Industrial Vacuums" />
                            </div>
                            <div class="dis-flex gp-15 mt-25 mb-25">
                                <select name="shiftPreference" id="">
                                    <option value="">----------Shift Preference----------</option>
                                    <option value="Morning" {{ old('shiftPreference') == 'Morning' ? 'selected' : '' }}>
                                        Morning</option>
                                    <option value="Evening" {{ old('shiftPreference') == 'Evening' ? 'selected' : '' }}>
                                        Evening</option>
                                    <option value="Flexible" {{ old('shiftPreference') == 'Flexible' ? 'selected' : '' }}>
                                        Flexible</option>
                                </select>
                            </div>
                            <h2 class="contact-form-sub-heading">Upload Identity Proof</h2>
                            <div class="dis-flex gp-15 mt-25 mb-25">
                                <input type="file" name="identityProof" id="" />
                            </div>
                            <h2 class="contact-form-sub-heading">Declaration</h2>
                            <div class="checkbox-container">
                                <input type="checkbox" id="declaration" name="declaration" value="1">
                                <label class="declaration-text" for="declaration">
                                    I hereby declare that the information provided is true to the best of my knowledge.
                                </label>
                            </div>

                            <button type="submit" class="bt-yellow">Send Message</button>
                        </form>
                    </div>
                </div>
                {{-- <div class="col-6 contact-form dis-flex flex-direction-column gp-25">
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
                </div> --}}
            </div>
        </div>
    </div>
@endsection
