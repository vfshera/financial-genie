<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GenieCardItem extends Component
{
    public $card;
    public $enlarged;
    public $section;
    public $types = ['SMALL' => 'small-card', 'BIG' => 'big-card', 'TOP_HALF_BIG' => 'half-big-card'];
    public $cardType;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($card, $enlarged = false, $type = 'SMALL', $section)
    {
        $this->card = $card;
        $this->section = $section;
        $this->enlarged = $enlarged;
        $this->cardType = $this->types[$type];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.genie-card-item');
    }
}