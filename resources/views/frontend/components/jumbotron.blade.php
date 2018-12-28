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
            @if (\Request::is('about'))
                <img src='{{asset("assets/png/cover-image.png")}}' alt="" style="width: 100%; height: 100%;">
            @endif
    </div>
    @endif
</div>
