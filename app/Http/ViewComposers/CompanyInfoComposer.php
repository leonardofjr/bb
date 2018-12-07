<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Route;

class CompanyInfoComposer {

    public function compose(View $view) {

      $view->with([
        'company_name' => 'Startup Designs',
        'company_address' => '62 Lost Pond Crescent',
        'company_city' => 'Stouffville',
        'company_territory' => 'Ontario',
        'company_phone' => '647-688-9189',
      ]);
    }

}
?>