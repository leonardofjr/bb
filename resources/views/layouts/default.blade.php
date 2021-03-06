<!DOCTYPE html>
<html>
    <head>
        @include('frontend.components.partials.head')
    </head>
    <body>
        <header>
            @include('frontend.components.top-bar')
            @include('frontend.components.navigation')
            <!-- If user is on the homepage display this -->
            @include ('frontend.components.jumbotron')
        </header>
          
        <main>
            @if (!\Request::is('/'))  
                @include('frontend/components/content-header')
            @endif
            <div class="content">
                 @yield('content')
            </div>
        </main>
           @include('frontend.components.footer')
           @include('frontend.components.partials.after-body-scripts')
    </body>

</html>