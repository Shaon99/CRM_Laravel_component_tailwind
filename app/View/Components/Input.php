<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public string $type;
    public string $name;
    public ?string $value;
    public ?string $placeholder;
    public bool $required;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $name,
        string $type = 'text', // Default to 'text'
        ?string $value = null, // Nullable default value
        ?string $placeholder = null, // Nullable default value
        bool $required = false // Default to not required
    ) {
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.input');
    }
}
