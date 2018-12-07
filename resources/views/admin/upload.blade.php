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
            <input type="text" class="form-control" id="gallery-filename-alternate-text" name="gallery-filename-alternate-text">
        </div>
        <div class="form-group">
            <label for="gallery-categories">Category:</label>
            <select class="form-control" id="gallery-categories" name="gallery-categories">
                <option value="logo">Logo</option>
                <option value="website">Website</option>
                <option value="digital">Digital</option>
                <option value="print">Print</option>
                <option value="illustration">Illustration</option>
                <option value="image">Image</option>
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
        <div class="form-group">
            
            <label for="gallery-file">File:</label>
            <input type="file" class="form-control" id="gallery-file" name="gallery-file">
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
        </form>
            </section>
        </section>
   
    </section>

   
@stop