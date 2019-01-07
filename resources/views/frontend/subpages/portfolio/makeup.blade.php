@extends('layouts.portfolio')
@section('content')
        @foreach($data as $item)
            <img src='{{asset("storage/$item->basename")}}' alt='{{$item->description}}' class="px-1 img-border img-shadow">
        @endforeach
@endsection