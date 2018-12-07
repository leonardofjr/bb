<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Mail;
    use Illuminate\Routing\Controller;
    use App\Post; 
    use DB;
    use Storage;    
    
    class ServicesPagesController extends Controller {

        public function getWebDesignPage() {
            return view('frontend.subpages.services.web-design');
         }  // getWebDesignPage() Ends Here

         public function getWebDevelopmentPage() {
            return view('frontend.subpages.services.web-development');
         }  // getWebDevelopmentPage() Ends Here

         public function getMobileResponsiveDesignPage() {
            return view('frontend.subpages.services.mobile-responsive-design');
         }  // getMobileResponsiveDesignPage() Ends Here

         public function getEmailMarketingPage() {
            return view('frontend.subpages.services.email-marketing');
         }  // getEmailMarketingPage() Ends Here

         public function getGraphicDesignPage() {
            return view('frontend.subpages.services.graphic-design');
         }  // getGraphicDesignPage() Ends Here

         public function getHostingPage() {
            return view('frontend.subpages.services.hosting');
         }  // getHostingPage() Ends Here

         public function getStrategyAndScopePage() {
            return view('frontend.subpages.services.strategy-and-scope');
         }  // getStrategyAndScopePage() Ends Here

         public function getPartnerWithUsPage() {
            return view('frontend.subpages.services.partner-with-us');
         }  // getPartnerWithUsPage() Ends Here
    }
?>