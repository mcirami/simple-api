@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="my_row error_page form_page text-center">
            <div class="card">
                <h2 class="page_title">404</h2>
                <div class="card-body">
                    <h3 class="quote">Page not found.</h3>
                    <p>Please return to <a href={{ url('/') }}>our homepage</a>.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
