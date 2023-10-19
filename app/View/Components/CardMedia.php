<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;
use App\View\Components\CommonComponent;
use Illuminate\Support\Collection;

class CardMedia extends CommonComponent
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $orientation;
    public $attributes;
    public $cardhref;
    public $eyebrowhref;

    /**
     * Create the component instance.
     *
     * @param  string  $class
     * @param  string  $stack
     * @param  string  $message
     * @param  string  $attributes
     * @param  string  $orientation
     * @param  string  $cardhref
     * @param  string  $eyebrowhref
     * @return void
     */
    public function __construct($class = null, $stack = null, $orientation = "horizontal", $cardhref = null, $eyebrowhref =null)
    {
        parent::__construct($class.'c-card-media', $stack);

        if($orientation == 'vertical') {
            $this->orientation = ' u-d-flex u-flex-column';
        }
        $this->class .= $this->orientation;
        $this->cardhref = $cardhref;
        $this->eyebrowhref = $eyebrowhref;
    }

    private function processObject($object)
    {

        if ($object) {
            $stackArray = json_decode($object, true);
            if(json_last_error()) {

                $stackArray = json_decode(html_entity_decode($object), true);
            }
            return $stackArray;
        }

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {

        return $this->view('components.card-media');
    }
}
