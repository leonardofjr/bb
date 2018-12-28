@extends('layouts.page')
@section('content')
        @foreach($data as $item)
            <img src='{{asset("storage/$item->basename")}}' alt='{{$item->description}}'>
        @endforeach
@endsection