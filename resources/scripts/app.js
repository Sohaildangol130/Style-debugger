import domReady from '@roots/sage/client/dom-ready';
import { lazyLoad } from './utilities/lazyload.js';
import './utilities/video.js';
import './utilities/vimeoVideo.js';
import 'bootstrap/js/src/collapse.js';
import 'bootstrap/js/src/tab.js';
import { cssDebugger } from './debugger/css-debugger.js';
// import 'bootstrap/js/src/offcanvas.js'

/**
 * Application entrypoint
 */
domReady(async () => {
  lazyLoad();
  cssDebugger();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);

console.log('i am hrer');
