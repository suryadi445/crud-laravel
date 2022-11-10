<?php

namespace App\View\Components;

use Illuminate\View\Component;

class inputFile extends Component
{
    public $tag;
    public $field;
    public function __construct($tag, $field)
    {
        $this->tag = $tag;
        $this->field = $field;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-file');
    }
}
