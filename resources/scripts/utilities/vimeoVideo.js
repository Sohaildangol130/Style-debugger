class vimeoVideoPlayer {
  constructor() {
    this.videoSection = document.querySelectorAll(`.c-video--vimeo:not(.initialized)`);
    this.init();
  }

  init() {
    let tag = document.createElement('script');
    //   let Vimeo;
    tag.src = 'https://player.vimeo.com/api/player.js';
    let firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    setTimeout(() => {
      this.videoSection.forEach((el) => {
        el.classList.add('initialized');
        const playButton = el.querySelector('.js-video-trigger-btn--play');
        const pauseButton = el.querySelector('.js-video-trigger-btn--pause');
        const videoMediaWrap = el.querySelector('.c-video-wrap');
        /* eslint-disable */
        let player = new Vimeo.Player(el.querySelector('.c-video-figure'), {
          url: el.querySelector('.c-video-figure').dataset.src,
          loop: true,
          title: false,
          byline: false,
          portrait: false,
          controls: false,
          responsive: true,
          muted: true,
          autopause: false,
        });

        playButton.addEventListener('click', playTrigger);
        pauseButton.addEventListener('click', pauseTrigger);

        player.on('loaded', function () {
          videoMediaWrap.classList.add('is-video-ready');
        });

        player.on('play', function () {
          videoMediaWrap.classList.remove('is-video-ready');
          videoMediaWrap.classList.add('is-video-playing');
        });

        player.on('pause', function () {
          console.log('Paused the video');
          videoMediaWrap.classList.add('is-video-ready');
          videoMediaWrap.classList.remove('is-video-playing');
        });

        function playTrigger() {
          player.play();
          videoMediaWrap.classList.add('is-video-playing');
          videoMediaWrap.classList.remove('is-video-ready');
        }

        function pauseTrigger() {
          player.pause();
          videoMediaWrap.classList.add('is-video-ready');
          videoMediaWrap.classList.remove('is-video-playing');
        }
      });
    }, 1000);
  }
}

export default vimeoVideoPlayer;

new vimeoVideoPlayer();
