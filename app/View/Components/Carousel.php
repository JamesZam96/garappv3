<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Carousel extends Component
{
    public $companies;
    /**
     * Create a new component instance.
     */
    public function __construct($companies)
    {
        //
        $this->companies = $companies;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.carousel');
    }
}
