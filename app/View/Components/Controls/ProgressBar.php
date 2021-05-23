<?php

namespace App\View\Components\Controls;

use Illuminate\View\Component;

class ProgressBar extends Component
{
    public $status;
    public $statusColor;
    public $perc;
    public $progress;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($total, $progress)
    {
        $this->perc = intval(($progress * 100) / $total);
        $this->progress = $progress;
        if($this->progress <= 0) {
            $status = "notstarted";
        } else if($this->progress > 0 && $this->progress < $total) {
            $status = "progress";
        } else if($this->progress >= $total) {
            $status = "finished";
        }

        switch($status) {
            case "progress":
                $this->status = "EN PROGESO";
                $this->statusColor = "indigo";
                break;
            case "notstarted":
                $this->status = "SIN INICIAR";
                $this->statusColor = "gray";
                break;
            case "finished":
                $this->status = "FINALIZADO";
                $this->statusColor = "green";
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.controls.progress-bar');
    }
}
