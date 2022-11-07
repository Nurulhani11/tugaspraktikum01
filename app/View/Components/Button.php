<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
   public $label;
   public $theme;
   public $icon;
   
    public function __construct($label, $theme, $icon=null)
    {
        $this->label = $label;
        $this->theme = $theme;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
