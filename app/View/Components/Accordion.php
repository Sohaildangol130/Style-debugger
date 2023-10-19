<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Accordion extends Component
{
    /**
     * The CSS class for the accordion.
     *
     * @var string
     */
    public $class;
    public $block;
    public $as;

    /**
     * The items for the accordion.
     *
     * @var array
     */
    public $items;

    /**
     * Create the component instance.
     *
     * @param string $class
     * @param string $as
     * @param array $items
     * @return void
     */
    public function __construct($class = '', $as = 'div', $items = [],$block=null)
    {
        $this->class = 'c-accordion ' . $class;
        $this->as = $as;
        $this->items = $items;
        $this->block = $block;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.accordion');
    }
}
