<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class Basic extends Component
{

    public $url;
    public $text;
    public $title;
    public $icon;
    public $confirm;



    public function __construct(string $url, string $text= "", string $icon = null, string $title = null, bool $confirm = false)
    {
        $this->url = $url;
        $this->text = $text;
        $this->icon = $icon;
        $this->title = $title;
        $this->confirm = $confirm;

        if($this->icon != "") $this->icon = 'icons.'.$icon;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.button.basic');
    }
}
