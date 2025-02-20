<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Label extends Component
{
    public string $for;
    public bool $required;

    /**
     * Create a new component instance.
     *
     * @param string $for
     * @param bool $required
     */
    public function __construct(string $for, bool $required = false)
    {
        $this->for = $for;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.label');
    }
}
