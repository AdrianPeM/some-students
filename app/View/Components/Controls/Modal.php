<?php

namespace App\View\Components\Controls;

use Illuminate\View\Component;

class Modal extends Component
{
    public $id;
    public $title;
    public $content;
    public $footer;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $title, $content = '', $footer = '')
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->footer = $footer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.controls.modal');
    }
}
