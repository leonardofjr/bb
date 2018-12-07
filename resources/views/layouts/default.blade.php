<!DOCTYPE html><?php $url = URL::to("/");?>
<html>
    <head>
        @include('frontend.components.partials.head')
    </head>
    <body>
        <a id="top"></a>
        <header>
           @include('frontend.components.navigation')
            <!-- If user is on the homepage display this -->
            @if (\Request::is('/'))  
                @include ('frontend.components.jumbotron')
                @include ('frontend.components.our-work-carousel')
            @endif
        </header>
                    @if (!\Request::is('/'))  
                         @include('frontend/components/content-header')
                    @endif
        <main>

            <div class="content">
                 @yield('content')
            </div>
               
        </main>
        <footer>
           @include('frontend.components.footer')
        </footer>
        @include('frontend.vendors.tawk-chat-app')
    </body>
    @include('frontend.components.partials.after-body-scripts')

</html>