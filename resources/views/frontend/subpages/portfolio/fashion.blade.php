@extends('layouts.portfolio')
@section('content')
        @if(count($data) > 0)
            @foreach($data as $item)
                <img src='{{asset("storage/$item->basename")}}' alt='{{$item->description}}' class="px-1 img-border img-shadow">
            @endforeach
        @else
            <h4 class="text-center">No images found</h4>
        @endif
@endsection