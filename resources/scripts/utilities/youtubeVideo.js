class YoutubeVideoPlayer {
  constructor() {
    this.videoSection = document.querySelectorAll('.c-video--youtube:not(.initialized)');
    this.init();
  }

  async init() {
    // Load YouTube API script dynamically
    await new Promise((resolve, reject) => {
      const tag = document.createElement('script');
      tag.src = 'https://www.youtube.com/iframe_api';
      const firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      tag.onload = resolve;
      tag.onerror = reject;
    });
    const youtubeParser = (url) => {
      const regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/;
      const match = url.match(regExp);
      return match && match[7].length === 11 ? match[7] : false;
    };
    this.videoSection.forEach((el) => {
      el.classList.add('initialized');
      const playButton = el.querySelector('.js-video-trigger-btn--play');
      const pauseButton = el.querySelector('.js-video-trigger-btn--pause');
      const videoMediaWrap = el.querySelector('.c-video-wrap');
      videoMediaWrap.classList.add('is-video-ready');
      const videoFigure = el.querySelector('.c-video-figure');
      const videoId = youtubeParser(videoFigure.dataset.src);

      let player;
      let done = false;
      const onPlayerReady = (event) => {
        event.target.playVideo();
      };

      const onPlayerStateChange = (event) => {
        /* eslint-disable */
        if (event.data == YT.PlayerState.PLAYING && !done) {
          // setTimeout(stopVideo, 6000);
          videoMediaWrap.classList.remove('is-video-ready');
          videoMediaWrap.classList.add('is-video-playing');
          done = true;
        } else if (event.data == YT.PlayerState.PLAYING) {
          videoMediaWrap.classList.remove('is-video-ready');
          videoMediaWrap.classList.add('is-video-playing');
        } else {
          videoMediaWrap.classList.add('is-video-ready');
          videoMediaWrap.classList.remove('is-video-playing');
        }
      };

      const stopVideo = () => {
        player.stopVideo();
      };

      // Event delegation for play and pause buttons
      videoMediaWrap.addEventListener('click', (event) => {
        const target = event.target;
        if (target === playButton) {
          if (!player) {
            /* eslint-disable */
            player = new YT.Player(videoFigure, {
              videoId: videoId,
              playerVars: {
                playsinline: 1,
                autoplay: 1,
                muted: 1,
                controls: 0,
              },
              events: {
                onReady: onPlayerReady,
                onStateChange: onPlayerStateChange,
              },
            });
          } else {
            player.playVideo();
          }
          videoMediaWrap.classList.remove('is-video-ready');
          videoMediaWrap.classList.add('is-video-playing');
        } else if (target === pauseButton) {
          player && player.pauseVideo();
          videoMediaWrap.classList.add('is-video-ready');
          videoMediaWrap.classList.remove('is-video-playing');
        }
      });
    });
  }
}

export default YoutubeVideoPlayer;

new YoutubeVideoPlayer();
