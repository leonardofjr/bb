@extends('layouts.default')
@section('title', 'Testimonials')
@section('content')
    <section class="container"> 
        <div class="row">
            <div class="col-md-5">
                <p>Hey, all you gorgeous clients of mine! How about giving your makeup artist a review? I'd appreciate any feedback, and it would help me to reach a wider audience. Thanks in advance!</p>
            </div>
            <div class="col-md-7">
                    <form method="post" action="/api/review" name="addReviewForm" id="addReviewForm">
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
                        </div>
                        <div class="my-3 d-none alert alert-warning error error-fname" role="alert">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
                        </div>
                        <div class="my-3 d-none alert alert-warning error error-lname" role="alert">
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" name="review" id="review" placeholder="Review"></textarea>
                        </div>
                        <div class="my-3 d-none alert alert-warning error error-review" role="alert">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Add Review</button>
                        </div>
                    </form>
                </div>
            </div>
    </section>
@endsection