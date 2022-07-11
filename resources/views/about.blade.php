@extends('layouts.app')

@section('content')

    <section class="page-heading-section about-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="page-heading">
                        <h1>About Us</h1>
                        <p>You say jump and we'll say how high, not why! </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Top Content Section --->
    <section class="page-content-section about-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="top-content-block"> <img class="abt_img" src="{{ asset('images/about_1.jpg') }}" alt="About Image 1" />
                        <div class="desc" data-aos="fade-up" data-aos-duration="1000">
                            <h3>Let's Go!</h3>
                            <p>We understand our role as a top notch marketing company. We strive to achieve and surpass your goals. We'll push you from every angle to make sure that happens. We will never hesitate to help you reach your goals! </p>
                            <br/>
                            <p>Open lines of communication make our company stand out. We're always expanding our reach with businesses, marketing efforts, creatives, and tools to help get this done. We are in this together, so let's get moving!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5 col-md-5">
                    <div class="left-content-block"> <img class="abt_img" src="{{ asset('images/about_2.jpg') }}" alt="About Image 2" />
                        <div class="desc" data-aos="fade-down" data-aos-duration="1000">
                            <h3>Quality</h3>
                            <p>Our integrity starts from the ground up. Starting with our genius team, through our designers, and on up through our software!</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-md-7">
                    <div class="right-top-content-block"> <img class="abt_img" src="{{ asset('images/about_3.jpg') }}" alt="About Image 3"/>
                        <div class="desc" data-aos="fade-up" data-aos-duration="1000">
                            <h3>Leaders</h3>
                            <p>For over a decade we have been on the forefront of our industry. We lead by example and provide the best service to our clients.</p>
                        </div>
                    </div>
                    <div class="right-bot-content-block"> <img class="abt_img" src="{{ asset('images/about_4.jpg') }}" alt="About Image 4" />
                        <div class="desc" data-aos="fade-down" data-aos-duration="1000">
                            <h3>Experience</h3>
                            <p>We have experience to understand your business. Help us help you to provide the creatives and tools you need to succeed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
