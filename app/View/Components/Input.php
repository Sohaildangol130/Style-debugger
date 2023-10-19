<?php

namespace App\View\Components;

use App\View\Components\FormComponent;

class Input extends FormComponent
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $as;
    public $orientation;
    public $attributes;
    public $type;
    public $placeholder;
    public $label;

    /**
     * Create the component instance.
     *
     * @param  string  $class
     * @param  string  $stack
     * @param  string  $message
     * @param  string  $attributes
     * @param  string  $as
     * @param  string  $orientation
     * @return void
     */
    public function __construct($class = null, $stack = null, $as = 'div', $orientation = "horizontal", $type = 'text', $placeholder = null, $label = null)
    {
        parent::__construct($class, $stack, $label, $orientation);


        $this->placeholder = empty($placeholder) ? '' : $placeholder;

        $this->type = empty($type) ? 'text' : $type;



    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {

        return $this->view('components.input');
    }
}
