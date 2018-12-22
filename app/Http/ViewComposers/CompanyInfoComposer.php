<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Route;

class CompanyInfoComposer {

    public function compose(View $view) {

      $view->with([
        'company_name' => 'Beauty Bliss',
        'company_address' => '',
        'company_city' => '',
        'company_territory' => '',
        'company_phone' => '647-982-8637',
        'company_email' => 'info@beautybliss.ca',
      ]);
    }

}
?>