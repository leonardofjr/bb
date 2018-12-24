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
            $data = $this->getImages();
            return view('frontend.pages.home')->withData($data);
        }
        // Helper Function Return Files In portfolio_images


         public function getAboutPage() {
            return view('frontend.pages.about');
         }

         public function getImages() {
            $makeup_images =  glob("../public/portfolio_images/makeup/*.jpg"); 
            $hair =  glob("../public/portfolio_images/hair/*.jpg"); 
            $fashion =  glob("../public/portfolio_images/fashion/*.jpg"); 
            foreach($makeup_images as $img) {
                $makeup[] = basename($img);
            }
            return [
               'makeup' => $makeup,
               'hair' => $hair,
               'fashion' => $fashion,
            ];
         }

         public function getTestimonialsPage() {
            return view('frontend.pages.testimonials');
         }

         public function getPricingPage() {
            return view('frontend.pages.pricing');
         } 

         public function getPortfolioPage() {
   //         $json = Storage::disk('public')->get('work_table.json');
    //        $json =  json_decode($json, true);
            
            return view('frontend.pages.portfolio');
         } 

         public function getContactPage() {
            return view('frontend.pages.contact');
         } 

    }
?>