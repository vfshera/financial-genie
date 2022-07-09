<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GenieCards extends Component
{
    public $feeds;

    public $cardType;

    public $section;

    public $title;

    public $limit;

    public $types = ['SMALL' => 'small-card', 'BIG' => 'big-card', 'TOP_HALF_BIG' => 'half-big-card'];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($feeds = [], $cardType = 'SMALL', $section = '', $title = '', $limit = 8)
    {
        $this->feeds = $feeds;
        $this->cardType = $cardType;
        $this->section = $section;
        $this->title = $title;
        $this->limit = $limit;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.genie-cards');
    }
}
