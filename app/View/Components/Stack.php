<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;
use App\View\Components\CommonComponent;

class Stack extends CommonComponent
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $type;
    public $as;


    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $message
     * @return void
     */
    public function __construct($class = '', $stack = null, $message = null, $as = 'div')
    {

        parent::__construct($class, $stack);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.stack');
    }
}
