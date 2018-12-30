<div class="jumbotron jumbotron-fluid">
    @if (\Request::is('/'))  
        <div class="row">
            <div class="col-sm-6">
                <div id="left-image">

                </div>
            </div>
            <div class="col-sm-6">
                <div id="top-image">

                </div>
                <div id="bottom-image">

                </div>

            </div>
        </div>
    @endif
    @if (!\Request::is('/'))
    <div class="row">
            @if (!\Request::is('/'))
                <img src='{{asset("assets/png/cover-image-2.png")}}' alt="" style="width: 100%; height: 100%;">
                    <h1 style="color: white; position: absolute; top: 50%; left:50%; transform: translate(-50%, -50%);"><?php echo Route::current()->getName();?></h1>
            @endif
    </div>
    @endif
</div>
