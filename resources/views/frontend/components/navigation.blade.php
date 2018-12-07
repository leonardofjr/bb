<nav class="main-navigation d-none d-xl-block d-lg-block d-md-block d-sm-block"> 
  <div class="container">
  <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-2 logo">
        <a href="/">@include('../svgs/logo')</a>
      </div>
      
    <ul class="col-lg-10  col-md-10 col-sm-10 text-right">
         @include('frontend.menus.primary-menu')
      </ul>
  </div>
  </div>
</nav>

<nav class="d-block d-sm-none navbar navbar-dark   p-3 mobile-navigation">
      <div class="row">
        <div class="pt-3 col-9 pl-5">
              <a href="/">@include('../svgs/logo')</a>
        </div>
        <div class="pull-right">
          <button type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>

  <div class="">
    <div id="navbarToggleExternalContent" class="collapse p-4">
      <ul>
           @include('frontend.menus.primary-menu')
      </ul>
    </div>
  </div>
</nav>