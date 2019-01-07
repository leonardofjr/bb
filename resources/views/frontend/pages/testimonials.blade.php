@extends('layouts.default')
@section('title', 'Testimonials')
@section('content')
    <section class="container"> 
    @if(count($data) > 0)
        <div class="row">
                @foreach($data as $item)
                <div class="col-sm-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <p class="card-text">{{$item->review}}</p>
                            <h5 class="card-author"> {{$item->fname}} {{$item->lname}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
     @else 
        <h4 class="text-center">No reviews found.</h2>
     @endif
    </section>


@endsection