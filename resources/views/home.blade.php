@extends('layouts.app')

@section('content')
    <!--section2-->
    <section class="h_sec2">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-down" data-aos-duration="1000">
                    <h2>We’re <span>Proud</span> of Our Work</h2>
                    <p>With over a decade of service in the marketing industry it's hard to say we haven't been around the block a time or two. We've seen and have kept up with the ever changing online environment; from changes in devices to services, software to browsers, we've been through it all! Let Rock Phase show you it's possible to reach all of your marketing goals!</p>
                    <a href="{{ route('contact') }}" type="button" class="btn btn-primary yellow_btn">Contact Us</a> </div>
            </div>
        </div>
    </section>
    <!--section2-->
    <!--Our_Services-->
    <section class="h_our_services">
        <h2>Our Services</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="block" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="icon01">Designing</h2>
                        <ul>
                            <li>Website Layouts</li>
                            <li>Mobile Layouts</li>
                            <li>Logos</li>
                            <li>Business Branding</li>
                            <li>Brochure Design</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1500">
                    <div class="block">
                        <h2 class="icon02">Development</h2>
                        <ul>
                            <li>Simple HTML</li>
                            <li>Wordpress</li>
                            <li>PHP Integrations</li>
                            <li>Database Structure</li>
                            <li>Hosting Solutions</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="2000">
                    <div class="block">
                        <h2 class="icon03">Advertisment</h2>
                        <ul>
                            <li>Social Media Marketing</li>
                            <li>Email Marketing</li>
                            <li>Ad Buys</li>
                            <li>Search Engine Optimization</li>
                            <li>Custom Tracking Software</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text_block2">We can help! <span>Let's talk</span></div>
                    <a href="{{ route('contact') }}" type="button" class="btn btn-primary yellow_btn margin_t">Contact Us</a> </div>
            </div>
        </div>
    </section>
    <!--Our_Services-->
    <!--h_sec3-->
    <section class="h_sec3">
        <div class="container">
            <div class="row">
                <div class="col-md-5 img_d_j" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ asset('images/img_digital_j.png') }}" alt="Digital Journey" title="Digital Journey"/>
                </div>
                <div class="col-md-7 digital_j" data-aos="fade-down" data-aos-duration="1000">
                    <h2>Your digital journey starts here.</h2>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 d_inner_con padd_left_rest">Now is the time to build your brand. Now is the time to generate traffic. If you expect to grow your business, marketing is an area that must not be ignored. Small businesses often overlook this part of their budget and may not fully understand their growth potential by pressing an audience to understand the need for their products and services. </div>
                            <div class="col-md-6 d_inner_con">That is where Rock Phase comes in. We will meet with you to understand your specific goals and needs. We'll work closely with you to surpass all of your expectations so you will no longer look at marketing in the same light! Let us prove to you that with a rock solid marketing effort, the sky truly is the limit for your business!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial">
        <h2>Success stories</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="mx-auto mt-3 mb-3" style="max-width:800px;">
                        <div id="carouselTestimonial" class="carousel carousel-testimonial slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item text-center active">
                                    <p class="m-0 pt-3">“I absolutely valued working with Rock Phase. The team is complementary &amp; critical. With their help we were able to expand our reach succesfully and quickly.”</p>
                                    <div class="test_btm">
                                        <div class="lft">
                                            <img src="{{ asset('images/test_img01.jpg') }}" alt=""/>
                                        </div>
                                        <div class="rt">
                                            <p class="row1">Martijn Bovée</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item text-center">
                                    <p class="m-0 pt-3">“I am a very goal oriented person, after sitting down with Rock Phase and organizing our plan to increase traffic, I was totally confident they wouldn't let me down!”</p>
                                    <div class="test_btm">
                                        <div class="lft">
                                            <img src="{{ asset('images/test_img02.jpg') }}" alt=""/>
                                        </div>
                                        <div class="rt">
                                            <p class="row1">Francis Taylor</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item text-center">
                                    <p class="m-0 pt-3">“In the digital age these days it's really hard to know how to spend your marketing dollars. I was able to not only see what I was spending but also track exactly how my results were paying off. A big win for us!”</p>
                                    <div class="test_btm">
                                        <div class="lft">
                                            <img src="{{ asset('images/test_img03.jpg') }}" alt=""/>
                                        </div>
                                        <div class="rt">
                                            <p class="row1">Angela Carsen</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselTestimonial" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselTestimonial" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <!-- Info -->
                </div>
            </div>
        </div>
    </section>
    <!--h_sec3-->
@endsection
