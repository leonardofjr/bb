<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Mail;
    use Illuminate\Routing\Controller;
    use App\Post; 
    use DB;
    use Storage;    
    
    class PagesController extends Controller {
        public function getHomepage() {
            return view('frontend.pages.home');
        }

         public function getAboutPage() {
            return view('frontend.pages.about');
         }

         public function getServicesPage() {
            return view('frontend.pages.services');
         } 

         public function getWorkPage() {
            return view('frontend.pages.work');
         } 

         public function getSupportPage() {
            return view('frontend.pages.support');
         }  

         public function getContactPage() {
            return view('frontend.pages.contact');
         } 

    }
?>