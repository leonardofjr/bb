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

        <section class="container">

            <div class="row">
                <aside class="col-lg-3 col-md-3 col-sm-3 services-menu">
                    <h4>OUR SERVICES</h4>
                    @include('frontend.menus.sidebar-menu')
                </aside>
                <main class="col-lg-9 col-md-9 col-sm-9">

                    <div class="content">

                        @yield('content')
                    </div>
                </main>
            </div>
         </section>
        <footer>
                @include('frontend.components.footer')
        </footer>
        @include('frontend.vendors.tawk-chat-app')
    </body>
    @include('frontend.components.partials.after-body-scripts')

</html>