/*global dotclear */
'use strict';

dotclear.ready(() => {
  /**
   * Check connection
   *
   * @return     {?boolean}  true/false depending on connection, null if cannot be tested
   */
  dotclear.dmOnline = () => ('onLine' in navigator ? navigator.onLine : null);
});
