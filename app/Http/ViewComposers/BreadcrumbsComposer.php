<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Route;
use Illuminate\Http\Request;

class BreadcrumbsComposer
{
    /**
     * The request instance.
     *
     * @var \Illuminate\Http\Request
     */
    protected $request;

    /**
     * Initialize a new composer instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with(['breadcrumbs' => $this->parseSegments()]);
    }

    /**
     * Parse the request route segments.
     *
     * @return \Illuminate\Support\Collection
     */
    protected function parseSegments()
    {
        return  explode("/",$_SERVER["REQUEST_URI"]);
        

    }
}
?>