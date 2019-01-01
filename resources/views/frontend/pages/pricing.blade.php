@extends('layouts.default')
@section('title', 'Pricing')
@section('content')
    <section class="container" id="pricing"> 
        <div class="row">
            <div class="col-sm-6">
                <h2 class="h5 text-style-1">Bride Only Package</h2>
                <ul>
                    <li>A professional long lasting make-up application</li>
                    <li>Touch up lipstick sample</li>
                    <li>Mac reusable false eyelashes</li>
                    <li>Bridal hairstyling (fillers and padding included)</li>
                    <li>In home service or at location of your choice (travel charges may apply)</li>
                </ul>
                <p class="h3 font-weight-bold pt-3">$350</p>
            </div>
            <div class="col-sm-6">
                <h2 class="h5 text-style-1">South Asian Bridal Makeup + Hairstyling + Dressing Package for Wedding</h2>
                <ul>
                    <li>A professional long lasting make-up application</li>
                    <li>Touch up lipstick sample</li>
                    <li>Mac reusable false eyelashes</li>
                    <li>Bridal hairstyling (fillers and padding included)</li>
                    <li>In home service or at location of your choice (travel charges may apply)</li>
                </ul>
                <p class="h3 font-weight-bold pt-3">$350</p>
            </div>
            <div class="col-sm-6">
                <h2 class="h5 text-style-1">ADDITIONAL HAIRSTYLING AND MAKEUP APPLICATIONS</h2>
                <p class="h3 font-weight-bold pt-3">$150</p>
            </div>
            <div class="col-sm-6">
                <h2 class="h5 text-style-1">ADDITIONAL HAIRSTYLING OR MAKEUP APPLICATIONS</h2>
                <p class="h3 font-weight-bold pt-3">$80</p>
            </div>
            <div class="col-sm-6">
                <h2 class="h5 text-style-1">HAIR AND MAKE-UP</h2>
                <p class="h3 font-weight-bold pt-3">$150</p>
            </div>
            <div class="col-sm-6">
                <h2 class="h5 text-style-1">HAIR OR MAKE-UP</h2>
                <p class="h3 font-weight-bold pt-3">$80</p>
            </div>
        </div>
    </section>
    @include('frontend.components.call-to-action')

    @include('frontend.components.instagram-feed')
@endsection