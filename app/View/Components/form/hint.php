<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class hint extends Component
{
    public $name;

    public $hint;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name = 'Hint', $hint = 'this is a hint value')
    {
        $this->name = $name;
        $this->hint = $hint;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.hint');
    }
}
