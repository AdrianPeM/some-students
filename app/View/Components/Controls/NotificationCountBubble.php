<?php

namespace App\View\Components\Controls;

use Illuminate\View\Component;

class NotificationCountBubble extends Component
{
    public $notificationCount;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($notificationCount)
    {
        $this->notificationCount = $notificationCount;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.controls.notification-count-bubble');
    }
}
