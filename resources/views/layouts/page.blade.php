<!DOCTYPE html><?php $url = URL::to("/");?>
<html>
    <head>
        @include('frontend.components.partials.head')
    </head>
    <body>
        <header>
                @include('frontend.components.top-bar')
                @include('frontend.components.navigation')
        </header>
                @include('frontend/components/content-header')
        <main class="container">

            <div class="row">
                <aside class="col-lg-3 col-md-3 col-sm-3 services-menu">
                    <h4>OUR SERVICES</h4>
                    @include('frontend.menus.sidebar-menu')
                </aside>
                <section class="col-lg-9 col-md-9 col-sm-9">

                    <div class="content">

                        @yield('content')
                    </div>
                </section>
            </div>
        </main>
        <footer>
                @include('frontend.components.footer')
        </footer>
    @include('frontend.components.partials.after-body-scripts')
    </body>

</html>