<?php

namespace App\View\Components\Controls;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $editUrl;
    public $deleteUrl;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $editUrl, $deleteUrl)
    {
        $this->title = $title;
        $this->editUrl = $editUrl;
        $this->deleteUrl = $deleteUrl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.controls.card');
    }
}
