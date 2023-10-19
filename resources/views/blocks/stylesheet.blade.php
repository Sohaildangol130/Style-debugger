{{--
    script[banner.js,slider.js]script
    style[modules/styleguide.scss]style
    Title: Styleguide
    Description: Styleguide
    Category: Styleguide
    Icon: admin-tools
    Keywords: Styleguide
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
    EnqueueAssetsJS: scripts/slider.js
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

    <header class="styleguide-header u-py-5 u-bg-gray-700">
        <div class="l-container-fluid">
            <div class="l-grid">
            <div class="col-span-3">
                <div class="header-brand">
                    <svg width="244" height="62" viewBox="0 0 244 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M35.3633 43.0862C35.3633 53.0096 39.068 62 51.9504 62C59.5282 62 64.1591 58.2681 66.6009 53.3488V61.1518H72.9157V18.6594H66.6009V42.238C66.6009 50.041 62.3067 56.8263 53.5501 56.8263C44.7093 56.8263 41.6782 50.6348 41.6782 42.238V18.7442H35.3633V43.0862Z" fill="#C57A5C"/>
                        <path d="M77.1796 23.7483H82.9051V49.7866C82.9051 57.1655 86.3572 61.1519 95.7032 61.1519H99.0711L99.0712 56.0629H97.1346C91.3249 56.0629 89.3041 54.2818 89.3041 48.9384V23.7483H99.0712V18.7442H89.3041V6.87004H82.9051V18.7442H77.1796V23.7483Z" fill="#C57A5C"/>
                        <path d="M101.706 47.9207C101.706 56.4022 107.936 61.9152 118.545 61.9152C128.733 61.9152 135.469 57.0807 135.469 49.2777C135.469 34.0958 108.947 39.3543 109.031 29.4309C108.947 24.9357 113.072 22.8153 118.461 22.8153C123.766 22.8153 127.891 25.6142 127.976 30.8728H134.038C134.038 23.6635 128.649 17.896 118.461 17.896C108.778 17.896 102.632 22.3912 102.632 29.4309C102.632 44.4432 128.986 39.0151 128.986 49.2777C129.07 54.7059 124.439 56.9959 118.461 56.9959C112.736 56.9959 107.852 54.2818 107.684 47.9207H101.706Z" fill="#C57A5C"/>
                        <path d="M145.863 8.99043C148.305 8.99043 150.326 7.03967 150.326 4.49521C150.326 2.03557 148.305 1.07447e-07 145.863 0C143.337 -1.11152e-07 141.401 2.03557 141.401 4.49521C141.401 7.03967 143.337 8.99043 145.863 8.99043ZM148.978 18.6594H142.663V61.1519H148.978V18.6594Z" fill="#C57A5C"/>
                        <path d="M155.806 39.8632C155.806 51.8222 163.132 61.9152 175.761 61.9152C183.255 61.9152 188.391 58.5226 191.254 53.4337V61.1519H197.653V1.69631H191.254L191.254 26.4624C188.391 21.2887 183.255 17.8112 175.761 17.8112C163.132 17.8112 155.806 27.9891 155.806 39.8632ZM162.205 39.8632C162.205 29.9398 167.931 23.2394 176.772 23.2394C185.528 23.2394 191.254 29.9398 191.254 39.8632C191.254 49.8714 185.528 56.5718 176.772 56.5718C167.931 56.5718 162.205 49.8714 162.205 39.8632Z" fill="#C57A5C"/>
                        <path d="M203.171 39.8632C203.171 51.2285 210.328 61.9152 223.968 61.9152C234.493 61.9152 241.06 55.6389 242.997 47.4966H236.514C234.998 53.264 230.451 56.8263 223.968 56.8263C215.548 56.8263 210.328 50.6348 209.739 42.0684H243.923C244.849 28.6676 237.356 17.896 223.968 17.896C210.328 17.896 203.171 28.5828 203.171 39.8632ZM209.823 37.4036C210.496 29.0917 215.633 22.985 223.968 22.985C232.135 22.985 236.935 28.7524 237.524 37.4884L209.823 37.4036Z" fill="#C57A5C"/>
                        <path d="M0 61.9152C16.7405 61.9152 30.3114 48.2449 30.3114 31.3817C30.3114 14.5185 16.7405 0.848148 2.65157e-06 0.848147L2.39378e-06 6.78522C13.4854 6.78522 24.4175 17.7974 24.4175 31.3817C24.4175 44.9659 13.4854 55.9781 2.57791e-07 55.9781L0 61.9152Z" fill="#C57A5C"/>
                    </svg>
                </div>
            </div>
            <div class="col-span-6">
            </div>
            </div>
        </div>
    </header>
    <div class="styleguide-wrap">

        <div class="l-container-fluid">
            <div class="l-row">
                <div class="l-col-md-2 aside-col u-text-white">
                    <aside class="styleguide-sidebar sticky-top">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li>
                                <span class="h4 u-mb-0">Components</span>
                            </li>
                            <ul>
                                <li class="list-group-item nav-item">
                                    <button class="nav-link active" id="stack-tab" data-bs-toggle="tab" data-bs-target="#stack" type="button" role="tab" aria-controls="stack" aria-selected="true">Stack</button>
                                </li>
                                <li class="list-group-item nav-item">
                                    <button class="nav-link" id="text-tab" data-bs-toggle="tab" data-bs-target="#text" type="button" role="tab" aria-controls="text" aria-selected="true">Text</button>
                                </li>
                                <li class="list-group-item nav-item">
                                    <button class="nav-link" id="headline-tab" data-bs-toggle="tab" data-bs-target="#headline" type="button" role="tab" aria-controls="headline" aria-selected="true">Headline</button>
                                </li>
                                <li class="list-group-item nav-item">
                                    <button class="nav-link" id="link-tab" data-bs-toggle="tab" data-bs-target="#link" type="button" role="tab" aria-controls="link" aria-selected="true">Link</button>
                                </li>
                                <li class="list-group-item nav-item">
                                    <button class="nav-link" id="image-tab" data-bs-toggle="tab" data-bs-target="#image" type="button" role="tab" aria-controls="image" aria-selected="true">Image</button>
                                </li>
                                <li class="list-group-item nav-item">
                                    <button class="nav-link" id="video-tab" data-bs-toggle="tab" data-bs-target="#video" type="button" role="tab" aria-controls="video" aria-selected="true">Video</button>
                                </li>
                                <li class="list-group-item nav-item">
                                    <button class="nav-link" id="input-tab" data-bs-toggle="tab" data-bs-target="#input" type="button" role="tab" aria-controls="input" aria-selected="true">Input</button>
                                </li>
                                <li class="list-group-item nav-item">
                                    <button class="nav-link" id="select-tab" data-bs-toggle="tab" data-bs-target="#select" type="button" role="tab" aria-controls="select" aria-selected="true">Select</button>
                                </li>
                                <li class="list-group-item nav-item">
                                    <button class="nav-link" id="card-media-tab" data-bs-toggle="tab" data-bs-target="#card-media" type="button" role="tab" aria-controls="card-media" aria-selected="true">Card Media</button>
                                </li>
                            </ul>
                            <li>
                                <span class="h4 u-mb-0">Styleguide</span>
                            </li>
                            <ul>
                                <li class="list-group-item nav-item">
                                    <button class="nav-link" id="typography-tab" data-bs-toggle="tab" data-bs-target="#typography" type="button" role="tab" aria-controls="typography" aria-selected="true">Typography</button>
                                </li>
                                <li class="list-group-item nav-item">
                                    <button class="nav-link" id="icon-tab" data-bs-toggle="tab" data-bs-target="#icon" type="button" role="tab" aria-controls="icon" aria-selected="true">Icon</button>
                                </li>
                                <li class="list-group-item nav-item">
                                    <button class="nav-link" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid" type="button" role="tab" aria-controls="grid" aria-selected="true">Grid</button>
                                </li>
                                <li class="list-group-item nav-item">
                                    <button class="nav-link" id="utilities-tab" data-bs-toggle="tab" data-bs-target="#utilities" type="button" role="tab" aria-controls="utilities" aria-selected="true">Utilities</button>
                                </li>
                            </ul>
                            <li class="list-group-item list-doc">
                                <a href="#docs" class="anchor-link">Doc</a>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="l-col-md-10 tab-content tab-content-main u-pt-10 u-position-relative" id="myTabContent">
                   
                    <section class="style-token l-stack-7 content-wrap tab-pane fade show active" id="stack" role="tabpanel" aria-labelledby="stack-tab">
                        <h4 class="h1">Stack</h4>
                        <p>
                            Flow elements require space (sometimes referred to as white space) to physically and conceptually separate them from the elements that come before and after them.
                        </p>
                        <x-stack class="styleguide-code-output" id="" as="headline" stack='{"default": "1", "sm": "3", "md": "4" , "lg":"5"}'>
                            <x-text variant="h1" as='h1'>H1 Header</x-text>
                            <x-text variant="h2" as='h2'>H2 Header</x-text>
                            <x-text variant="h3" as='h3'>H3 Header</x-text>
                            <x-text variant="h4" as='h4'>H4 Header</x-text>
                            <x-text class='l-stack-1' variant="">
                                <p>Paragraph 1: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, dolore.</p>
                                <p>Paragraph 2: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, dolore.</p>
                                <p>Paragraph 3: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, dolore.</p>
                            </x-text>
                        </x-stack>

                        <!-- <div class="container">
                            <div class="label">
                                E-mail address
                            </div>
                            <div class="copy-text">
                                <textarea disabled class="u-w-100"><pre><code>&lt;code&gt; This is some code &lt;/code&gt;</code></pre>
                                </textarea>
                                <div class="copy-text-content" id="copyTextContent">
                                    <x-stack class="styleguide-code-output" id="" as="headline" stack='{"default": "1", "sm": "3", "md": "4" , "lg":"5"}'>
                                        <x-text variant="h1" as='h1'>H1 Header</x-text>
                                        <x-text variant="h2" as='h2'>H2 Header</x-text>
                                        <x-text variant="h3" as='h3'>H3 Header</x-text>
                                        <x-text variant="h4" as='h4'>H4 Header</x-text>
                                        <x-text class='l-stack-1' variant="">
                                            <p>Paragraph 1: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, dolore.</p>
                                            <p>Paragraph 2: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, dolore.</p>
                                            <p>Paragraph 3: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, dolore.</p>
                                        </x-text>
                                    </x-stack>
                                </div>
                                <button>
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.5 10H5C4.33696 10 3.70107 10.2634 3.23223 10.7322C2.76339 11.2011 2.5 11.837 2.5 12.5V35C2.5 35.663 2.76339 36.2989 3.23223 36.7678C3.70107 37.2366 4.33696 37.5 5 37.5H27.5C28.163 37.5 28.7989 37.2366 29.2678 36.7678C29.7366 36.2989 30 35.663 30 35V32.5H12.5C11.1739 32.5 9.90215 31.9732 8.96447 31.0355C8.02679 30.0979 7.5 28.8261 7.5 27.5V10ZM10 7.5V27.5C10 28.163 10.2634 28.7989 10.7322 29.2678C11.2011 29.7366 11.837 30 12.5 30H32.5V35C32.5 36.3261 31.9732 37.5979 31.0355 38.5355C30.0979 39.4732 28.8261 40 27.5 40H5C3.67392 40 2.40215 39.4732 1.46447 38.5355C0.526784 37.5979 0 36.3261 0 35V12.5C0 11.1739 0.526784 9.90215 1.46447 8.96447C2.40215 8.02679 3.67392 7.5 5 7.5H10ZM12.5 2.5C11.837 2.5 11.2011 2.76339 10.7322 3.23223C10.2634 3.70107 10 4.33696 10 5V27.5C10 28.163 10.2634 28.7989 10.7322 29.2678C11.2011 29.7366 11.837 30 12.5 30H35C35.663 30 36.2989 29.7366 36.7678 29.2678C37.2366 28.7989 37.5 28.163 37.5 27.5V5C37.5 4.33696 37.2366 3.70107 36.7678 3.23223C36.2989 2.76339 35.663 2.5 35 2.5H12.5ZM12.5 0H35C36.3261 0 37.5979 0.526784 38.5355 1.46447C39.4732 2.40215 40 3.67392 40 5V27.5C40 28.8261 39.4732 30.0979 38.5355 31.0355C37.5979 31.9732 36.3261 32.5 35 32.5H12.5C11.1739 32.5 9.90215 31.9732 8.96447 31.0355C8.02679 30.0979 7.5 28.8261 7.5 27.5V5C7.5 3.67392 8.02679 2.40215 8.96447 1.46447C9.90215 0.526784 11.1739 0 12.5 0Z" fill="black"/>
                                    </svg>
                                </button>
                            </div>
                        </div> -->


                        <div class="tab-code-wrapper">
                            <ul class="nav nav-tabs tab-code u-d-flex u-justify-end" id="stackTab" role="tablist">
                                <li class="nav-item">
                                    <button class="nav-link active" id="php-tab" data-bs-toggle="tab" data-bs-target="#php" type="button" role="tab" aria-controls="php" aria-selected="true">PHP</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="html-tab" data-bs-toggle="tab" data-bs-target="#html" type="button" role="tab" aria-controls="html" aria-selected="false">HTML</button>
                                </li>
                            </ul>
                            <div class="tab-content tab-code-content">
                                    <div class="tab-pane fade show active" id="php" role="tabpanel" aria-labelledby="php-tab">
                                        <span class="u-d-block">
                                                <pre><code>&lt;x-stack 
    stack='{"default": 1, "sm": 3, "md": 4 , "lg":5}' 
    as="header"
&gt;
&lt;/x-stack&gt;
</code></pre>
                                            </span>
                                        </div>
                                    <div class="tab-pane fade" id="html" role="tabpanel" aria-labelledby="html-tab">
                                            <span class="u-d-block">
                                                <code>&lt;header class="l-stack-1 l-stack-sm-3 l-stack-md-4 l-stack-lg-5"&gt;
                                                    &lt;/header&gt;</code>
                                            </span>
                                    </div>
                                </div>
                            </div>

                            <div class="note">
                                <p class="u-mb-4">
                                <h3 class="h4">Props: </h3>
                                <ul class="l-stack-1 props-table">
                                    <li>
                                        <span class="u-d-block u-text-primary h6">AS= 'header' | 'div' | 'span'</span> 
                                        <span class="u-text-baby-pink">as='header'</span> will change the x-stack component tag to header. If as not mentioned in x-stack component or <span class="u-text-baby-pink">as=""</span>, will take <span class="u-text-baby-pink">div</span> as default
                                    </li>
                                    <li>
                                        <span class="u-d-block u-text-primary h6">Stack</span> 
                                        <span class="u-text-baby-pink">Stack</span> give spacing between the headline child elements. Where <span class="u-text-baby-pink">default, sm, md</span> represents breakpoints and <span class="u-text-baby-pink">1,3,4</span> represents spacing
                                    </li>
                                </ul>
                                </p>
                            </div>
                    </section>


                    <section class="content-wrap tab-pane fade l-stack-7" id="text" role="tabpanel" aria-labelledby="text-tab">
                        <h4 class="h1">Text Component</h4>
                        <p>
                        A reusable text component in web development refers to a standardized and self-contained piece of code that is designed to display textual content in a consistent and stylized manner across a website or web application. The primary goal of creating reusable text components is to maintain design consistency, streamline development, and make it easier to manage and update text-based content throughout a project.
                        </p>
                        <x-stack class="styleguide-code-output" id="" as="headline" stack='{"default": "1", "sm": "3", "md": "4" , "lg":"5"}'>
                            <x-text variant="h1" as='h1'>H1 Header</x-text>
                            <x-text variant="h2" as='h2'>H2 Header</x-text>
                            <x-text variant="h3" as='h3'>H3 Header</x-text>
                            <x-text variant="h4" as='h4'>H4 Header</x-text>
                            <x-text class='l-stack-1' variant="">
                                <p>Paragraph 1: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, dolore.</p>
                                <p>Paragraph 2: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, dolore.</p>
                                <p>Paragraph 3: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, dolore.</p>
                            </x-text>
                        </x-stack>
                        <div class="tab-code-wrapper">
                            <ul class="nav nav-tabs tab-code u-d-flex u-justify-end" id="textTab" role="tablist">
                                <li class="nav-item">
                                    <button class="nav-link active" id="php-text-tab" data-bs-toggle="tab" data-bs-target="#php-text" type="button" role="tab" aria-controls="php-text" aria-selected="true">PHP</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="html-text-tab" data-bs-toggle="tab" data-bs-target="#html-text" type="button" role="tab" aria-controls="html-text" aria-selected="false">HTML</button>
                                </li>
                            </ul>
                            <div class="tab-content tab-code-content">
                                    <div class="tab-pane fade show active" id="php-text" role="tabpanel" aria-labelledby="php-text-tab">
                                        <span class="u-d-block">
                                                <pre><code>&lt;x-text 
    as={h1/h2/h3/h4/h5/h6/p} 
    class="u-text-primary" 
    variant="h1"
&gt;
&lt;/x-text&gt;
</code></pre>
                                            </span>
                                        </div>
                                    <div class="tab-pane fade" id="html-text" role="tabpanel" aria-labelledby="html-text-tab">
                                            <span class="u-d-block">
                                            <code>&lt;h1 class="u-text-primary h1" variant="h1"&gt;
                                                &lt;/h1&gt;</code>
                                            </span>
                                    </div>
                                </div>
                            </div>

                            <div class="note">
                                <p class="u-mb-4">
                                <h3 class="h4">Props: </h3>
                                <ul class="l-stack-1 props-table">
                                    <li>
                                        <span class="u-d-block u-text-primary h6">AS= 'h1' | 'h2' | 'h3' | 'h4' | 'h5' | 'h6' | 'p' </span> 
                                        <span class="u-text-baby-pink">as="h3"</span> will changege the x-text component tag to h3. If as not mentioned in x-text component or <span class="u-text-baby-pink">as=""</span>, will take <span class="u-text-baby-pink">div</span> as default
                                    </li>
                                    <li>
                                        <span class="u-d-block u-text-primary h6">Variant</span> 
                                        variant will add typography variant as class in the text component.
                                    </li>
                                </ul>
                                </p>
                            </div>
                    </section>

                    <section class="content-wrap tab-pane l-stack-7 fade" role="tabpanel" aria-labelledby="headline-tab" id="headline">

                    <h4 class="h1">Heading/Headline Component</h4>
                        <p>
                        
                        </p>
                        <x-headline class="styleguide-code-output u-text-dark" stack='{"default": 1, "sm": 3, "md": 4 , "lg":2}' as="" blockAligns='start'
                            eyebrow='{"as":"span","content":"eyebrow","variant":"","class":"order-1"}'
                            title='{"as":"h1","content":"This is title","variant":"","class":"order-2"}'
                            description='{"as":"p","content":" This is description","variant":"","class":"order-3"}'
                            cta='{"as":"","title":"click here","variant":"outline","class":"order-4","href":"https://google.com","buttonTheme":"primary","target":"_blank"}'
                        >
                        </x-headline>
                        <div class="tab-code-wrapper">
                            <ul class="nav nav-tabs tab-code u-d-flex u-justify-end" id="headlineTab" role="tablist">
                                <li class="nav-item">
                                    <button class="nav-link active" id="php-headline-tab" data-bs-toggle="tab" data-bs-target="#php-headline" type="button" role="tab" aria-controls="php-headline" aria-selected="true">PHP</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="html-headline-tab" data-bs-toggle="tab" data-bs-target="#html-headline" type="button" role="tab" aria-controls="html-headline" aria-selected="false">HTML</button>
                                </li>
                            </ul>
                            <div class="tab-content tab-code-content">
                                    <div class="tab-pane fade show active" id="php-headline" role="tabpanel" aria-labelledby="php-headline-tab">
                                        <span class="u-d-block">
<pre><code>&lt;x-headline as={div|header} 
    blockAligns='start' 
    stack='{"default": 1, "sm": 3, "md": 4 , "lg":2}'
    eyebrow='{"content":"this is eyebrow"}'
    title='{"as":"","variant":""}'
    description='{"content":" this is description"}'
    cta='{"href":"https://google.com",
    "buttonTheme":"primary","target":"_blank"}' &gt;
&lt;/x-headline&gt;</code></pre>
                                            </span>
                                        </div>
                                    <div class="tab-pane fade" id="html-headline" role="tabpanel" aria-labelledby="html-headline-tab">
                                            <span class="u-d-block">
<pre><code>&lt;header class="u-text-align-start" &gt;
    &lt;span class=""&gt;this is eyebrow&lt;/span&gt;
    &lt;h1 class=""&gt;this is title&lt;/h1&gt;
    &lt;div class=""&gt;this is description&lt;/div&gt;
    &lt;a class="c-btn c-btn--primary c-btn--outline" 
    href="https://google.com" target="_blank"&gt;click here&lt;/a&gt;
&lt;/header&gt;</code>
</pre>
                                            </span>
                                    </div>
                                </div>
                            </div>

                            <div class="note">
                                <p class="u-mb-4">
                                <h3 class="h4">Props: </h3>
                                <ul class="l-stack-1 props-table">
                                    <li>
                                        <span class="u-d-block u-text-primary h6">AS= 'header' | 'div' </span> 
                                        <span class="u-text-baby-pink">as="div"</span> will change the x-header component tag to div. If as not mentioned in x-headline component or <span class="u-text-baby-pink">as=""</span>, will take <span class="u-text-baby-pink">header</span> as default
                                    </li>
                                    <li>
                                        <span class="u-d-block u-text-primary h6">Block Aligns</span> 
                                        <span class="u-text-baby-pink">blockAligns</span> will aligns the content to <span class="u-text-baby-pink">start, center</span> or <span class="u-text-baby-pink">end</span>
                                    </li>
                                    <li>
                                        <span class="u-d-block u-text-primary h6">Stack</span> 
                                        <span class="u-text-baby-pink">stack</span> give spacing between the headline child elements. Where <span class="u-text-baby-pink">default, sm, md</span> represents breakpoints and <span class="u-text-baby-pink">1,3,4</span> represents spacing
                                    </li>
                                    <li>
                                        <div class="lh">
                                            <span class="u-d-block u-text-primary h6">Eyebrow, Title, Description</span>
                                            <span class="u-text-baby-pink">eyebrow, title</span> and <span class="u-text-baby-pink">description</span> value, attributes and class can be set directly from headline component
                                        </div>
                                        <ul>
                                            <li>
                                                <span class="u-d-block u-text-primary h6">X-TEXT</span> 
                                                <span class="u-text-baby-pink">eyebrow, title</span> and <span class="u-text-baby-pink">description</span> uses <span class="u-text-baby-pink">x-text</span> Component
                                            </li>
                                            <li>    
                                                <span class="u-d-block u-text-primary h6">Variant</span> 
                                                <span class="u-text-baby-pink">variant</span> will add typography variant as class in the each dom.
                                            </li>
                                            <li>
                                                <span class="u-d-block u-text-primary h6">Content</span> 
                                                <span class="u-text-baby-pink">content</span> will add actual content in dom.
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="lh"><span class="u-d-block u-text-primary h6">Eyebrow</span> </div>
                                        <ul>
                                            <li>
                                                <span class="u-d-block u-text-primary h6">AS= 'div' | 'span' </span> 
                                                <span class="u-text-baby-pink">as="span"</span> will change the eyebrow props tag to span. If as not mentioned in eyebrow prop or <span class="u-text-baby-pink">as=""</span>, will take <span class="u-text-baby-pink">div</span> as default
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="lh"><span class="u-d-block u-text-primary h6">Title</span> </div>
                                        <ul>
                                            <li>
                                                <span class="u-d-block u-text-primary h6">AS= 'h1' | 'h2' | 'h3' | 'h4' | 'h5' | 'h6' | 'p' </span> 
                                                <span class="u-text-baby-pink">as="h3"</span> will changege the title component tag to h3. If as not mentioned in title component or <span class="u-text-baby-pink">as=""</span>, will take <span class="u-text-baby-pink">div</span> as default
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="lh"><span class="u-d-block u-text-primary h6">Description</span> </div>
                                        <ul>
                                            <li>
                                                <span class="u-d-block u-text-primary h6">AS = 'div' | 'p' </span> 
                                                <span class="u-text-baby-pink">as="p"</span> will change the description props tag to p. If as not mentioned in description prop or <span class="u-text-baby-pink">as=""</span>, will take <span class="u-text-baby-pink">div</span> as default
                                            </li>
                                            <li>
                                                We can also pass multiple <span class="u-text-baby-pink">p, ul, ol</span> in <span class="u-text-baby-pink">content</span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="lh"><span class="u-d-block u-text-primary h6">Cta</span> </div>
                                        <ul>
                                            <li>
                                                <span class="u-d-block u-text-primary h6">X-LINK</span> 
                                                <span class="u-text-baby-pink">cta</span> uses <span class="u-text-baby-pink">x-link</span> Component
                                            </li>
                                            <li>
                                                <span class="u-d-block u-text-primary">AS = 'a' | 'button' </span>
                                                <span class="u-text-baby-pink">as</span>="button" will change the <span class="u-text-baby-pink">x-link</span> component tag to <span class="u-text-baby-pink">button</span>. If as not mentioned in x-link component or as="", will take <span class="u-text-baby-pink">a</span> as default
                                            </li>
                                            <li>
                                                <span class="u-text-baby-pink">default=true</span> make the link as preliminary and add c-text-link to the link
                                            </li>
                                            <li>
                                                <span class="u-text-baby-pink">title, target, rel, type, tabindex</span> and <span class="u-text-baby-pink">href</span> can be set in component directly
                                            </li>
                                            <li>
                                                <span class="u-text-baby-pink">variant:</span> filled or outline will add c-btn--choose-option to class
                                            </li>
                                            <li>
                                                <span class="u-text-baby-pink">buttonTheme: primary</span> or <span class="u-text-baby-pink">secondary</span> will add c-btn--choose-option to class
                                            </li>
                                            <li>
                                                <span class="u-text-baby-pink">as="button"</span> and <span class="u-text-baby-pink">type="submit"</span> will make submit button
                                            </li>
                                            <li>
                                                <span class="u-text-baby-pink">data-disabled</span> will disable the button
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <small><span class="u-text-baby-pink">PS:</span> if not required we can use slot content to add any text component, link component or any other components here</small>
                                    </li>
                                </ul>
                                </p>
                            </div>
                    </section>


                    <!-- Link -->
                    <section class="content-wrap tab-pane fade l-stack-7" role="tabpanel" aria-labelledby="link-tab" id="link">
                    <h4 class="h1">Link/ Button Component</h4>
                        <div class="l-container-fluid styleguide-code-output u-text-dark">
                            <div class="l-grid">
                                <div class="col-span-6">
                                    <span class="u-d-block">
                                        <code>&lt;x-link default=true&gt;</code>
                                    </span>
                                </div>
                                <div class="col-span-6">
                                    <x-link
                                        default=true
                                        title="Title goes here"
                                        target="_blank"
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
                        <div class="tab-code-wrapper">
                            <ul class="nav nav-tabs tab-code u-d-flex u-justify-end" id="linkTab" role="tablist">
                                <li class="nav-item">
                                    <button class="nav-link active" id="php-link-tab" data-bs-toggle="tab" data-bs-target="#php-link" type="button" role="tab" aria-controls="php-link" aria-selected="true">PHP</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="html-link-tab" data-bs-toggle="tab" data-bs-target="#html-link" type="button" role="tab" aria-controls="html-link" aria-selected="false">HTML</button>
                                </li>
                            </ul>
                            <div class="tab-content tab-code-content">
                                    <div class="tab-pane fade show active" id="php-link" role="tabpanel" aria-labelledby="php-link-tab">
                                        <span class="u-d-block">
<pre><code>&lt;x-link 
    default=true
    title="Title goes here"
    target="_blank"
    href=""&gt;
    Link
&lt;/x-link&gt;</code></pre><br>
<pre><code>&lt;x-link 
    buttonTheme="primary"
    variant="filled"
    href=""&gt;
    Button filled primary
&lt;/x-link&gt;</code></pre>
                                            </span>
                                        </div>
                                    <div class="tab-pane fade" id="html-link" role="tabpanel" aria-labelledby="html-link-tab">
                                            <span class="u-d-block">
<pre><code>&lt;a class="c-text-link" 
    title="Title goes here" 
    target="_blank" 
    href=""&gt;
    Link
&lt;/a&gt;</code></pre><br>
<pre><code>&lt;a class="c-btn c-btn--primary c-btn--filled" 
    href=""&gt;
    Button filled primary
&lt;/a&gt;</code></pre>
                                            </span>
                                    </div>
                                </div>
                            </div>

                            <div class="note">
                                <p class="u-mb-4">
                                    <h3 class="h4">Props: </h3>
                                    <ul class="l-stack-1 props-table">
                                        <li>
                                            <span class="u-d-block u-text-primary">AS = 'a' | 'button' </span>
                                            <span class="u-text-baby-pink">as</span>="button" will change the <span class="u-text-baby-pink">x-link</span> component tag to <span class="u-text-baby-pink">button</span>. If as not mentioned in x-link component or as="", will take <span class="u-text-baby-pink">a</span> as default
                                        </li>
                                        <li>
                                            <span class="u-d-block u-text-primary">Default = 'true'</span> 
                                            <span class="u-text-baby-pink">default=true</span> make the link as preliminary and add c-text-link to the link
                                        </li>
                                        <li>
                                            <span class="u-text-baby-pink">title, target, rel, type, tabindex</span> and <span class="u-text-baby-pink">href</span> can be set in component directly
                                        </li>
                                        <li>
                                            <span class="u-d-block u-text-primary">Variant = 'filled' | 'outline' </span>
                                            <span class="u-text-baby-pink">variant:</span> filled or outline will toggle between <span class="u-text-baby-pink">c-btn--filled</span> and <span class="u-text-baby-pink">c-btn--outline</span> respectively.
                                        </li>
                                        <li>
                                            <span class="u-d-block u-text-primary">buttonTheme = 'primary' | 'secondary' </span>
                                            <span class="u-text-baby-pink">buttonTheme: primary</span> or <span class="u-text-baby-pink">secondary</span> will add <span class="u-text-baby-pink">c-btn--primary</span> or <span class="u-text-baby-pink">c-btn--secondary</span> to link class
                                        </li>
                                        <li>
                                            <span class="u-text-baby-pink">as="button"</span> and <span class="u-text-baby-pink">type="submit"</span> will make submit button
                                        </li>
                                        <li>
                                            <span class="u-text-baby-pink">data-disabled</span> will disable the button
                                        </li>
                                    </ul>
                                </p>
                            </div>
                    </section>

                    <!-- Image Component -->
                    <section class="content-wrap tab-pane fade l-stack-7" role="tabpanel" aria-labelledby="image-tab" id="image">
                    <h4 class="h1">Image Component</h4>
                        <div class="l-container styleguide-code-output u-text-dark">
                            <div class="l-row">
                                <div class="l-col-5">
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
                        <div class="tab-code-wrapper">
                            <ul class="nav nav-tabs tab-code u-d-flex u-justify-end" id="imageTab" role="tablist">
                                <li class="nav-item">
                                    <button class="nav-link active" id="php-image-tab" data-bs-toggle="tab" data-bs-target="#php-image" type="button" role="tab" aria-controls="php-image" aria-selected="true">PHP</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="html-image-tab" data-bs-toggle="tab" data-bs-target="#html-image" type="button" role="tab" aria-controls="html-image" aria-selected="false">HTML</button>
                                </li>
                            </ul>
                            <div class="tab-content tab-code-content">
                                    <div class="tab-pane fade show active" id="php-image" role="tabpanel" aria-labelledby="php-image-tab">
                                        <span class="u-d-block">
<pre><code>&lt;x-image 
    ratio="u-ratio-1x1"
    objectFit="cover"
    isLazy=true
    placeholder=""
    captionClass="u-text-align-end"
    captionContent="A caption for the above image"&gt;
&lt;/x-image&gt;</code></pre>
                                            </span>
                                        </div>
                                    <div class="tab-pane fade" id="html-image" role="tabpanel" aria-labelledby="html-image-tab">
                                            <span class="u-d-block">
<pre><code>&lt;figure class="c-image u-ratio-1x1"&gt;
    &lt;img src="" 
    class="c-image-img c-image-img--cover is-lazy-media-loaded"&gt;
        &lt;figcaption class="c-image-caption u-text-align-end"&gt;
        A caption for the above image&lt;/figcaption&gt;
    &lt;/figure&gt;    
&lt;/a&gt;</code></pre>
                                            </span>
                                    </div>
                                </div>
                            </div>

                            <div class="note">
                                <p class="u-mb-4">
                                    <h3 class="h4">Props: </h3>
                                    <ul class="l-stack-1 props-table">
                                        <li>
                                            <span class="u-d-block u-text-primary">AS = 'figure' | 'div' </span>
                                            <span class="u-text-baby-pink">as</span>="div" will change the <span class="u-text-baby-pink">x-image</span> component tag to <span class="u-text-baby-pink">div</span>. If as not mentioned in x-image component or as="", will take <span class="u-text-baby-pink">figure</span> as default
                                        </li>
                                        <li>
                                            <span class="u-d-block u-text-primary">Ratio = 'u-ratio-1x1' | 'u-ratio-16x9' </span>
                                            <span class="u-text-baby-pink">ratio</span> will ensure that the element maintains an aspect ratio. <span class="u-text-baby-pink">u-ratio-1x1</span>the utility class creates square-shaped container or component
                                        </li>
                                        <li>
                                            <span class="u-text-baby-pink">imgClass</span> will add classes to img tag
                                        </li>
                                        <li>
                                            <span class="u-text-baby-pink">objectFit</span> will change the property of <span class="u-text-baby-pink">Object fit: cover, fill, contain </span>as generated by object fit utility class
                                        </li>
                                        <li>
                                            <span class="u-text-baby-pink">isLazy</span> set make the image lazyload.On default it will be <span class="u-text-baby-pink">false</span>. Set <span class="u-text-baby-pink">true</span> to enable lazyload
                                        </li>
                                        <li>
                                            <span class="u-text-baby-pink">placeholder</span> image when set will show placeholder image in condition of no <span class="u-text-baby-pink">src or datasrc</span> image set
                                        </li>
                                        <li>
                                            <span class="u-text-baby-pink">captionClass</span> to figcaption
                                        </li>
                                        <li>
                                            <span class="u-text-baby-pink">captionContent</span> is the figcaption
                                        </li>
                                    </ul>
                                </p>
                            </div>
                    </section>


                    <!-- Video Component -->
                    <section class="content-wrap tab-pane fade l-stack-7" role="tabpanel" aria-labelledby="video-tab" id="video">
                    <h4 class="h1">Video Component</h4>
                        <div class="l-container styleguide-code-output u-text-dark">
                            <div class="l-row">
                                <div class="l-col-12">
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
                        <div class="tab-code-wrapper">
                            <ul class="nav nav-tabs tab-code u-d-flex u-justify-end" id="videoTab" role="tablist">
                                <li class="nav-item">
                                    <button class="nav-link active" id="php-video-tab" data-bs-toggle="tab" data-bs-target="#php-video" type="button" role="tab" aria-controls="php-video" aria-selected="true">PHP</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="html-video-tab" data-bs-toggle="tab" data-bs-target="#html-video" type="button" role="tab" aria-controls="html-video" aria-selected="false">HTML</button>
                                </li>
                            </ul>
                            <div class="tab-content tab-code-content">
                                    <div class="tab-pane fade show active" id="php-video" role="tabpanel" aria-labelledby="php-video-tab">
                                        <span class="u-d-block">
<pre><code>&lt;x-video 
    isLazy="true"
    videoClass="" 
    figureClass="" 
    objectFit="cover"
    ratio="u-ratio-16x9"
    placeholder="image url"
    src="video url"    
&gt;
&lt;/x-video&gt;</code></pre>
                                            </span>
                                        </div>
                                    <div class="tab-pane fade" id="html-video" role="tabpanel" aria-labelledby="html-video-tab">
                                            <span class="u-d-block">
<pre><code>&lt;div class="c-video c-video--default"&gt;
    &lt;div class="c-video-wrap"&gt;
        &lt;figure class="c-video-figure u-ratio-16x9"&gt;
            &lt;video id="" playsinline="" loop="" poster="" 
            class="c-video-player c-video-player--cover"&gt;
            &lt;source id="mp4" src="" type="video/mp4"&gt;
            &lt;/video&gt;
        &lt;/figure&gt;
        &lt;div class="c-video-control"&gt;
            &lt;button class="js-video-trigger-btn 
            js-video-player-btn c-video-control-btn"&gt;
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                            </span>
                                    </div>
                                </div>
                            </div>

                            <div class="note">
                                <p class="u-mb-4">
                                    <h3 class="h4">Props: </h3>
                                    <ul class="l-stack-1 props-table">
                                        <li>
                                            <span class="u-d-block u-text-primary">AS = 'div' | 'section' </span>
                                            <span class="u-text-baby-pink">as</span>="section" will change the <span class="u-text-baby-pink">x-video</span> component tag to <span class="u-text-baby-pink">section</span>. If as not mentioned in x-image component or as="", will take <span class="u-text-baby-pink">div</span> as default
                                        </li>
                                        <li>
                                            <span class="u-d-block u-text-primary">Ratio = 'u-ratio-1x1' | 'u-ratio-16x9' </span>
                                            <span class="u-text-baby-pink">ratio</span> will ensure that the element maintains an aspect ratio. <span class="u-text-baby-pink">u-ratio-1x1</span>the utility class creates square-shaped container or component
                                        </li>
                                        <li>
                                            <span class="u-text-baby-pink">figureClass</span> will add classes to figure tag
                                        </li>
                                        <li>
                                            <span class="u-text-baby-pink">videoClass</span> will add classes to video tag
                                        </li>
                                        <li>
                                            <span class="u-text-baby-pink">objectFit</span> will change the property of <span class="u-text-baby-pink">Object fit: cover, fill, contain</span> as generated by object fit utility class
                                        </li>
                                        <li>
                                            <span class="u-text-baby-pink">isLazy</span> set make the image lazyload.On default it will be false. Set true to enable lazyload
                                        </li>
                                        <li>
                                            <span class="u-text-baby-pink">placeholder</span> image when set will show placeholder image in condition of no src or datasrc image set
                                        </li>
                                        <li>
                                            <span class="u-text-baby-pink">src</span> will add video source to video tag
                                        </li>
                                    </ul>
                                </p>
                            </div>
                    </section>

                    <!-- Input Component -->
                    <section class="content-wrap tab-pane fade" role="tabpanel" aria-labelledby="input-tab" id="input">
                        <header class="l-stack-1">
                            <h4 class="h1">Input Component</h4>
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
                    <section class="content-wrap tab-pane fade" role="tabpanel" aria-labelledby="select-tab" id="select">
                        <header class="l-stack-1">
                            <h4 class="h1">Select Component</h4>
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
                    <section class="content-wrap tab-pane fade" role="tabpanel" aria-labelledby="card-media-tab" id="card-media">
                        <header class="l-stack-1">
                            <h4 class="h1">Card Media Component</h4>
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
                    <section class="content-wrap tab-pane fade" role="tabpanel" aria-labelledby="accordion-tab" id="accordion">
                        <header class="l-stack-1">
                            <h4 class="h1">Accordion Component</h4>
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


                    <!-- Styleguide -->
                    <section class="content-wrap tab-pane fade" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                        <header class="l-stack-1">
                            <h4 class="h1">Grid</h4>
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
                    <section class="content-wrap tab-pane fade" role="tabpanel" aria-labelledby="branding-tab" id="branding">
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

                    <section class="content-wrap tab-pane fade" role="tabpanel" aria-labelledby="typography-tab" id="typography">
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

                    <section class="content-wrap tab-pane fade" role="tabpanel" aria-labelledby="icon-tab" id="icon">
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
                    <section class="content-wrap tab-pane fade" role="tabpanel" aria-labelledby="utilities-tab" id="utilities">
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
                                    <div class="l-row u-mb-5 u-gx-5">
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

                                <div class="row u-mb-5">
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
