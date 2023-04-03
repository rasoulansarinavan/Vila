<?php

namespace App\Http\Livewire\Admin\Index;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('admin.livewire.index.index')->extends('admin.layouts.app');
    }
}
