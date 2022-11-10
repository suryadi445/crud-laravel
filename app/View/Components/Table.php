<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $nama;
    public $umur;
    public $table;
    public function __construct($nama, $umur, $table)
    {

        $this->nama = $nama;
        $this->umur = $umur;
        $this->table = $table;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.table');
    }
}
