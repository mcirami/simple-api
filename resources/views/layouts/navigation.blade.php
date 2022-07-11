<header class="header @if(\Illuminate\Support\Facades\Route::currentRouteName() != 'home') inner @endif">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <nav class="navbar navbar-expand-md navbar-dark main-menu">
                    <div class="container">
                        <a class="navbar-brand site-logo text-white" href="{{ route('home') }}">
                            <img src="{{ asset('images/logo.png') }}" alt="ROCK PHASE" title="ROCK PHASE"/>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse p_nav" id="navbarsExampleDefault">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'home') active @endif">
                                    <a class="nav-link" href="{{ route('home') }}">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'about') active @endif">
                                    <a class="nav-link" href="{{ route('about') }}">
                                        About Us
                                    </a>
                                </li>
                                <li class="nav-item @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'contact') active @endif">
                                    <a class="nav-link" href="{{ route('contact') }}">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Navigation -->
            </div>
        </div>
    </div>
</header>
