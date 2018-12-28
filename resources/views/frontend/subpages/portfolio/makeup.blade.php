@extends('layouts.page')
@section('content')
    <section class="container">
        @foreach($data as $item)
            <img src='{{asset("storage/$item->basename")}}' alt='{{$item->description}}'>
        @endforeach
    </section> 
@endsection