<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
        <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <section class="h_banner_header">
            @include('layouts.navigation')

            @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'home')
                <div class="banner-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                                <div class="banner-content">
                                    <h1>Rock Solid  Marketing. <br>
                                        Set Goals.<br>
                                        Skyrocket  Past Them!</h1>
                                    <p>Rock Phase is full services marketing and advertising company, we service businesses big and small and integrate our teams to bring you our rock solid services at the most competitive rates. </p>
                                    <a href="{{ route('contact') }}" type="button" class="btn btn-primary blue_btn">Contact Us</a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6" data-aos="fade-down" data-aos-duration="1000">
                                <div class="banner-img">
                                    <img src="{{ asset('images/banner_img.png') }}" title="" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </section>
            <!-- Page Content -->
            <main>
               @yield('content')
            </main>


        @include('layouts.footer')

    </body>
</html>
