<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public ?string $href;
    public ?string $type;
    public ?string $icon;
    public ?string $bgColor;
    public ?string $hoverColor;
    public ?string $darkBgColor;
    public ?string $darkHoverColor;
    public ?string $textColor;
    public ?string $padding;
    
    public function __construct(string $href = null, string $type = 'button', string $icon = null,string $bgColor = 'bg-zinc-100',
    string $hoverColor = 'hover:bg-zinc-200',
    string $darkBgColor = 'dark:bg-zinc-800',
    string $darkHoverColor = 'dark:hover:bg-zinc-700',
    string $textColor = 'text-zinc-800',
    string $padding = 'px-4'
    )
    {
        $this->href = $href;
        $this->type = $type;
        $this->icon = $icon;
        $this->bgColor = $bgColor;
        $this->hoverColor = $hoverColor;
        $this->darkBgColor = $darkBgColor;
        $this->darkHoverColor = $darkHoverColor;
        $this->textColor = $textColor;
        $this->padding = $padding;
    }

    public function render()
    {
        return view('components.button');
    }
}
