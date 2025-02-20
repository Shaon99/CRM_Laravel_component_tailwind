<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PhoneInput extends Component
{
    public string $name;
    public string $id;
    public string $codeName;
    public string $codeId;
    public array $codes;
    public ?string $value;
    public ?string $placeholder;
    public ?string $selectedCode;
    public bool $required;

    public function __construct(
        string $name,
        string $id,
        string $codeName = 'phone_code',
        string $codeId = 'phone_code',
        array $codes = ['+050', '+051', '+052'],
        string $value = null,
        string $placeholder = null,
        string $selectedCode = null,
        bool $required = false
    ) {
        $this->name = $name;
        $this->id = $id;
        $this->codeName = $codeName;
        $this->codeId = $codeId;
        $this->codes = $codes;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->selectedCode = $selectedCode;
        $this->required = $required;
    }

    public function render()
    {
        return view('components.phone-input');
    }
}
