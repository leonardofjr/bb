@extends('layouts.default')
@section('title', 'Makeup Services In Brampton')
@section('content')
<div class="white-space"></div>
<section class="container-fluid">
    <div class="container">
        @foreach ($data as $item)
            <img src={{asset("storage/$item->basename")}} alt={{$item->description}} class="img-fluid">
        @endforeach
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