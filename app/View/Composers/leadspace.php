<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Leadspace extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'blocks.leadspace',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $content = get_field('leadspace');
        $leadspaceLayout = isset($content['leadspace_layout']) ? $content['leadspace_layout'] : 'default';
        $blockAligns = isset($content['block_aligns']) ? $content['block_aligns'] : '';
        $eyebrow = $content['eyebrow'] ?? false;
        // dd($content);
        $cta = isset($content['cta']) ? $content['cta'] : false;
        $title = $content['title'] ?? false;
        $desc = $content['description'] ?? false;
        $hasVideo = $content['has_video'] ?? false;
        $video = $content['video'] ?? false;
        // dd($desc);
        $image = (isset($content['image']) && is_array($content['image'])) ? $content['image'] : '';

        $colStart = '';
        if ($blockAligns == 'start') {
            $blockAlignData = 'start';
            $colStart = 'col-start-lg-2';
        } elseif ($blockAligns == 'center') {
            $blockAlignData = 'center';
            $colStart = 'col-start-lg-5';
        } else {
            $blockAlignData = 'end';
            $colStart = 'col-start-lg-8';
        }

        return [
            'blockAlignData' => $blockAlignData,
            'eyebrow' => $eyebrow,
            'cta' => $cta,
            'title' => $title,
            'description' => $desc,
            'image' => $image,
            'colStart' => $colStart,
            'leadspaceLayout' => $leadspaceLayout,
            'hasVideo' => $hasVideo,
            'video' => $video,

        ];
    }

}
