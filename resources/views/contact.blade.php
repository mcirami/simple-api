@extends('layouts.app')

@section('content')

    <section class="page-heading-section contact-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="page-heading">
                        <h1>Contact Us</h1>
                        <p>Ready to grow? Let’s Connect </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--section2-->
    <section class="cont_sec2">
        <div class="container">
            <div class="row">
                <div class="center-box-col" data-aos="fade-up" data-aos-duration="1000">
                    <div class="border-box">
                        <img class="m-auto" src="{{ asset('images/rock-phase-logo-color.png') }}" title="Contact Us" alt="Contact Us">
                        <h3>
                            <a href="mailto:admin@rockphase.com">admin@rockphase.com</a>
                        </h3>
                    </div>
                    <p>We are here to serve you! Any time you feel the need to increase your business through marketing efforts DO NOT hesitate to reach out! Let us provide you with our ROCK SOLID marketing services!</p>
                </div>
            </div>
        </div>
    </section>
    <!--section2-->

@endsection
