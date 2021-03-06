@extends('layouts.default')
@section('title', 'Contact')
@section('content')
    <section class="container">
        <div class="row">
            <div class=" col-sm-6 col-12">
               <p>To request a quote or a meeting to discuss a project, please complete this form.</p>
                @include('frontend.components.contact-form')
            </div>
            <div class="col-sm-6 col-12">
                @include('frontend.components.map')
            </div>
        </div>
    <section>
@endsection