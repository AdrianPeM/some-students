<?php

namespace App\View\Components\SubjectsGrid;

use Illuminate\View\Component;

class Subject extends Component
{
    public $subject;
    public $status;
    // public $bgColor = 'gray-100';
    // public $textColor = 'gray-800';
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($subject, $status)
    {
        $this->subject = $subject;
        // $this->id = $id;
        // $this->name = $name;
        $this->status = $status;
    }

    public function statusBg()
    {
        switch ($this->status) {
            case 'active':
                return 'blue';
            case 'blocked':
                return 'gray';
            case 'coursing':
                return 'green';
            default:
                return 'gray';
        }
    }

    public function statusText()
    {
        switch ($this->status) {
            case 'active':
                return'blue';
            case 'blocked':
                return 'gray';
            case 'coursing':
                return 'green';
            default:
                return 'gray';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.subjects-grid.subject');
    }
}
