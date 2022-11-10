<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{

    public $value;
    public $field;
    public $tag;

    public function __construct($field, $tag, $value)
    {
        $this->field = $field;
        $this->tag = $tag;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
