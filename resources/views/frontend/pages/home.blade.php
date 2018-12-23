@extends('layouts.default')
@section('title', 'Makeup Services In Brampton')
@section('content')

@include('frontend.components.testimonials')

<section class="container-fluid my-5">
        <div class=" text-center">
          <h2 class="pb-5">Follow <?php echo $company_name?> on Instagram</h2>
        </div>
        @include('frontend.components.instagram-feed')
</section>

<section class="container-fluid my-5">
   <div class="container">
        <div class="row">
            <div class=" col-sm-6 col-12">
                <h1>Contact</h1>
               <p>To request a quote or a meeting to discuss a project, please complete this form.</p>
                @include('frontend.components.contact-form')
            </div>
            <div class="col-sm-6 col-12">

            </div>
        </div>
    </div>
</section>
@endsection