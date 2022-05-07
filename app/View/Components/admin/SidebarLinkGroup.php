<?php

namespace App\View\Components\admin;

use Illuminate\View\Component;

class SidebarLinkGroup extends Component
{
    public $links;
    public $title;
    public $openIf;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = "", $links = [], $openIf = false)
    {
        $this->links = $links;
        $this->title = $title;
        $this->openIf = $openIf;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.sidebar-link-group');
    }
}