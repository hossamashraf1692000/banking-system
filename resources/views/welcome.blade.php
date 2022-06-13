@extends('layout')

@section('title')
    Home Page
@endsection
@section('main')
    
    <header>
        <div class="home_bg" style="background-image: url({{ asset('images/home2.jpg') }})">
            <div class="home_content">
            <h1 class="">Smart Online Payments Banking System </h1> 
                <ul class="py-3">
                    <li>Instantly move money between sites</li>
                    <li>Withdraw to your bank in seconds</li>
                    <li>Used by millions around the world</li>
                </ul>
            </div>
        </div>

    </header>
@endsection