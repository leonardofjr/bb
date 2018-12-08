@extends('layouts.work')
@section('content')

      @foreach ($data as $post)
      <div class="row pb-5">

      <div class="col-md-6">
        <img src ="{{asset('assets/png/' . $post["img_src"])}}" class="img-fluid">
      </div>
      <div class="col-md-6">
        <b>Services Provided:</b>
        <p>{!!$post["services_provided"]!!}</p>
        <a href="{{$post["website_url"]}}" class="btn btn-primary">Launch Website</a>
      </div>
    </div>

      @endforeach




</div>
    
@endsection