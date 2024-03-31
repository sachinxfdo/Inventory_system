<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
    public $x = 10;

    #[Layout('layouts.app')]
    public function render()
    {
        return view('domain.home.index');
    }

    public function hello()
    {

    }
}
