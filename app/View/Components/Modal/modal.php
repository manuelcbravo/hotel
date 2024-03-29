<?php

namespace App\View\Components\Modal;

use Illuminate\View\Component;

class modal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $id;
    public $size;

    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal.modal');
    }
}
