/*global dotclear */
'use strict';

dotclear.ready(() => {
  /**
   * Check connection
   *
   * @return     {?boolean}  true/false depending on connection, null if cannot be tested
   */
  dotclear.dmOnline = () => ('onLine' in navigator ? navigator.onLine : null);

  /**
   * Show/Hide comment content
   *
   * @param      {Element}  line           The line containing comment ID
   * @param      {string}   [prefix='dm']  The prefix to use to provide comment content line ID
   * @param      {boolean}  [clean=false]  The clean flag (true = escaped HTML)
   */
  dotclear.dmViewComment = (line, prefix = 'dm', clean = false) => {
    if (line.getAttribute('id') === null) {
      return;
    }

    const commentId = line.getAttribute('id').substring(4);
    const lineId = `${prefix}${commentId}`;
    let li = document.getElementById(lineId);

    if (li) {
      li.style.display = li.style.display === 'none' ? '' : 'none';
      line.classList.toggle('expand');
    } else {
      // Get comment content if possible
      dotclear.getCommentContent(
        commentId,
        (content) => {
          if (content) {
            li = document.createElement('li');
            li.id = lineId;
            li.className = 'expand';
            li.insertAdjacentHTML('afterbegin', content);
            line.classList.add('expand');
            line.parentNode.insertBefore(li, line.nextSibling);
            return;
          }
          // No content, content not found or server error
          line.classList.remove('expand');
        },
        {
          metadata: false,
          clean,
        },
      );
    }
  };

  /**
   * Show/Hide entry content
   *
   * @param      {Element}  line           The line containing comment ID
   * @param      {string}   [prefix='dm']  The prefix to use to provide comment content line ID
   * @param      {boolean}  [clean=false]  The clean flag (true = escaped HTML)
   */
  dotclear.dmViewPost = (line, prefix = 'dm', clean = false) => {
    if (line.getAttribute('id') === null) {
      return;
    }

    const postId = line.getAttribute('id').substring(4);
    const lineId = `${prefix}${postId}`;
    let li = document.getElementById(lineId);

    if (li) {
      li.style.display = li.style.display === 'none' ? '' : 'none';
      line.classList.toggle('expand');
    } else {
      // Get content
      dotclear.getEntryContent(
        postId,
        (content) => {
          if (content) {
            li = document.createElement('li');
            li.id = lineId;
            li.className = 'expand';
            li.insertAdjacentHTML('afterbegin', content);
            line.classList.add('expand');
            line.parentNode.insertBefore(li, line.nextSibling);
            return;
          }
          // No content, content not found or server error
          line.classList.remove('expand');
        },
        {
          clean,
          length: 300,
        },
      );
    }
  };
});
