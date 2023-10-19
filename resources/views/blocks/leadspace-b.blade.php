{{--
    script[leadspace.js]script
    style[modules/slider.scss,modules/leadspace.scss]style
    Title: Leadspace B
    Description: Leadspace Description]
    Category: outside
    Icon: admin-tools
    Keywords: leadspace
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
    EnqueueAssetsCSS:
    EnqueueAssetsJS:
--}}
<!-- leadspace html goes here -->

@if ( ! empty( $is_preview  ) )
    @php
        /* Render screenshot for example */
        $imgUrl = \Roots\asset('images/preview/leadspace-1-XL_2x.webp')->uri();
    @endphp
    <img loading="lazy" src="{!! $imgUrl !!}" style="width:100%;height:auto;">
@else
    <h1 class="h1 u-text-align-center">BOOTSTRAP</h1>

    <!-- 50/50 -->
    <section class="m-leadspace-50/50 py-12">
        <div class="container">
            <div class="row gy-5 gy-lg-0">
                <div class="col-lg-4 offset-lg-1">
                    <div class="m-leadspace__details">
                        <p class="m-leadspace__eyebrow p">Eyebrow</p>
                        <h1 class="m-leadspace__title h1 mt-1">Long title goes here</h1>
                        <p class="m-leadspace__description p mt-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ea commodi explicabo, atque, ipsa neque blanditiis numquam eveniet sequi laborum, cum dolore consequuntur itaque sapiente beatae quod omnis quas alias.
                        </p>
                    </div>
                    <a href="#" class="m-leadspace__btn mt-4 c-btn c-btn--filled c-btn--primary">Read the article</a>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="c-image">
                        <figure class="ratio ratio-16x9 u-bg-black-dark">
                            <img class="object-fit" src="https://images.unsplash.com/photo-1688374705239-c17dd6b68435?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1344&q=80" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="m-leadspace-50/50 py-12">
        <div class="container">
            <div class="row gy-5 gy-lg-0">
                <div class="col-lg-4 offset-lg-1">
                    <div class="m-leadspace__details">
                        <p class="m-leadspace__eyebrow p">Eyebrow</p>
                        <h1 class="m-leadspace__title h1 mt-1">Long title goes here</h1>
                        <p class="m-leadspace__description p mt-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ea commodi explicabo, atque, ipsa neque blanditiis numquam eveniet sequi laborum, cum dolore consequuntur itaque sapiente beatae quod omnis quas alias.
                        </p>
                    </div>
                    <a href="#" class="m-leadspace__btn mt-4 c-btn c-btn--filled c-btn--primary">Read the article</a>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="c-video">
                        <div class="c-video-wrap">
                            <figure class="c-video-figure mb-0 ratio ratio-21x9">
                                <video autoplay="" loop="" controls="" class="w-100 h-100 u-fit-cover" width="640" height="480">
                                    <source type="video/mp4" src="http://media.w3.org/2010/05/sintel/trailer.mp4">
                                </video>
                            </figure>
                            <div class="c-video-control">
                                <button class="js-video-trigger-btn js-video-player-btn c-video-control-btn">
                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.88064 1.07826C2.19773 0.112919 0.833336 0.903736 0.833336 2.84319V17.1555C0.833336 19.0969 2.19773 19.8866 3.88064 18.9222L16.3903 11.748C18.0738 10.7823 18.0738 9.21779 16.3903 8.25234L3.88064 1.07826Z" fill="#211651" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FULL BG: TEXT LEFT VARIATION -->
    <section class="m-leadspace-full-bg py-12 position-relative">
        <div class="container">
            <div class="c-image">
                <figure class="position-absolute top-0 start-0 h-100 w-100">
                    <img class="object-fit h-100 w-100" src="https://images.unsplash.com/photo-1688374705239-c17dd6b68435?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1344&q=80" alt="">
                </figure>
            </div>
            <div class="row gy-5 gy-lg-0 position-relative u-z-9">
                <div class="col-lg-4 offset-lg-1">
                    <div class="m-leadspace-full__details u-text-white-light">
                        <p class="m-leadspace-full__eyebrow p">Eyebrow</p>
                        <h1 class="m-leadspace-full__title h1 mt-1">Long title goes here</h1>
                        <p class="m-leadspace-full__description p mt-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ea commodi explicabo, atque, ipsa neque blanditiis numquam eveniet sequi laborum, cum dolore consequuntur itaque sapiente beatae quod omnis quas alias.
                        </p>
                    </div>
                    <a href="#" class="m-leadspace-full__btn mt-4 c-btn c-btn--filled c-btn--primary">Read the article</a>
                </div>
            </div>
        </div>
    </section>

    <br>
    <br>
    <br>
    <br>

    <!-- FULL BG: TEXT CENTER VARIATION -->
    <section class="m-leadspace-full-bg py-12 position-relative mb-12">
        <div class="container">
            <div class="c-image">
                <figure class="position-absolute top-0 start-0 h-100 w-100">
                    <video muted autoplay="" loop="" controls="" class="w-100 h-100 u-fit-cover" width="640" height="480">
                        <source type="video/mp4" src="http://media.w3.org/2010/05/sintel/trailer.mp4">
                    </video>
                </figure>
            </div>
            <div class="row justify-content-center gy-5 gy-lg-0 position-relative u-z-9">
                <div class="col-lg-4 text-center">
                    <div class="m-leadspace-full__details u-text-white-light">
                        <p class="m-leadspace-full__eyebrow p">Eyebrow</p>
                        <h1 class="m-leadspace-full__title h1 mt-1">Long title goes here</h1>
                        <p class="m-leadspace-full__description p mt-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ea commodi explicabo, atque, ipsa neque blanditiis numquam eveniet sequi laborum, cum dolore consequuntur itaque sapiente beatae quod omnis quas alias.
                        </p>
                    </div>
                    <a href="#" class="m-leadspace-full__btn mt-4 c-btn c-btn--filled c-btn--primary">Read the article</a>
                </div>
            </div>
        </div>
    </section>


@endif
