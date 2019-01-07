@extends('layouts.default')
@section('title', 'Makeup Services In Brampton')
@section('content')
<div class="white-space"></div>
<section class="container-fluid" id="work">
        <h2 class="text-center mb-5">Our Work</h2>
        <div class="images pb-5">
        @foreach ($data as $item)
                <img src="{{asset("storage/$item->basename")}}" alt="{{$item->description}}" class="px-1 img-border img-shadow">
        @endforeach
        </div>
        <div class="text-center">
        <a href="/portfolio" class="btn btn-primary mt-5">View more of work</a>
        </div>
</section>
@include('frontend.components.testimonials')
@include('frontend.components.instagram-feed')

<section class="container-fluid">
   <div class="container">
        <div class="row">
            <div class=" col-sm-6 col-12">
                <h1>Contact</h1>
               <p>To request a quote or a meeting to discuss a project, please complete this form.</p>
                @include('frontend.components.contact-form')
            </div>
            <div class="col-sm-6 col-12">
                @include('frontend.components.map')
            </div>
        </div>
    </div>
</section>
@endsection