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
            $json = Storage::disk('public')->get('work_table.json');
            $json =  json_decode($json, true);
            
            return view('frontend.pages.work')->with([
                "data" => $json["post"]
            ]);
         } 

         public function getContactPage() {
            return view('frontend.pages.contact');
         } 

    }
?>