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
        <main class="container-fluid">
            <div class="row">
                <aside class="col-lg-2 col-md-2 col-sm-2 services-menu">
                    <h4>Choose By Category</h4>
                    @include('frontend.menus.sidebar-menu')
                </aside>

                <section id="portfolio-gallery" class="col-lg-10 col-md-10 col-sm-10">
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