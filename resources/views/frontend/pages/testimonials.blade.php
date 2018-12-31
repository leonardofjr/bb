@extends('layouts.default')
@section('title', 'Testimonials')
@section('content')
    <section class="container"> 
    <div class="row">
     @foreach($data as $item)
       <div class="col-sm-4">
            <div class="card text-center">
            <div class="card-body">
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <h5 class="card-author"> {{$item->fname}}</h5>
            </div>
            </div>
        </div>
     @endforeach
     </div>
    </section>


@endsection