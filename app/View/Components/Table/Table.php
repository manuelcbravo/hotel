<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class Table extends Component
{
    
    public function __construct(){
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.table');
    }
}
