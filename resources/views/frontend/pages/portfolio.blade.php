@extends('layouts.portfolio')
@section('title', 'Portfolio')
@section('content')
        @foreach($data as $item)
            <img src='{{asset("storage/$item->basename")}}' alt='{{$item->description}}' data-toggle="modal" data-target="#exampleModal" data-id="{{$item->id}}">
        @endforeach

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-body">
                    <img class="img-fluid">
                </div>
                <div class="modal-header">
                    <h5 class="modal-description" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
@endsection