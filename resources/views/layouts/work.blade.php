<!DOCTYPE html><?php $url = URL::to("/");?>
<html>
    <head>
        @include('frontend.components.partials.head')
    </head>
    <body>
        <a id="top"></a>
        <header>
                @include('frontend.components.navigation')
        </header>
        @include('frontend/components/content-header')
        @include('frontend/components/breadcrumbs')

        <main class="container">
            <div class="row">
     
                <main class="col-sm-12">
                    <div class="content">
                        @yield('content')
                    </div>
                </main>
            </div>
        </main>
        <footer>
                @include('frontend.components.footer')
        </footer>
        @include('frontend.vendors.tawk-chat-app')
    </body>
    @include('frontend.components.partials.after-body-scripts')
</html>