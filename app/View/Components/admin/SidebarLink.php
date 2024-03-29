<?php

namespace App\View\Components\admin;

use Illuminate\View\Component;

class SidebarLink extends Component
{
    public $link;

    public $isNested;

    public $isActive;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($active = false, $nested = false, $link = '#')
    {
        $this->isNested = $nested;
        $this->isActive = $active;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.sidebar-link');
    }
}
