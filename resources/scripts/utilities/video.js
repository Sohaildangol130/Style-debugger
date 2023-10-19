import '../utilities/vimeoVideo.js';
import '../utilities/youtubeVideo.js';
class videoPlayer {
  constructor() {
    this.videoSection = document.querySelectorAll(`.c-video--default:not(.initialized)`);
    this.init();
  }

  init() {
    const self = this;

    this.videoSection.forEach((el) => {
      el.classList.add('initialized');
      const playPauseButton = el.querySelector('.js-video-player-btn');
      const videoMedia = el.querySelector('.c-video-player');
      const videoMediaWrap = el.querySelector('.c-video-wrap');
      playPauseButton.addEventListener('click', playPause);

      // each video on load start
      videoMedia.onloadstart = function () {
        this.classList.add('is-video-loading');
      };

      // each video on while video can start playing
      videoMedia.oncanplay = function () {
        this.classList.remove('is-video-loading');
        this.classList.add('is-video-loaded');
        videoMediaWrap.classList.add('is-video-ready');
      };

      // each video on play
      videoMedia.onplay = function () {
        if (videoMedia.dataset.initial === 'true') {
          playPauseButton.classList.remove('played');
          return;
        }
      };

      // each video on pause
      videoMedia.onpause = function () {
        if (videoMediaWrap.classList.contains('is-video-playing')) {
          playPauseButton.classList.remove('played');
          videoMediaWrap.classList.remove('is-video-playing');
          videoMedia.controls = false;
        } else {
          return;
        }
      };

      videoMedia.onseeking = () => {
        playPauseButton.classList.add('seeking');
        videoMediaWrap.classList.add('is-video-playing');
        videoMedia.controls = true;
      };

      videoMedia.onseeked = () => {
        videoMedia.play();
        playPauseButton.classList.add('played');
        playPauseButton.classList.remove('seeking');
        videoMediaWrap.classList.add('is-video-playing');
        videoMedia.controls = true;
      };

      const _iOSDevice = !!navigator.platform.match(/iPhone/);
      if (_iOSDevice) {
        videoMedia.playsInline = false;
        videoMedia.muted = false;
      }

      function playPause() {
        if (_iOSDevice) {
          videoMedia.dataset.initial = 'false';
          videoMedia.muted = false;
        }
        if (videoMedia.dataset.initial === 'true') {
          videoMedia.currentTime = 0;
          self.globalVideoPause();
          videoMedia.play();
          videoMedia.dataset.initial = 'false';
          videoMedia.muted = false;
          videoMedia.setAttribute('controls', 'true');
          videoMediaWrap.classList.add('is-video-playing');
        } else {
          if (videoMedia.paused) {
            self.globalVideoPause();
            videoMedia.play();
            playPauseButton.classList.add('played');
            videoMediaWrap.classList.add('is-video-playing');
            videoMedia.setAttribute('controls', 'true');
          } else {
            playPauseButton.classList.remove('played');
            videoMedia.pause();
            videoMediaWrap.classList.remove('is-video-playing');
            videoMedia.controls = false;
          }
        }
      }
    });
  }
  // pause all videos on the page
  globalVideoPause() {
    const globalVideos = document.querySelectorAll('.c-video--default');
    globalVideos.forEach((globalVideo) => {
      const globalVideoElement = globalVideo.querySelector('video');
      const playPauseButton = globalVideo.querySelector('.js-video-player-btn');
      if (globalVideoElement.dataset.initial === 'false') {
        globalVideo.classList.remove('is-video-playing');
        playPauseButton.classList.remove('played');
        globalVideoElement.pause();
        globalVideoElement.controls = false;
      }
    });
  }
}

export default videoPlayer;

new videoPlayer();
