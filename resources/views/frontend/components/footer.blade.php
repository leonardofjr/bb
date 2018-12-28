<div class="white-space"></div>
<footer>
    <section class="top-footer container py-5">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                <h2><?php echo $company_name;?></h2>
                <div>
                <!--  <p><?php echo $company_address .',<br>'  . $company_city . ', '  . $company_territory . '<br>';?></p> -->
                    <p><?php echo $company_phone ?></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <h3>Our Services</h3>
                <ul>
                    @include('frontend.menus.sidebar-menu')
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                <h3>Our Work</h3>
                <ul>
                    <li><a href="/portfolio">Check out our work</a></li>
                </ul>
            </div>
        </div>
    </section>
</footer>
@include('frontend.components.partials.site-info')
