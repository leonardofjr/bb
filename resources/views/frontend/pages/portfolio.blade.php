@extends('layouts.portfolio')
@section('title', 'Portfolio')
@section('content')
    @if(count($data) > 0)
        @foreach($data as $item)
            <img src='{{asset("storage/$item->basename")}}' alt='{{$item->description}}' data-toggle="modal" data-target="#exampleModal" data-id="{{$item->id}}">
        @endforeach

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
    @else
        <h4 class="text-center">No images found</h4>
    @endif
@endsection