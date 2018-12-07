<!DOCTYPE html><?php $url = URL::to("/");?>
<html>
    <head>
        @include('inc.head')
    </head>
    <body>
        <a id="top"></a>
        <header>
            @include('inc.navigation')
            <!-- If user is on the homepage display this -->
            @if (\Request::is('/'))  
       
            @endif
        </header>
        <main>
            <div class="content">
                 @yield('content')
            </div>
        </main>
        <footer>
            @include('inc/components/site-info')
        </footer>
        @include('inc.components.tawk-chat-app')
    </body>
    <script src="/scripts/slick-1.8.0/slick.min.js"></script>
    <script src="/scripts/gsap/TweenMax.min.js"></script>
    <script src="/scripts/gsap/plugins/scrollToPlugin.min.js"></script>
    <script src="/scripts/Scroll-Magic/scrollMagic.min.js"></script>
    <script src="/scripts/Scroll-Magic/plugins/animation.gsap.js"></script>
    <script src="/scripts/Scroll-Magic/plugins/debug.addIndicators.min.js"></script>
    <script src="/scripts/flexibility.js"></script>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/dist/scripts/scripts.js"></script>
</html>