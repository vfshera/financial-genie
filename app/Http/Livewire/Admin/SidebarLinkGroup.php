<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class SidebarLinkGroup extends Component
{
    public $links;

    public $title;

    public $openIf;

    public function render()
    {
        return view('livewire.admin.sidebar-link-group');
    }
}
