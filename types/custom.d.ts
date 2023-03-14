/**
 * Idiosyncratic webpack typings
 *
 * @see {@link https://webpack.js.org/guides/typescript/#importing-other-assets}
 */

import type {Alpine} from 'alpinejs';

declare global {
  interface Window {
    Alpine: Alpine;
  }
}
