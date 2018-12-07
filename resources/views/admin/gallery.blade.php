@extends('layouts.user-panel')
@section('content')
   
    <section class="container"> 
        <section class="row">
            <aside class="col-lg-3">
                @include('admin/sidebar')
            </aside>
            <section class="content gallery col-lg-9">
                @include('admin.page-title')
                <div class="row">
                @foreach ($data as $item)
                    <div class="col-lg-3">               
                        <img src={{asset('assets/uploads/') . '/' . $item->basename}}>
                        
                            <a href="/admin/user-panel/gallery/edit/{{$item->id}}" type="submit"><i class="fa fa-pencil-square-o fa-1x" aria-hidden="true"></i></a>
                     

                        <form action="/api/admin/gallery/{{$item->id}}" method="post">
                            <?php echo method_field("DELETE"); ?>
                            <?php echo csrf_field(); ?>
                            <button type="submit"><i class="fa fa-trash-o fa-1x" aria-hidden="true"></i></button>
                        </form>
                    </div>
                @endforeach
                </div>
     
            </section>
        </section>
   
    </section>
@stop