<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GenieCardItem extends Component
{
    public $post;
    public $enlarged;
    public $bigFirst;
    public $section;
    public $types = ['SMALL' => 'small-card', 'BIG' => 'big-card', 'TOP_HALF_BIG' => 'half-big-card'];
    public $cardType;
    public $index;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($post, $enlarged = false, $type = 'SMALL', $section, $index = 10)
    {
        $this->post = $post;
        $this->section = $section;
        $this->enlarged = $enlarged;
        $this->bigFirst = $index == 0 && $section == 'feed';
        $this->cardType = $this->types[$type];
        $this->index = $index;
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