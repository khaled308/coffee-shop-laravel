<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Pagination extends Component
{
   
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function render(): View|Closure|string
    {
        return view('components.pagination', [
            'data' => $this->data,
        ]);
    }
}
