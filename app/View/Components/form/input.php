<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class input extends Component
{
    public $label;
    public $inputType;
    public $name;
    public $placeholder;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = 'Input', $type = 'text', $name = '', $placeholder = '', $value = '')
    {
        $this->label = $label;
        $this->inputType = $type;
        $this->name = $name;
        $this->value = $value;
        $this->placeholder = $placeholder == '' ? 'Enter ' . strtolower($label) . '...' : $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input');
    }
}