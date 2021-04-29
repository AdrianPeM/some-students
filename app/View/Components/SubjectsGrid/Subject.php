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
                return 'blue-300';
            case 'blocked':
                return 'gray-300';
            case 'coursing':
                return 'green-300';
            default:
                return 'gray-100';
        }
    }

    public function statusText()
    {
        switch ($this->status) {
            case 'active':
                return'blue-600';
            case 'blocked':
                return 'gray-600';
            case 'coursing':
                return 'green-600';
            default:
                return 'gray-800';
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
