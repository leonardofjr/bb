<?php
    namespace App\Http\Controllers;
    use Illuminate\Routing\Controller;
    use App\Review;
    use App\Portfolio;
    use Storage;    
    use DB;
    class PagesController extends Controller {
        public function getHomepage() {
            $data = Portfolio::limit(12)->orderBy('created_at', 'dec')->get();
            return view('frontend.pages.home')->withData($data);
        }
        public function getConfirmedReviews() {
            $testimonials = new Review();
            $data = [];
            foreach($testimonials->get() as $i => $value) {
               if ($value->confirmed === 1) {
                  $data[$i] = $value;
               }

            }

            return $data;
        }
        // Helper Function Return Files In portfolio_images


         public function getAboutPage() {
            return view('frontend.pages.about');
         }

         public function getPortfolioImages() {
            return DB::table('portfolio')->get();
         }
         

         public function getTestimonialsPage() {
            return view('frontend.pages.testimonials')->withData($this->getConfirmedReviews());
         }
         public function getAddReviewPage() {
            return view('frontend.pages.add-review');
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