@push('title')
    <title>Clean Hygiene : Services</title>
@endpush
@extends('common.main')
@section('main-section')
    <div class="wrapper">
        <!--------Intro--------->
        <div class="intro-hero-section">
            <div class="page-title-section">
                <h1>Services</h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Services</li>
                </ol>
            </div>
        </div>

        <!----------Choose Service DIV------------>
        <div class="service-plans-section pr-80 pl-80 pt-90 pb-90">
            <div class="row-100">
                <div class="main-heading-section mb-80">
                    <img src="/img/data-cleaning 1.png" alt="">
                    <h1 class="main-heading">No Extra Hidden Charges!<br /> Choose Your Plan.</h1>
                    <p class="sub-heading">Pricing Package</p>
                </div>
            </div>
            <div class="row-100 dis-flex gp-25">
                <div class="col-4">
                    <div class="service-charges-card">
                        <div class="service-title">
                            <h3>Home Cleaning</h3>
                        </div>
                        <div class="service-icon">
                            <img src="/img/house.png" alt="">
                        </div>
                        <div class="service-type-toggle-buttons">
                            <button type="button" class="btn-service-regular">Regular</button>
                            <button type="button" class="btn-service-premium">Premium</button>
                        </div>
                        <div class="service-price-details">
                            <h1>Rs. 4499</h1>
                            <a href="#">Click for details</a>
                        </div>
                        <button type="button" class="bt-yellow">Book Now</button>
                    </div>
                </div>
                <div class="col-4">
                    <div class="service-charges-card">
                        <div class="service-title">
                            <h3>Office Cleaning</h3>
                        </div>
                        <div class="service-icon">
                            <img src="/img/skyscrapers.png" alt="">
                        </div>
                        <div class="service-type-toggle-buttons">
                            <button type="button" class="btn-service-regular">Regular</button>
                            <button type="button" class="btn-service-premium">Premium</button>
                        </div>
                        <div class="service-price-details">
                            <h1>Rs. 4499</h1>
                            <a href="#">Click for details</a>
                        </div>
                        <button type="button" class="bt-yellow">Book Now</button>
                    </div>
                </div>
                <div class="col-4">
                    <div class="service-charges-card">
                        <div class="service-title">
                            <h3>Specialised Cleaning</h3>
                        </div>
                        <div class="service-icon">
                            <img src="/img/badge (2).png" alt="">
                        </div>
                        <div class="service-type-toggle-buttons">
                            <button type="button" class="btn-service-regular">Regular</button>
                            <button type="button" class="btn-service-premium">Premium</button>
                        </div>
                        <div class="service-price-details">
                            <h1>Rs. 4499</h1>
                            <a href="#">Click for details</a>
                        </div>
                        <button type="button" class="bt-yellow">Book Now</button>
                    </div>
                </div>
            </div>
        </div>


        <!---------Insights DIV----------------->
        <div class="insights-div pl-80 pr-80 pt-90 pb-90" style="background: linear-gradient(to right,#279E64,#2F6B4E)">
            <div class="row-100 dis-flex gp-25">
                <div class="col-3">
                    <div class="single-stat">
                        <div class="stat-img">
                            <img src="/img/cleaner 1.png" alt="">
                        </div>
                        <h2>5840</h2>
                        <p>Cleaning Staff</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="single-stat">
                        <div class="stat-img">
                            <img src="/img/hair-spray.png" alt="">
                        </div>
                        <h2>3140</h2>
                        <p>Project Completed</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="single-stat">
                        <div class="stat-img">
                            <img src="/img/thumbs-up 1.png" alt="">
                        </div>
                        <h2>2260</h2>
                        <p>Satisfied Client</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="single-stat">
                        <div class="stat-img">
                            <img src="/img/medal.png" alt="">
                        </div>
                        <h2>2365</h2>
                        <p>Hours Completed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
