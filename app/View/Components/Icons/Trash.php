<?php

namespace App\View\Components\Icons;

use Illuminate\View\Component;

class Trash extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.icons.trash');
    }
}
