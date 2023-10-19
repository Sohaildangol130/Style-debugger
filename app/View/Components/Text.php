<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Text extends Component
{
    /**
     * The alert class.
     *
     * @var string
     */
    public $variant;
    public $class;
    public $as;

    /**
     * The alert message.
     *
     * @var string
     */
    public $message;

    /**
     * The alert classes.
     *
     * @var array
     */

    /**
     * Create the component instance.
     *
     * @param  string  $message
     * @return void
     */
    public function __construct($class = '', $message = null, $as = 'div', $variant = null)
    {
        if($as == '') {
            $as = 'div';
        }
        $this->class = $class.' '.$variant;
        $this->as = $as;

        // $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.text');
    }
}
