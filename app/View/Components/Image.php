<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Image extends Component
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $as;
    public $ratio;
    public $class;
    public $isLazy;
    public $placeholder;
    public $imgClass;
    public $objectFit;
    public $figCaption;
    public $captionClass;
    public $captionContent;

    /**
     * The alert message.
     *
     * @var string
     */
    public $message;

    /**
     * The alert types.
     *
     * @var array
     */

    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $message
     * @return void
     */
    public function __construct(
        $class = '',
        $as = 'figure',
        $imgClass = '',
        $figCaption = '',
        $captionContent = null,
        $message = null,
        $placeholder = '',
        $isLazy = false,
        $ratio=null,
        $captionClass = null,
        $objectFit=null
    ) {
        if(isset($placeholder)) {
            $this->placeholder = $placeholder;
        }
        if($as == '') {
            $as = 'figure';
        }
        if($objectFit == '') {
            $objectFit = $objectFit;
        } elseif(isset($objectFit)) {
            $objectFit=' c-image-img--'.$objectFit;
        }
        $this->as = $as;
        $this->class = 'c-image '. $ratio. ' ' . $class;
        $this->imgClass = 'c-image-img ' .  $imgClass. ' ' .$objectFit;
        if($isLazy) {
            $this->imgClass = 'c-image-img ' .  $imgClass. ' ' .$objectFit . ' js-lazy-media ';
        }
        $this->figCaption = 'c-image-caption' . $figCaption. ' ' . $captionClass;
        $this->captionContent = $captionContent;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.image');
    }
}
