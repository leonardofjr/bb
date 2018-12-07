@extends('layouts.user-panel')
@section('content')
    <section class="container"> 
        <section class="row">
            <aside class="col-lg-3">
                @include('admin.sidebar')
            </aside>
            <section class="content col-lg-9">
                @include('admin.page-title');
            </section>
        </section>
   
    </section>
@stop