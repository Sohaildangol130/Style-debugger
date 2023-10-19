<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;
use App\View\Components\CommonComponent;

class Headline extends CommonComponent
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $as;
    public $blockAligns;
    public $eyebrow;
    public $title;
    public $description;
    public $cta;

    /**
     * Create the component instance.
     *
     * @param  string|null  $class
     * @param  string|null  $stack
     * @param  string|null  $message
     * @param  string|null  $as
     * @param  string|null  $blockAligns
     * @param  string|null  $eyebrow
     * @param  string|null  $title
     * @param  string|null  $description
     * @param  string|null  $cta
     * @param  string|null  $order
     * @return void
     */
    public function __construct(?string $class = null, ?string $stack = null, ?string $message = null, ?string $as = 'header', ?string $blockAligns = null, ?string $eyebrow = null, ?string $title = null, ?string $description = null, ?string $cta = null, ?string $order = null)
    {
        // Start the 'foo' timer:
        do_action('qm/start', 'headline');
        parent::__construct($class, $stack);
        $this->as = (isset($as) && $as !== '') ? $as : 'header';
        $this->blockAligns = $blockAligns ? ' u-text-align-' . $blockAligns : '';
        $this->class .= $this->blockAligns;

        $this->eyebrow = ( isset($eyebrow) && $eyebrow !== '' ) ? $this->processObject($eyebrow) : false;
        $this->title = ( isset($title) && $title !== '' ) ? $this->processObject($title) : false;
        $this->description = ( isset($description) && $description !=='') ? $this->processObject($description) : false;
        $this->cta = ( isset($cta) && $cta !=='' ) ? $this->processObject($cta) : false;
        // Start the 'foo' timer:
        do_action('qm/stop', 'headline');
    }

    private function processObject($object)
    {
        if (!empty($object)) {
            
            // control characters removed from objects
            if(preg_match('/[[:cntrl:]]/', $object)) {
                $object = preg_replace('/[[:cntrl:]]/', '', $object);
            }
            if( json_decode(html_entity_decode($object), true) ) {
                $stackArray = json_decode(html_entity_decode($object), true);
            } else {
                $stackArray = json_decode($object, true);
            }


            if (json_last_error() !== JSON_ERROR_NONE) {
                // Handle the JSON error (e.g., throw an exception or log the error)
                throw new \RuntimeException('JSON Error: ' . json_last_error_msg());
            }

            return $stackArray;
        }

        return null;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.headline');
    }
}
