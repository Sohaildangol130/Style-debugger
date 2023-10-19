<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Link extends Component
{
    public $class;
    public $as;

    /**
     * Create the component instance.
     *
     * @param  string  $class
     * @param  bool    $default
     * @param  string  $as
     * @param  string  $variant
     * @param  string  $buttonTheme
     * @return void
     */
    public function __construct($class = '', $default = false, $as = 'a', $variant = null, $buttonTheme = null)
    {
        $this->as = $as;
        
        if ($variant !== null) {
            $class = 'c-btn--' . $variant . ' ' . $class;
        }

        if ($buttonTheme !== null) {
            $class = 'c-btn--' . $buttonTheme . ' ' . $class;
        }

        $this->class = $default ? 'c-text-link ' . $class : 'c-btn ' . $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.link');
    }
}
