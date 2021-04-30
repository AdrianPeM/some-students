<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\UserNotification;
use App\Models\NotificationType;

class Notification extends Component
{
    public $notificationTitle;
    public $notificationContent;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(NotificationType $notification)
    {

        $this->notificationTitle = $notification->title;
        $this->notificationContent = $notification->content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.notification');
    }
}
