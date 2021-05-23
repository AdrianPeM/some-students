<?php

namespace App\View\Components\Controls;

use Illuminate\View\Component;
use App\Models\UserNotification;
use App\Models\NotificationType;

class Notification extends Component
{
    public $notificationTitle;
    public $notificationContent;
    public $notificationIcon;
    public $notificationIconColor;
    public $notificationDate;
    public $margin;
    public $padding;
    public $border;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(NotificationType $notification, $margin)
    {
        $this->notificationTitle = $notification->display_type;
        $this->notificationContent = $notification->content;
        $this->notificationIcon = $notification->fa_icon;
        $this->notificationIconColor = $notification->fa_color;
        $this->notificationDate = $notification->date;
        $this->margin = $margin;
        $this->padding = ($margin == 'm-1') ? "p-6" : "p-3";
        $this->border = ($margin == 'm-1') ? "border border-gray-lightest shadow" : "";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.controls.notification');
    }
}
