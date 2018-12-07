@extends('layouts.default')
@section('content')
    <section class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <h2>Get in Touch</h2>
            
                    <p>To request a quote or a meeting to discuss a project, please complete this form.</p>

                    <p>Alternatively, please call: <?php echo $company_phone;?></p>
                    
                    <h3>Project brief</h3>
                    <p>If you would like to provide us with a more comprehensive project brief. <a href="project-brief"></a> click here</p>
                    
                    <h3>Web design brief</h3>
                    <p>We have a few questions regarding the look and feel of your website to help us understand your brand and positioning <a href="web-design-brief"></a> click here</p>

                    <h3>Address</h3>
                    <p><?php echo $company_address .',<br>'  . $company_city . ', '  . $company_territory . '<br>';?> <a href="https://goo.gl/maps/Se86NeEv1L42"></a> click here</p>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                @include('frontend.components.contact-form')
            </div>
        </div>
       
    <section>
@stop