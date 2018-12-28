<!DOCTYPE html><?php $url = URL::to("/");?>
<html>
    <head>
        @include('frontend.components.partials.head')
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="container text-right">
                  <?php echo $company_phone ?>
                  <?php echo $company_email ?>
                </div>
            </div>
           @include('frontend.components.navigation')
            <!-- If user is on the homepage display this -->
            @include ('frontend.components.jumbotron')
        </header>
                    @if (!\Request::is('/'))  
                         @include('frontend/components/content-header')
                         @include('frontend/components/breadcrumbs')

                    @endif
                    
        <main>

            <div class="content">
                 @yield('content')
            </div>
               
        </main>
           @include('frontend.components.footer')
        @include('frontend.components.partials.after-body-scripts')
    </body>

</html>