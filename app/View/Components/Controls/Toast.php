<?php

namespace App\View\Components\Controls;

use Illuminate\View\Component;
use App\Models\UserToast;

class Toast extends Component
{

    public $toastTitle;
    public $toastIcon;
    public $toastIconColor;
    public $toastMessage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(UserToast $toast)
    {
        $this->toastTitle = $toast->title;
        $this->toastIcon = $toast->icon;
        $this->toastIconColor = $toast->iconColor;
        $this->toastMessage = $toast->message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.controls.toast');
    }
}
