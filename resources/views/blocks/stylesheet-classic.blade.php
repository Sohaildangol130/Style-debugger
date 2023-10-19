{{--
    script[leadspace.js,banner.js,slider.js]script
    style[modules/styleguide.scss]style
    Title: Styleguide Classic
    Description: Styleguide Classic
    Category: Styleguide Classic
    Icon: admin-tools
    Keywords: Styleguide Classic
    Mode: auto
    Align: center
    PostTypes: post page
    SupportsMode: false
    SupportsMultiple: true
    SupportsAlign: left right
    SupportsAlignContent: center
    EnqueueStyle:
    EnqueueScript:
    EnqueueAssets: assetsEnqueue
    EnqueueAssetsCSS: styles/styleguide.css
    EnqueueAssetsJS: scripts/banner.js,scripts/slider.js
--}}

@if ( ! empty( $is_preview  ) )
    @php
        /* Render screenshot for example */
        $imgUrl = \Roots\asset('images/preview/leadspace.webp')->uri();
    @endphp
    <img loading="lazy" src="{!! $imgUrl !!}" style="width:100%;height:auto;">
@else
    @php
        $blockId = $block['id'];
    @endphp

    <div class="styleguide-wrap">
        <div class="container-fluid">
            <div class="l-row">
                <div class="l-col-lg-3">
                    <aside class="styleguide-sidebar sticky-top">
                        <ul>
                            <li class="list-group-item">
                                <a href="#stack" class="anchor-link">Stack</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#grid" class="anchor-link">Grid</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#text" class="anchor-link">Text</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#headline" class="anchor-link">Headline</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#link" class="anchor-link">Link</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#image" class="anchor-link">Image</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#video" class="anchor-link">Video</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#input" class="anchor-link">Input</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#select" class="anchor-link">Select</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#card-media" class="anchor-link">Card media</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#typography" class="anchor-link">Typography</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#icons" class="anchor-link">Icons</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#utilities" class="anchor-link">Utilities</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#docs" class="anchor-link">Doc</a>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="l-col-lg">
                   
                    <section class="style-token l-stack-5 content-wrap" id="stack">
                        <header class="l-stack-1">
                            <h4>Stack</h4>
                            <div class="l-container--fluid">
                                <div class="l-grid">
                                    <div class="col-span-6">
                                        <span class="u-d-block">
                                            <code>&lt;x-stack stack='{"default": 1, "sm": 3, "md": 4 , "lg":5}' id="" as="header"&gt;
                                                &lt;/x-stack&gt;</code>
                                        </span>
                                    </div>
                                    <div class="col-span-6">
                                        <span class="u-d-block">
                                            <code>&lt;header class="l-stack-1 l-stack-sm-3 l-stack-md-4 l-stack-lg-5"&gt;
                                                &lt;/x-header&gt;</code>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="note">
                                <p class="u-mb-4">
                                <strong>Note: </strong>
                                <ul class="l-stack-1">
                                    <li>
                                        <small>as="header" will change the x-stack component tag to header. If as not mentioned in x-stack component or as="", will take div as default</small>
                                    </li>
                                    <li>
                                        <small>stack give spacing between the headline child elements. Where default, sm, md represents breakpoints and 1,3,4 represents spacing</small>
                                    </li>
                                </ul>
                                </p>
                            </div>
                        </header>

                        <x-stack class="" id="" as="headline" stack='{"default": "1", "sm": "3", "md": "4" , "lg":"5"}'>
                            <h5>H1 Title</h5>
                            <h6>H2 Title</h6>
                            <p>Paragraph</p>
                        </x-stack>
                    </section>

                    
                    <section class="content-wrap" id="grid">
                        <header class="l-stack-1">
                            <h4>Grid</h4>
                            <div class="l-container--fluid">
                                <div class="l-grid">
                                    <div class="col-span-12">
                                        <span class="u-d-block">
                                            <code>&lt;div class="l-container" &gt;
                                                    <div class="u-ps-2">&lt;div class="l-grid" &gt;</div>
                                                        <div class="u-ps-4">&lt;div class="col-span-3" &gt;&lt;/div&gt;</div>
                                                        <div class="u-ps-4">&lt;div class="col-span-6" &gt;&lt;/div&gt;</div>
                                                    <div class="u-ps-2">&lt;/div&gt;</div>
                                                &lt;/div&gt;
                                            </code>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="note">
                                <p class="u-mb-4">
                                <strong>Note: </strong><small># of columns - 12</small>
                                </p>
                            </div>
                        </header>
                        <div class="l-container--fluid u-mt-4">
                            <div class="l-grid">
                                <div class="col-span-1 u-bg-secondary u-text-light">1</div>
                                <div class="col-span-1 u-bg-secondary u-text-light">2</div>
                                <div class="col-span-1 u-bg-secondary u-text-light">3</div>
                                <div class="col-span-1 u-bg-secondary u-text-light">4</div>
                                <div class="col-span-1 u-bg-secondary u-text-light">5</div>
                                <div class="col-span-1 u-bg-secondary u-text-light">6</div>
                                <div class="col-span-1 u-bg-secondary u-text-light">7</div>
                                <div class="col-span-1 u-bg-secondary u-text-light">8</div>
                                <div class="col-span-1 u-bg-secondary u-text-light">9</div>
                                <div class="col-span-1 u-bg-secondary u-text-light">10</div>
                                <div class="col-span-1 u-bg-secondary u-text-light">11</div>
                                <div class="col-span-1 u-bg-secondary u-text-light">12</div>
                            </div>
                        </div>
                    </section>

                    <section class="content-wrap" id="text">
                        <header class="l-stack-1">
                            <h4>Text Component</h4>
                            <div class="l-container--fluid">
                                <div class="l-grid">
                                    <div class="col-span-6">
                                        <span class="u-d-block">
                                            <code>&lt;x-text as={h1/h2/h3/h4/h5/h6/p} class="u-text-primary" variant="h1"&gt;
                                                &lt;/x-text&gt;</code>
                                        </span>
                                    </div>
                                    <div class="col-span-6">
                                        <span class="u-d-block">
                                            <code>&lt;h1 class="u-text-primary h1" variant="h1"&gt;
                                                &lt;/h1&gt;</code>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="note">
                                <p class="u-mb-4">
                                <strong>Note: </strong>
                                <ul class="l-stack-1">
                                    <li>
                                        <small>as="h3" will change the x-text component tag to h3. If as not mentioned in x-text component or as="", will take div as default</small>
                                    </li>
                                    <li>
                                        <small>variant will add typography variant as class in the text component</small>
                                    </li>
                                </ul>
                                </p>
                            </div>
                        </header>
                        
                        <x-stack class="l-stack-2" as="">
                            <x-text data-class='data-class' variant="h1" id='h1' data-id='h1' as="h1">H1 Header</x-text>
                            <x-text variant="h2" as='h2'>H2 Header</x-text>
                            <x-text variant="h3" as='h3'>H3 Header</x-text>
                            <x-text variant="h4" as='h4'>H4 Header</x-text>
                            <x-text variant="h5" as='h5'>H5 Header</x-text>
                            <x-text variant="h6" as='h6'>H6 Header</x-text>
                            <x-text class='l-stack-1' variant="">
                                <p>Paragraph 1: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, dolore.</p>
                                <p>Paragraph 2: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, dolore.</p>
                                <p>Paragraph 3: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, dolore.</p>
                            </x-text>
                        </x-stack>
                    </section>

                    <section class="content-wrap" id="headline">
                        <header class="l-stack-1">
                            <h4>Heading/Headline Component</h4>
                            <div class="l-container--fluid">
                                <div class="l-grid">
                                    <div class="col-span-12">
                                        <span class="u-d-block">
                                            <code>&lt;x-headline as={div|header} 
                                                blockAligns='start' 
                                                eyebrow='{"content":"this is eyebrow"}'
                                                title='{"variant":""}'
                                                description='{"content":" this is description"}'
                                                cta='{"href":"https://google.com","buttonTheme":"primary","target":"_blank"}' &gt;
                                                &lt;/x-headline&gt;</code>
                                        </span>
                                    </div>
                                    <div class="col-span-12">
                                        <span class="u-d-block">
                                            <code>&lt;header u-text-align-start" variant="h1" &gt;
                                                &lt;span class=""&gt;this is eyebrow&lt;/span&gt;
                                                &lt;div class=""&gt;this is title&lt;/div&gt;
                                                &lt;div class=""&gt;this is description&lt;/div&gt;
                                                &lt;a class="c-btn c-btn--primary c-btn--outline" href="https://google.com" target="_blank"&gt;click here&lt;/a&gt;
                                                &lt;/header&gt;
                                            &lt;/header&gt;</code>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="note">
                                <p class="u-mb-1">
                                <strong>Note: </strong>
                                <ul class="l-stack-1">
                                    <li>
                                        <small>as="div" will change the x-headline component tag to div. If as not mentioned in x-headline component or as="", will take header as default</small>
                                    </li>
                                    <li>
                                        <small>blockAligns will aligns the content to start, center or end</small>
                                    </li>
                                    <li>
                                        <small>stack give spacing between the headline child elements. Where default, sm, md represents breakpoints and 1,3,4 represents spacing</small>
                                    </li>
                                    <li>
                                        <small>eyebrow, title, description and cta value, attributes and class can be set directly from headline component</small>
                                    </li>
                                    <li>
                                        <small>if not required we can use slot content to add any text component, link component or any other components here</small>
                                    </li>
                                </ul>
                                </p>
                            </div>
                        </header>
                        <x-headline class="u-text-dark" stack='{"default": 1, "sm": 3, "md": 4 , "lg":2}' as="" blockAligns='start'
                            eyebrow='{"as":"span","content":"eyebrow","variant":"","class":"order-1"}'
                            title='{"as":"h1","content":"This is title","variant":"","class":"order-2"}'
                            description='{"as":"p","content":" This is description","variant":"","class":"order-3"}'
                            cta='{"as":"","title":"click here","variant":"outline","class":"order-4","href":"https://google.com","buttonTheme":"primary","target":"_blank"}'
                        >
                        </x-headline>
                        <x-headline class="" as="" blockAligns='end'
                            stack='{"default": "1"}'
                            eyebrow='{"as":"span","content":"this is eyebrow","variant":"","class":"order-4"}'
                            description='{"as":"","content":"lorem ipsum","variant":"","class":"order-3"}'
                            cta='{"as":"","title":"click here","variant":"outline","class":"order-4","href":"https://google.com","buttonTheme":"primary","target":"_blank"}'
                        >
                        </x-headline>
                    </section>


                    <!-- Link -->
                    <section class="content-wrap" id="link">
                        <header class="l-stack-1">
                            <h4>Link/Button</h4>
                            <div class="l-container--fluid">
                                <div class="l-grid">
                                    <div class="col-span-6">
                                        <span class="u-d-block">
                                            <code>&lt;x-link buttonTheme="primary" 
                                                variant="filled" href=""&gt;
                                                &lt;/x-link&gt;</code>
                                        </span>
                                    </div>
                                    <div class="col-span-6">
                                        <span class="u-d-block">
                                            <code>&lt;a&gt; buttonTheme="primary" 
                                                variant="filled" href=""
                                                &lt;/a&gt;</code>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="note">
                                <p class="u-mb-1">
                                <strong>Note: </strong>
                                <ul class="l-stack-1">
                                    <li>
                                        <small><strong>as</strong>="button" will change the x-link component tag to button. If as not mentioned in x-link component or as="", will take a as default</small>
                                    </li>
                                    <li>
                                        <small>default=true make the link as preliminary and add c-text-link to the link</small>
                                    </li>
                                    <li>
                                        <small>title, target, rel, type, tabindex and href can be set in component directly</small>
                                    </li>
                                    <li>
                                        <small>variant: filled or outline will add c-btn--choose-option to class</small>
                                    </li>
                                    <li>
                                        <small>buttonTheme: primary or secondary will add c-btn--choose-option to class</small>
                                    </li>
                                    <li>
                                        <small>as button and type="submit" will make submit button</small>
                                    </li>
                                    <li>
                                        <small>data-disabled will disable the button</small>
                                    </li>
                                </ul>
                                </p>
                            </div>
                        </header>

                        <div class="l-container-fluid">
                            <div class="l-grid">
                                <div class="col-span-6">
                                    <span class="u-d-block">
                                        <code>&lt;x-link default=true href title target rel type tabindex&gt;</code>
                                    </span>
                                </div>
                                <div class="col-span-6">
                                    <x-link class='' 
                                        default=true
                                        title="Title goes here"
                                        target="_blank"
                                        rel=""
                                        type=""
                                        tabindex=1
                                        href=""
                                        >
                                            Link
                                    </x-link>
                                </div>                            
                                <div class="col-span-6">
                                    <span class="u-d-block">
                                        <code>&lt;x-link buttonTheme="primary" variant="filled" &gt;</code>
                                    </span>
                                </div>
                                <div class="col-span-6">
                                    <x-link 
                                        buttonTheme="primary"
                                        variant="filled"
                                        href=""
                                        >
                                            Button filled primary
                                    </x-link>
                                </div>                            
                                <div class="col-span-6">
                                    <span class="u-d-block">
                                        <code>&lt;x-link buttonTheme="primary" variant="outline" &gt;</code>
                                    </span>
                                </div>
                                <div class="col-span-6">
                                    <x-link 
                                        buttonTheme="primary"
                                        variant="outline"
                                        href=""
                                        >
                                            Button outline primary
                                    </x-link>
                                </div>                            
                                <div class="col-span-6">
                                    <span class="u-d-block">
                                        <code>&lt;x-link as="button" type="submit" name value form &gt;</code>
                                    </span>
                                </div>
                                <div class="col-span-6">
                                    <x-link 
                                        as="button"
                                        type="submit"
                                        name="submit-button"
                                        value="submit-data"
                                        form="my-form"
                                        variant="outline"
                                        buttonTheme="primary"
                                        class="u-ms-5"
                                        >
                                            Button Submit
                                    </x-link>
                                </div>                            
                                <div class="col-span-6">
                                    <span class="u-d-block">
                                        <code>&lt;x-link data-disabled &gt;</code>
                                    </span>
                                </div>
                                <div class="col-span-6">
                                    <x-link 
                                    data-disabled
                                        >
                                            Button Disabled
                                    </x-link>
                                </div>                            
                            </div>
                        </div>
                    </section>

                    <!-- Image Component -->
                    <section class="content-wrap" id="image">
                        <header class="l-stack-1">
                            <h4>Image Component</h4>
                            <div class="l-container--fluid">
                                <div class="l-grid">
                                    <div class="col-span-6">
                                        <span class="u-d-block">
                                            <code>&lt;x-image class="" ratio="u-ratio-1x1" objectFit="cover" isLazy=true placeholder="image-url" captionClass="u-text-align-end" captionContent="A caption for the above image"&gt;
                                                &lt;/x-image&gt;</code>
                                        </span>
                                    </div>
                                    <div class="col-span-6">
                                        <span class="u-d-block">
                                            <code>
                                                &lt;figure class="c-image u-ratio-1x1"&gt;
                                                    &lt;img src="" alt="" title="" data-src="" srcset="" width="" height="" class="c-image-img c-image-img--cover is-lazy-media-loaded"&gt;
                                                    &lt;figcaption class="c-image-caption u-text-align-end"&gt;A caption for the above image&lt;/figcaption&gt;
                                                &lt;/figure&gt;
                                            </code>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="note">
                                <strong>Note: </strong>
                                <ul class="l-stack-1">
                                    <li>
                                        <small>If set as="div" will change the x-image component tag to div. If as not mentioned in x-image component or as="", will take figure as default</small>
                                    </li>
                                    <li>
                                        <small>ratio will ensure that the element maintains an aspect ratio. u-ratio-1x1 is the utility class creates square-shaped container or component</small>
                                    </li>
                                    <li>
                                        <small>imgClass will add classes to img tag</small>
                                    </li>
                                    <li>
                                        <small>objectFit will change the property of Object fit: cover, fill, contain as generated by object fit utility class</small>
                                    </li>
                                    <li>
                                        <small>isLazy set make the image lazyload.On default it will be false. Set true to enable lazyload</small>
                                    </li>
                                    <li>
                                        <small>placeholder image when set will show placeholder image in condition of no src or datasrc image set</small>
                                    </li>
                                    <li>
                                        <small>captionClass will add classes to figcaption</small>
                                    </li>
                                </ul>
                            </div>
                        </header>
                        
                        <div class="l-container-fluid">
                            <div class="l-grid">
                                <div class="col-span-4">
                                    <x-image 
                                        as=""
                                        class="" 
                                        imgClass="" 
                                        ratio="u-ratio-1x1"
                                        objectFit="cover"
                                        isLazy=true
                                        placeholder="{{@asset('images/images-placeholder@2x.jpg')}}"
                                        captionClass="u-text-align-end"
                                        captionContent="A caption for the above image"
                                    >
                                    </x-image>
                                </div>
                            </div>
                        </div>
                    </section>


                    <!-- Video Component -->
                    <section class="content-wrap" id="video">
                        <header class="l-stack-1">
                            <h4>Video Component</h4>
                            <div class="l-container--fluid">
                                <div class="l-grid">
                                    <div class="col-span-6">
                                        <span class="u-d-block">
                                            <code>&lt;x-video
                                                    as=""
                                                    class="" 
                                                    isLazy="true"
                                                    videoClass="" 
                                                    figureClass="" 
                                                    objectFit="cover"
                                                    ratio="u-ratio-16x9"
                                                    placeholder=""
                                                    src=""
                                                &gt;
                                                &lt;/x-video&gt;</code>
                                        </span>
                                    </div>
                                    <div class="col-span-6">
                                        <span class="u-d-block">
                                            <code>
                                                &lt;div class="c-video c-video--default"&gt;
                                                    &lt;div class="c-video-wrap"&gt;
                                                        &lt;figure class="c-video-figure u-ratio-16x9"&gt;
                                                            &lt;video id="" playsinline="" loop="" poster="" class="c-video-player c-video-player--cover"&gt;
                                                            &lt;source id="mp4" src="" type="video/mp4"&gt;
                                                            &lt;/video&gt;
                                                        &lt;/figure&gt;
                                                        &lt;div class="c-video-control"&gt;
                                                            &lt;button class="js-video-trigger-btn js-video-player-btn c-video-control-btn"&gt;
                                                            &lt;/button&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="note">
                                <strong>Note: </strong>
                                <ul class="l-stack-1">
                                    <li>
                                        <small>If set as="div" will change the x-image component tag to div. If as not mentioned in x-image component or as="", will take div as default</small>
                                    </li>
                                    <li>
                                        <small>ratio will ensure that the element maintains an aspect ratio. u-ratio-1x1 is the utility class creates square-shaped container or component</small>
                                    </li>
                                    <li>
                                        <small>figureClass will add classes to figure tag</small>
                                    </li>
                                    <li>
                                        <small>videoClass will add classes to video tag</small>
                                    </li>
                                    <li>
                                        <small>objectFit will change the property of Object fit: cover, fill, contain as generated by object fit utility class</small>
                                    </li>
                                    <li>
                                        <small>isLazy set make the image lazyload.On default it will be false. Set true to enable lazyload</small>
                                    </li>
                                    <li>
                                        <small>placeholder image when set will show placeholder image in condition of no src or datasrc image set</small>
                                    </li>
                                    <li>
                                        <small>src will add video source to video tag</small>
                                    </li>
                                </ul>
                            </div>
                        </header>
                        
                        <div class="l-container-fluid">
                            <div class="l-grid">
                                <div class="col-span-8">
                                    <x-video 
                                        as=""
                                        class="" 
                                        isLazy="true"
                                        videoClass="" 
                                        figureClass="" 
                                        objectFit="cover"
                                        ratio="u-ratio-16x9"
                                        placeholder="{{@asset('images/images-placeholder@2x.jpg')}}"
                                        src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
                                    >
                                    </x-video>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Input Component -->
                    <section class="content-wrap" id="input">
                        <header class="l-stack-1">
                            <h4>Input Component</h4>
                            <div class="l-container--fluid">
                                <div class="l-grid">
                                    <div class="col-span-6">
                                        <span class="u-d-block">
                                            <code>&lt;x-input class="" &gt;
                                            stack='{"default": "1","md":"2"}'
                                            orientation="vertical"
                                            type="email"
                                            placeholder="placeholder text goes here"
                                            label="label text goes here"
                                                &lt;/x-input&gt;</code>
                                        </span>
                                    </div>
                                    <div class="col-span-6">
                                        <span class="u-d-block">
                                                <code>
                                                    &lt;div class="l-stack-1 l-stack-md-2 u-d-flex u-flex-column"&gt;<br>
                                                        &lt;label for="input_name" class="c-form-label"&gt;<br>
                                                            label text goes here<br>
                                                        &lt;/label&gt;<br>
                                                        &lt;input type="email" class="c-form-control" placeholder="placeholder text goes here" id="input_name" aria-describedby="" autocomplete="off"&gt;<br>
                                                    &lt;/div&gt;
                                                </code>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="note">
                                <strong>Note: </strong>
                                <ul class="l-stack-1">
                                    <li>
                                        <small>Default x-input component as is div</small>
                                    </li>
                                    <li>
                                        <small>Stack to give spacing between label and input</small>
                                    </li>
                                    <li>
                                        <small>Orientation to arrange vertical or horizontal. On default its horizontal</small>
                                    </li>
                                    <li>
                                        <small>Type on default is text. Could give email/ number/ submit</small>
                                    </li>
                                    <li>
                                        <small>
                                            In token.scss, we can define padding, border width, border color (main-clr), hover/ focus color (support-clr-hover), border radius, label color(label-clr) and placeholder color(placeholder-clr)
                                        </small>
                                    </li>
                                </ul>
                                PS: token.scss: <pre class="p-0">'input': (
                                                'pad-x': 20px,
                                                'pad-y': 10px,
                                                'border-width': 1px,
                                                'main-clr': var(--c-brown-neutral),
                                                'support-clr-hover': var(--c-blue-light),
                                                'border-radius': 0,
                                                'label-clr': var(--c-black-dark),
                                                'placeholder-clr': var(--c-black-dark),
                                            ),</pre>
                            </div>
                        </header>
                        
                        <div class="l-container-fluid u-mt-4">
                            <div class="l-grid">
                                <div class="col-span-8">
                                    <x-input 
                                    stack='{"default": "1","md":"2"}'
                                    orientation="vertical"
                                    type="email"
                                    placeholder="placeholder text goes here"
                                    label="label text goes here"
                                    >
                                    </x-input>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Select Components -->
                    <section class="content-wrap" id="select">
                        <header class="l-stack-1">
                            <h4>Select Component</h4>
                            <div class="l-container--fluid">
                                <div class="l-grid">
                                    <div class="col-span-6">
                                        <span class="u-d-block">
                                            <code>&lt;x-select
                                                stack='{"default": "1","md":"2"}'
                                                orientation="vertical"
                                                label="Select option"
                                                &gt;<br>
                                                    &lt;option selected&gt;Select Options&lt;/option&gt;<br>
                                                    &lt;option value="option1"&gt;Option1&lt;/option&gt;
                                                    <br>
                                                &lt;/x-select&gt;</code>
                                        </span>
                                    </div>
                                    <div class="col-span-6">
                                        <span class="u-d-block">
                                                <code>
                                                    &lt;div class="l-stack-1 l-stack-md-2 u-d-flex u-flex-column"&gt;<br>
                                                        &lt;label for="select_name" class="c-form-label"&gt;<br>
                                                            Select option
                                                        &lt;/label&gt;<br>
                                                        &lt;select id="select_name" class="c-form-control c-form-select" aria-invalid="false"&gt;<br>
                                                            &lt;option selected=""&gt;Select Options&lt;/option&gt;<br>
                                                            &lt;option value="option1"&gt;Option1&lt;/option&gt;<br>
                                                            &lt;option value="option2"&gt;Option2&lt;/option&gt;<br>
                                                            &lt;option value="option3"&gt;Option3&lt;/option&gt;<br>
                                                        &lt;/select&gt;<br>
                                                    &lt;/div&gt;
                                                </code>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="note">
                                <strong>Note: </strong>
                                <ul class="l-stack-1">
                                    <li>
                                        <small>Default x-input component as is div</small>
                                    </li>
                                    <li>
                                        <small>Stack to give spacing between label and input</small>
                                    </li>
                                    <li>
                                        <small>Orientation to arrange vertical or horizontal. On default its horizontal</small>
                                    </li>
                                    <li>
                                        <small>Add label content from label props</small>
                                    </li>
                                    <li>
                                        <small>Add Options from slot</small>
                                    </li>
                                </ul>
                            </div>
                        </header>
                        
                        <div class="l-container-fluid u-mt-4">
                            <div class="l-grid">
                                <div class="col-span-8">
                                    <x-select 
                                    stack='{"default": "1","md":"2"}'
                                    orientation="vertical"
                                    label="Select option"
                                    >
                                    <option selected>Select Options</option>
                                    <option value="option1">Option1</option>
                                    <option value="option2">Option2</option>
                                    <option value="option3">Option3</option>
                                    </x-select>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Card Media Component -->
                    <section class="content-wrap" id="card-media">
                        <header class="l-stack-1">
                            <h4>Card Media Component</h4>
                            <div class="l-container--fluid">
                                <div class="l-grid">
                                    <div class="col-span-6">
                                        <span class="u-d-block">
                                            <code>&lt;x-card-media &gt;
                                                    stack='{"default":"1"}'
                                                    orientation="vertical"
                                                    cardhref="http://cardlink"
                                                    eyebrowhref="http://eyebrowlink"
                                                &lt;/x-card-media&gt;</code>
                                        </span>
                                    </div>
                                    <div class="col-span-6">
                                        <span class="u-d-block">
                                            <code>
                                            &lt;div class="c-card-media"&gt;<br>
                                                    &lt;figure&gt;<br>
                                                        &lt;img src="" class="c-image-img c-image-img--cover"&gt;<br>
                                                    &lt;/figure&gt;<br>
                                                    &lt;div class="u-d-flex u-flex-column l-stack-1"&gt;<br>
                                                        &lt;a href="" title="title" class="c-card-media--eyebrow-link"&gt;
                                                            &lt;span class=""&gt;&lt;/span&gt;
                                                        &lt;/a&gt;<br>
                                                        &lt;h2 class=""&gt;&lt;/h2&gt;<br>
                                                        &lt;p class=""&gt;&lt;/p&gt;<br>
                                                &lt;/div&gt;<br>
                                                &lt;a href="" class="c-card-media--overlay-link" title="title"&gt;link&lt;/a&gt;<br>
                                            &lt;/div&gt;
                                            </code>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="note">
                                <strong>Note: </strong>
                                <ul class="l-stack-1">
                                    <li>
                                        <small>stack give spacing between the card media child elements.</small>
                                    </li>
                                    <li>
                                        <small>Orientation to arrange vertical or horizontal. On default its horizontal</small>
                                    </li>
                                    <li>
                                        <small>cardhref, when set will card overlay link</small>
                                    </li>
                                    <li>
                                        <small>eyebrowhref, when set will wrap eyebrow with link</small>
                                    </li>
                                </ul>
                            </div>
                        </header>
                        
                        <div class="l-container-fluid">
                            <div class="l-grid">
                                <div class="col-span-4">
                                    <x-card-media 
                                        stack='{"default":"1"}'
                                        orientation="vertical"
                                        cardhref="###"
                                        eyebrowhref="##"
                                    >
                                    </x-media>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Accordion Component -->
                    <section class="content-wrap" id="accordion">
                        <header class="l-stack-1">
                            <h4>Accordion Component</h4>
                            <div class="l-container--fluid">
                                <div class="l-grid">
                                    <div class="col-span-6">
                                        <span class="u-d-block">
                                            <code>
                                                &lt;x-accordion 
                                                id=""
                                                :items="$items"&gt;
                                                &lt;/x-accordion&gt;</code>
                                        </span>
                                    </div>
                                    <div class="col-span-6">
                                        <span class="u-d-block">
                                            <code>
                                                &lt;div class="c-accordion" id="id"&gt;
                                                    &lt;div class="c-accordion__item"&gt;
                                                        &lt;a class="c-btn c-btn--primary c-btn--outline c-accordion__button u-px-3 u-py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse0-id" aria-expanded="true" aria-controls="collapse0-id"&gt;
                                                            &lt;span&gt;title 1&lt;/span&gt;
                                                                &lt;i class="icon-add"&gt;&lt;/i&gt;
                                                        &lt;/a&gt;
                                                        &lt;div id="collapse0-id" class="c-accordion__content accordion-collapse collapse show" data-bs-parent="#id" style=""&gt;
                                                            &lt;div class="u-px-3 u-py-4"&gt;
                                                                &lt;p&gt;content 1&lt;/p&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;

                                            </code>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="note">
                                <strong>Note: </strong>
                                <ul class="l-stack-1">
                                    <li>
                                        <small>Default x-accordion component as is div</small>
                                    </li>
                                </ul>
                            </div>
                        </header>
                        
                        @php
                            $items=[['title' => 'Accordion title','content' => 'Accordion content'],['title' => 'Accordion title2','content' => 'Accordion content2']];
                            $block=['id'=>rand()]
                        @endphp
                        <x-accordion class="" id="id{{ $block['id']}}" :items="$items" block="id{{$block['id']}}"></x-accordion>

                        
                    </section>

                    <section class="content-wrap" id="branding">
                        <div class="l-row">
                            <div class="l-col-6">
                                <header class="u-mb-8">
                                    <h4 class="u-mb-0">Branding and colors</h4>
                                </header>
                                <div class="row u-mb-5">
                                    <div class="col-md-3 u-mb-5">
                                        <span class="u-bg-primary u-d-block p-4 u-text-light border">
                                            <strong class="u-d-block">Primary</strong>
                                            <small class="u-mb-4 u-d-block">
                                                <i>$primary</i>
                                                <span class="font-size-12 u-d-block u-mb-1">#9F5F45</span>
                                            </small>
                                            <code class="u-bg-secondary">.u-bg-primary</code>
                                        </span>
                                    </div>
                                    <div class="col-md-3 u-mb-5">
                                        <span class="u-bg-secondary u-d-block p-4 u-text-light border">
                                            <strong class="u-d-block">Secondary</strong>
                                            <small class="u-mb-4 u-d-block">
                                                <i>$secondary</i>
                                                <span class="font-size-12 u-d-block u-mb-1">#282828</span>
                                            </small>
                                            <code>.u-bg-secondary</code>
                                        </span>
                                    </div>
                                    <div class="col-md-3 u-mb-5">
                                        <span class="u-bg-light u-d-block p-4 u-text-secondary border">
                                            <strong class="u-d-block">light</strong>
                                            <small class="u-mb-4 u-d-block">
                                                <i>$light</i>
                                                <span class="font-size-12 u-d-block u-mb-1">#EDE9E5</span>
                                            </small>
                                            <code>.u-bg-light</code>
                                        </span>
                                    </div>
                                    <div class="col-md-3 u-mb-5">
                                        <span class="u-bg-baby-pink u-d-block p-4 u-text-secondary border">
                                            <strong class="u-d-block">baby-pink</strong>
                                            <small class="u-mb-4 u-d-block">
                                                <i>$baby-pink</i>
                                                <span class="font-size-12 u-d-block u-mb-1">#FFC9B3</span>
                                            </small>
                                            <code>.u-bg-baby-pink</code>
                                        </span>
                                    </div>
                                </div>
                                <div class="u-mb-10">
                                    <hr class="my-10" />
                                    <h4 class="mt-5 u-mb-3">Text Colors</h4>
                                    <div class="l-stack-3">
                                        <h6 class="p-2 pb-3 u-bg-white u-text-primary">Text Primary <code>.u-text-primary</code></h6>
                                        <h6 class="p-2 pb-3 u-bg-white u-text-secondary">Text Secondary <code>.u-text-secondary</code></h6>
                                        <h6 class="p-2 pb-3 u-bg-secondary u-text-light">Text White <code>.u-text-light</code></h6>
                                        <h6 class="p-2 pb-3 u-bg-white u-text-baby-pink">Text Black <code>.u-text-baby-pink</code></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="content-wrap" id="typography">
                        <div class="l-row">
                            <div class="l-col">
                                <header class="u-mb-8">
                                    <h4 class="u-mb-0">Typography</h4>
                                </header>

                                <div class="u-mb-8">
                                    <h1 class="h1">h1 - Heading 1</h1>
                                    <p class="text-secondary">
                                        <span class="u-d-block">Desktop(xl) - 53.33/6.4</span> <span class="u-d-block">Tablet(md) - 40/48</span>
                                        <span class="u-d-block">Mobile(xs) - 37.33/44.8</span>
                                    </p>
                                </div>
                                <div class="u-mb-8">
                                    <h2 class="h2">h2 - Heading 2</h2>
                                    <p class="text-secondary">
                                        <span class="u-d-block">Desktop(xl) - 46/56</span> <span class="u-d-block">Tablet(md) - 35/42</span>
                                        <span class="u-d-block">Mobile(xs) - 33.33/40</span>
                                    </p>
                                </div>
                                <div class="u-mb-8">
                                    <h3 class="h3">h3 - Heading 3</h3>
                                    <p class="text-secondary">
                                        <span class="u-d-block">Desktop(xl) - 40/48</span> <span class="u-d-block">Tablet(md) - 30/36</span>
                                        <span class="u-d-block">Mobile(xs) - 28/33.6</span>
                                    </p>
                                </div>
                                <div class="u-mb-8">
                                    <h4 class="h4">h4 - Heading 4</h4>
                                    <p class="text-secondary">
                                        <span class="u-d-block">Desktop(xl) - 33.33/40</span> <span class="u-d-block">Tablet(md) - 25/30</span>
                                        <span class="u-d-block">Mobile(xs) - 23.3/28</span>
                                    </p>
                                </div>
                                <div class="u-mb-8">
                                    <h5 class="h5">h5 - Heading 5</h5>
                                    <p class="text-secondary">
                                        <span class="u-d-block">Desktop(xl) - 26.66/32</span> <span class="u-d-block">Tablet(md) - 20/24</span>
                                        <span class="u-d-block">Mobile(xs) - 18.66/22.4</span>
                                    </p>
                                </div>
                                <div class="u-mb-8">
                                    <h6 class="h6">h6 - Heading 6</h6>
                                    <p class="text-secondary">
                                        <span class="u-d-block">Desktop(xl) - 20/24</span> <span class="u-d-block">Tablet(md) - 15/18</span>
                                        <span class="u-d-block">Mobile(xs) - 14/16.8</span>
                                    </p>
                                </div>
                                <div class="u-mb-8">
                                    <span class="body">.body</span>
                                    <p class="text-secondary">
                                        <span class="u-d-block">Desktop(xl) - 16/32</span> <span class="u-d-block">Tablet(md) - 12/2.4</span>
                                        <span class="u-d-block">Mobile(xs) - 12/2.4</span>
                                    </p>
                                </div>
                                <div class="u-mb-8">
                                    <span class="eyebrow">.eyebrow</span>
                                    <p class="text-secondary">
                                        <span class="u-d-block">Desktop(xl) - 12/24</span> <span class="u-d-block">Tablet(md) - 10/20</span>
                                        <span class="u-d-block">Mobile(xs) - 10/20</span>
                                    </p>
                                </div>
                                <div class="u-mb-8">
                                    <span class="caption">.caption</span>
                                    <p class="text-secondary">
                                        <span class="u-d-block">Desktop(xl) - 14/28</span> <span class="u-d-block">Tablet(md) - 10/20</span>
                                        <span class="u-d-block">Mobile(xs) - 10/20</span>
                                    </p>
                                </div>

                                <hr class="my-10" />

                                <div class="l-row">
                                    <div class="l-col-md-8">
                                        <h5 class="u-mb-4">Inline text elements</h5>
                                        <div class="u-mb-6">
                                            <p class="u-mb-4">You can use the mark tag to <mark>highlight</mark> text.</p>
                                            <code>&lt;p&gt;You can use the mark tag to &lt;mark&gt;highlight&lt;/mark&gt; text.&lt;/p&gt;</code>
                                        </div>
                                        <div class="u-mb-6">
                                            <p class="u-mb-4"><s>This line of text is meant to be treated as no longer accurate.</s></p>
                                            <code
                                                >&lt;p&gt;&lt;s&gt;This line of text is meant to be treated as no longer accurate.&lt;/s&gt;&lt;/p&gt;</code
                                            >
                                        </div>
                                        <div class="u-mb-6">
                                            <p class="u-mb-4"><u>This line of text will render as underlined</u></p>
                                            <code>&lt;p&gt;&lt;u&gt;This line of text will render as underlined&lt;/u&gt;&lt;/p&gt;</code>
                                        </div>
                                        <div class="u-mb-6">
                                            <p class="u-mb-4"><small>This line of text is meant to be treated as fine print.</small></p>
                                            <code
                                                >&lt;p&gt;&lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;&lt;/p&gt;</code
                                            >
                                        </div>
                                        <div class="u-mb-6">
                                            <p class="u-mb-4"><strong>This line rendered as bold text.</strong></p>
                                            <code>&lt;p&gt;&lt;strong&gt;This line rendered as bold text.&lt;/strong&gt;&lt;/p&gt;</code>
                                        </div>
                                        <div class="u-mb-6">
                                            <p class="u-mb-4"><em>This line rendered as italicized text.</em></p>
                                            <code>&lt;p&gt;&lt;em&gt;This line rendered as italicized text.&lt;/em&gt;&lt;/p&gt;</code>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-5" />

                                <div class="l-row">
                                    <div class="l-col-md-8">
                                        <h5 class="u-mb-4">Lists</h5>
                                        <div class="l-row">
                                            <div class="l-col-md-8">
                                                <ul>
                                                    <li>
                                                        Engage with government and community partners to identify high-priority opportunities to address
                                                        local needs and racial equity.
                                                    </li>
                                                    <li>
                                                        Design scopes of work with clearly articulated goals for executive fellows to pursue while they are
                                                        embedded full-time for at least 12-months at the senior levels of local government agencies.
                                                    </li>
                                                    <li>
                                                        Ensure that all projects have plans for long-term, community-based sustainability of progress after
                                                        the fellowships conclude.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-10" />

                                <div class="l-row">
                                    <div class="l-col-md-8">
                                        <h5 class="u-mb-4">Normal Paragraphs</h5>
                                        <p>
                                            FUSE partners with local governments and communities to create projects that advance racial equity and
                                            accelerate systems change across six issue areas: affordable housing, climate resilience, educational access,
                                            public health, justice reform, and workforce development. We embed experienced professionals from the private
                                            and social sectors to lead these year-long projects.
                                        </p>
                                        <p>
                                            Consectetur adipisicing elit. Mollitia, voluptate dolor architecto excepturi adipisci pariatur laboriosam quos
                                            quo nulla? Ab vero temporibus animi voluptatibus dicta vitae possimus eveniet aliquam quam molestiae, dolores
                                            sapiente reiciendis error vel incidunt soluta nesciunt recusandae necessitatibus, quasi maxime, voluptatum esse
                                            sint autem excepturi. Nihil, blanditiis.
                                        </p>
                                        <p><a href="#">Learn More About Our Model <i class="ms-2 icon-arrows"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="content-wrap" id="icons">
                        <div class="l-row">
                            <div class="l-col">
                                <header class="u-mb-5">
                                    <h3 class="u-mb-0">Icons</h3>
                                </header>

                                <div class="l-row u-mb-5 u-gx-4">
                                    <div class="l-col-sm-6 l-col-md-3 u-mb-5">
                                        <span class="u-d-block py-2"><i class="icon-add font-size-30"></i> </span
                                        ><code>&lt;i class="icon-add"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="l-col-sm-6 l-col-md-3 u-mb-5">
                                        <span class="u-d-block py-2"
                                            ><i class="icon-arrow font-size-30"
                                                ><span class="path1"></span><span class="path2"></span><span class="path3"></span
                                            ></i> </span
                                        ><code>&lt;i class="icon-arrow"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="l-col-sm-6 l-col-md-3 u-mb-5">
                                        <span class="u-d-block py-2"><i class="icon-climate font-size-30"></i> </span
                                        ><code>&lt;i class="icon-climate"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="l-col-sm-6 l-col-md-3 u-mb-5">
                                        <span class="u-d-block py-2"><i class="icon-close font-size-30"></i> </span
                                        ><code>&lt;i class="icon-close"&gt;&lt;/i&gt;</code>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <!-- Utilities -->
                    <section class="content-wrap" id="utilities">
                        <div class="l-container">
                            <div class="l-row">
                                <div class="l-col">
                                    <header class="u-mb-5">
                                        <h3 class="u-mb-0">List of Utilities</h3>
                                        <div class="note">
                                            <p class="u-mb-4">
                                            <strong>Note: </strong><small>all utilities must be prefixed with</small> <strong>u-</strong>
                                            </p>
                                        </div>
                                    </header>
                                    <div class="l-row u-mb-5 h4 u-gx-5">
                                        <div class="l-col-md-6">
                                            <ul class="l-stack-3">
                                                <li><span class="u-w-25 d-inline-block">Border radius:</span> <code>u-radius-1</code></li>
                                                <li><span class="u-w-25 d-inline-block">Text align:</span> <code>u-text-alignt-right</code></li>
                                                <li><span class="u-w-25 d-inline-block">Position:</span> <code>u-position-relative</code></li>
                                                <li><span class="u-w-25 d-inline-block">Display:</span> <code>u-display-flex</code></li>
                                                <li><span class="u-w-25 d-inline-block">Flex justify:</span> <code>u-justify-space-between</code></li>
                                                <li><span class="u-w-25 d-inline-block">Flex align:</span> <code>u-align-flex-start</code></li>
                                                <li><span class="u-w-25 d-inline-block">Opacity:</span> <code>u-opacity-1</code></li>
                                                <li><span class="u-w-25 d-inline-block">Aspect ratio:</span> <code>u-aspect-ratio-1x1</code></li>
                                            </ul>
                                        </div>
                                        <div class="l-col-md-6">
                                            <ul class="l-stack-3">
                                                <li><span class="u-w-25 d-inline-block">Object fit:</span> <code>u-object-fit-cover</code></li>
                                                <li><span class="u-w-25 d-inline-block">Overflow all:</span> <code>u-overflow-hidden</code></li>
                                                <li><span class="u-w-25 d-inline-block">Z-index:</span> <code>u-z-9</code></li>
                                                <li><span class="u-w-25 d-inline-block">Width:</span> <code>u-width-25</code></li>
                                                <li><span class="u-w-25 d-inline-block">Padding all:</span> <code>u-ps-4</code></li>
                                                <li><span class="u-w-25 d-inline-block">Margin all:</span> <code>u-mt-5</code></li>
                                                <li><span class="u-w-25 d-inline-block">Gap all:</span> <code>u-g-6</code></li>
                                                <li><span class="u-w-25 d-inline-block">Stack:</span> <code>u-stack-lg-5</code></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <!-- Documentation -->
                    <section class="content-wrap" id="docs">
                        <div class="l-row">
                            <div class="col">
                                <header class="u-mb-5">
                                    <h3 class="u-mb-0">List of docs</h3>
                                </header>

                                <div class="row u-mb-5 h4">
                                    <div class="col-md-12">
                                        <ul class="l-stack-3">
                                            <li>
                                                <div class="u-w-25 d-inline-block">
                                                    Reusable Modules:
                                                </div> 
                                                <div>
                                                    <a class="u-text-primary" href='https://docs.google.com/document/d/11UJididgQXcT9bImPDgux2Nolksqk2A3WZzjsq2Twg0/edit#heading=h.end5wn41lx0j' 
                                                     title='Reusable Modules' target="_blank">
                                                     https://docs.google.com/document/d/11UJididgQXcT9bImPDgux2Nolksqk2A3WZzjsq2Twg0/edit#heading=h.end5wn41lx0j 
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="u-w-25 d-inline-block">
                                                    List of Reusable Modules:
                                                </div> 
                                                <div>
                                                    <a class="u-text-primary" href='https://docs.google.com/spreadsheets/d/1ulG5zCeg2efopOFxhd9UiMJ2-EJJ6n2oo1bZ3O8ibVc/edit#gid=722981226' 
                                                     title='Reusable Modules' target="_blank">
                                                     https://docs.google.com/spreadsheets/d/1ulG5zCeg2efopOFxhd9UiMJ2-EJJ6n2oo1bZ3O8ibVc/edit#gid=722981226 
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="u-w-25 d-inline-block">
                                                    Reusable Modules Design:
                                                </div> 
                                                <div>
                                                    <a class="u-text-primary" href='https://www.figma.com/file/UxFdHvJuqv1EcQ1G90EwqM/UI-Reusable-Modules?type=design&node-id=801%3A60&t=v6mwl480rq7yuRWv-1' 
                                                     title='Reusable Modules' target="_blank">
                                                     https://www.figma.com/file/UxFdHvJuqv1EcQ1G90EwqM/UI-Reusable-Modules?type=design&node-id=801%3A60&t=v6mwl480rq7yuRWv-1 
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="u-w-25 d-inline-block">
                                                    Reusable Modules Dashboard Design:
                                                </div> 
                                                <div>
                                                    <a class="u-text-primary" href='https://www.figma.com/file/56Van88cLDY14CUMp9ICZt/Dashboard---UI-Reusable-Modules?type=design&node-id=901%3A5495&mode=design&t=vodenPMbZ3UPlB37-1' 
                                                     title='Reusable Modules' target="_blank">
                                                     https://www.figma.com/file/56Van88cLDY14CUMp9ICZt/Dashboard---UI-Reusable-Modules?type=design&node-id=901%3A5495&mode=design&t=vodenPMbZ3UPlB37-1 
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>

@endif
