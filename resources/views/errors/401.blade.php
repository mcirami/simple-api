@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="my_row error_page form_page text-center">
            <div class="card">
                <h2 class="page_title">401</h2>
                <div class="card-body">
                    <h3 class="quote">Unauthorized action.</h3>
                    <p>Please return to <a href={{ url('/') }}>our homepage</a>.</p>
                    {{--<p><small>{!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}</small></p>--}}
                </div>
            </div>
        </div>
    </div>

@endsection
