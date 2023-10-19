<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;
use App\View\Components\CommonComponent;

class Video extends CommonComponent
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $stack;
    public $as;
    public $src;
    public $ratio;
    public $class;
    public $types;
    public $isLazy;
    public $autoPlay;
    public $placeholder;
    public $videoClass;
    public $figureClass;
    public $objectFit;
    public $videoType;
    public $videoHost;
    public $showVideo;

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
        $stack = null,
        $class = '',
        $as = 'div',
        $autoPlay = false,
        $types = 'default',
        $figureClass = '',
        $videoClass = '',
        $message = null,
        $placeholder = '',
        $src = '',
        $isLazy = false,
        $ratio=null,
        $objectFit=null,
        $videoHost='',
        $videoType=''
    ) {
        parent::__construct($class, $stack);

        $this->videoType = $videoType;

        $this->videoHost = $videoHost;
        if($autoPlay == 'true') {
            $this->autoPlay = 'autoplay muted';
        } else {
            $this->autoPlay = '';
        }

        if(isset($placeholder)) {
            $this->placeholder = $placeholder;
        }

        if($objectFit == '') {
            $objectFit = $objectFit;
        } elseif(isset($objectFit)) {
            $objectFit='c-video-player--'.$objectFit;
        }


        $this->src = $src;
        $this->showVideo = $src ?? false;
        $this->class = 'c-video ' .  $class;

        if($videoHost == '' || $videoHost == 'default') {
            $this->class= $this->class .' c-video--default';
        }

        $this->figureClass =  $figureClass.' c-video-figure' . ' ' . $ratio;

        $this->videoClass = 'c-video-player' .  $videoClass. ' ' .$objectFit;

        if($isLazy) {
            $this->videoClass = 'c-video-player' .  $videoClass. ' ' .$objectFit . ' js-lazy-media ';
        }

        if($videoHost == 'youtube' || $videoHost == 'vimeo') {
            $this->class = $this->class.' c-video--'.$videoHost;
        }

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.video');
    }
}
