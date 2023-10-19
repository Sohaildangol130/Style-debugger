<?php

namespace App\View\Components;

use App\View\Components\CommonComponent;

class FormComponent extends CommonComponent
{
    /**
     * This PHP function constructs an object with optional parameters for class, stack, label, and
     * orientation.
     *
     * @param class The "class" parameter is used to specify additional CSS classes for the element. It
     * allows you to add custom styling to the element.
     * @param stack The "stack" parameter is used to specify the stack class for the object. It is passed
     * as an argument to the parent constructor.
     * @param label The "label" parameter is used to set the label for the object being constructed. It can
     * be any string value that you want to assign as the label.
     * @param orientation The "orientation" parameter determines the layout orientation of the element. If
     * the value is set to "vertical", the element will be displayed in a vertical layout using flexbox.
     */
    public function __construct($class = null, $stack = null, $label = null, $orientation = null)
    {
        parent::__construct($class, $stack);

        $this->label = $label;

        if($orientation == 'vertical') {
            $this->orientation = ' u-d-flex u-flex-column';
        }
        $this->class .= $this->orientation;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.common-component');
    }
}
