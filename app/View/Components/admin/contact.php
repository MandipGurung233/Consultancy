<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class contact extends Component
{
    /**
     * Create a new component instance.
     */
    public $contact;
    public function __construct($contact)
    {
        $this->contact=$contact;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.contact');
    }
}
