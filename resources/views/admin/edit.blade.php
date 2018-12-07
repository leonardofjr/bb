@extends('layouts.user-panel')
@section('content')
       <section class="container"> 
        <section class="row">
            <aside class="col-lg-3">
                @include('admin/sidebar')
            </aside>


        <section class="content col-lg-9">
            @include('admin.page-title')
                   <form id="gallery-upload-form"method="POST" action="/api/admin/gallery"enctype="multipart/form-data" >
        {{ csrf_field() }} 
        <div class="form-group">
              <label for="gallery-filename-alternate-text">Alternate Text:</label>
            <input type="text" class="form-control" value="{{$data[0]->description}}" id="gallery-filename-alternate-text" name="gallery-filename-alternate-text">
        </div>
        <div class="form-group">
            <label for="gallery-categories">Category:</label>
            <select class="form-control" id="gallery-categories" name="gallery-categories">
                <?php $categories = [
                    'logo' => 'Logo',
                    'website' => 'Website',
                    'digital' => 'Digital',
                    'print' => 'Print',
                    'illustration' => 'Illustration',
                    'image' => 'Image'
                    ];?>
                @foreach($categories as $key => $value)
                  @if($data[0]->category == $key)
                    <option selected="selected" value="{{$key}}">{{$value}}</option>
                  @else
                    <option value="{{$key}}">{{$value}}</option>
                  @endif
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="set-upload-as-an-overlay">Set item as an overlay:</label>
             <input id="gallery-overlay-checkbox" name="gallery-overlay-checkbox" type="checkbox">
        <section class=" gallery">
            <div class="row"></div>
            <i class="message d-none"></i>
        </section>
        </div>
   
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
            </section>
        </section>
   
    </section>

   
@stop