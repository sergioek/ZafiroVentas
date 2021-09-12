<?php

namespace App\View\Components;

use Illuminate\View\Component;

class sail-details extends Component
{
    public $total;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($total)
    {
        $total=$this->total;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sail-details');
    }
}
