<?php

namespace App\View\Components\v1\breadcumb;

use Illuminate\View\Component;

class Breadcumb extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $routeName)
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.v1.breadcumb.breadcumb');
    }
}
