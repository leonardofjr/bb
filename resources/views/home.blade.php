@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div id="app">
                            <div class="row">
                                <ul class="nav flex-column col-sm-2">
                                    <li class="nav-item">
                                        <router-link to="/gallery">Gallery</router-link>
                                    </li>
                                    <li class="nav-item">
                                        <router-link to="/reviews">Reviews</router-link>
                                    </li>
                                </ul>
                                <section class="col-sm-10">
                                    <router-view></router-view>
                                </section>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
