<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class CommonComponent extends Component
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $type;
    public $class;
    public $as;
    private $stack;


    /**
     * Create the component instance.
     *
     * @param  string  $class
     * @param  string  $stack
     * @param  string  $message
     * @param  string  $as
     * @return void
     */
    public function __construct($class = '', $stack = null, $message = null, $as = 'div')
    {

        $this->class = $class;
        $this->processStack($stack);
        $this->as = empty($as) ? 'div' : $as;
    }

    /**
     * Process the stack attribute.
     *
     * @param  string|null  $stack
     * @return void
     */
    private function processStack($stack)
    {
        try {
            //code...
            if ($stack) {
                $stackArray = json_decode($stack, true);
                if (is_array($stackArray)) {
                    foreach ($stackArray as $key => $value) {
                        $newClass = ($key == 'default') ? "l-stack-{$value}" : "l-stack-{$key}-{$value}";
                        $this->class .= " {$newClass}";
                    }
                }
            }

        } catch (\Throwable $th) {
            //throw $th;
        }
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
