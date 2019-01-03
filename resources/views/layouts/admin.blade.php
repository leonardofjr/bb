<!DOCTYPE html>
<html>
    <head>
        @include('frontend.components.partials.head')
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="/">
                         <img id="logo" src="assets/jpeg/beauty-bliss-logo.jpg" alt="">
                    </a>
                </div>
            </nav>
        </header>
                    @if (!\Request::is('/'))  
                        <div class="white-space"></div>
                    @endif
        <main>
            <div class="content">
                 @yield('content')
            </div>
               
        </main>
        @include('frontend.components.partials.after-body-scripts')
    </body>

</html>