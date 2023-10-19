import domReady from '@roots/sage/client/dom-ready';
import { registerBlockStyle, unregisterBlockStyle } from '@wordpress/blocks';
import { lazyLoad } from './utilities/lazyload.js';
import './utilities/video.js';
/**
 * Editor entrypoint
 */
domReady(() => {
  unregisterBlockStyle('core/button', 'outline');

  registerBlockStyle('core/button', {
    name: 'outline',
    label: 'Outline',
  });
  lazyLoad();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
