<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Route;

class MenuComposer {

 public function getRoutesByController($findController) {
            $routeCollection = Route::getRoutes();
            $data = [];

            foreach ($routeCollection as $key => $value) {
                $page_controller = $value->getActionName();
                if (strpos($page_controller, $findController)  !== false) {
                    $path_url = $value->uri();
                    $path_name = $value->getName();
                    $data[$key] = [
                        'path_name' => $path_name,  
                        'path_url' => $path_url,  
                    ];
                }
            }
            return $data;
    }

    public function compose(View $view) {
      $mainPages = $this->getRoutesByController('App\Http\Controllers\PagesController@');
      $servicesPages = $this->getRoutesByController('App\Http\Controllers\PortfolioPagesController@');
      $workPages = $this->getRoutesByController('App\Http\Controllers\WorkPagesController@');
      $view->with([
        'main_pages' => $mainPages,
        'services_pages' => $servicesPages,
        'work_pages' => $workPages,
      ]);
    }

}
?>