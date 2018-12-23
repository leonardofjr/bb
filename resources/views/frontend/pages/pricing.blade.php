@extends('layouts.default')
@section('title', 'Pricing')
@section('content')
    <section class="container"> 
        <div class="row">
            <div class="col-sm-6 text-center">
                <h2>Bride Only Package</h2>
                <ul>
                    <li>A professional long lasting make-up application</li>
                    <li>Touch up lipstick sample</li>
                    <li>Mac reusable false eyelashes</li>
                    <li>Bridal hairstyling (fillers and padding included)</li>
                    <li>In home service or at location of your choice (travel charges may apply)</li>
                </ul>
                <p class="text-style-1 h3">$350</p>
                <a class="btn btn-primary" href="/book-now">Book Now</a>
            </div>
            <div class="col-sm-6 text-center">
                <h2>South Asian Bridal Makeup + Hairstyling + Dressing Package for Wedding</h2>
                <ul>
                    <li>A professional long lasting make-up application</li>
                    <li>Touch up lipstick sample</li>
                    <li>Mac reusable false eyelashes</li>
                    <li>Bridal hairstyling (fillers and padding included)</li>
                    <li>In home service or at location of your choice (travel charges may apply)</li>
                </ul>
                <p class="text-style-1 h3">$350</p>
                <a class="btn btn-primary" href="/book-now">Book Now</a>
            </div>
            <div class="col-sm-6 text-center">
                <h2>ADDITIONAL HAIRSTYLING AND MAKEUP APPLICATIONS</h2>
                <p class="text-style-1 h3">$150</p>
            </div>
            <div class="col-sm-6 text-center">
                <h2>ADDITIONAL HAIRSTYLING OR MAKEUP APPLICATIONS</h2>
                <p class="text-style-1 h3">$80</p>
            </div>
            <div class="col-sm-6 text-center">
                <h2>HAIR AND MAKE-UP</h2>
                <p class="text-style-1 h3">$150</p>
            </div>
            <div class="col-sm-6 text-center">
                <h2>HAIR OR MAKE-UP</h2>
                <p class="text-style-1 h3">$80</p>
            </div>
        </div>
    </section>
    @include('frontend.components.call-to-action')

    @include('frontend.components.instagram-feed')
@endsection