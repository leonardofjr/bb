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
            @if (\Request::is('/'))  
                @include ('frontend.components.jumbotron')
            @endif
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
        <footer>
           @include('frontend.components.footer')
        </footer>
    </body>
    @include('frontend.components.partials.after-body-scripts')

</html>