(function () {
    'use strict';

    /* ---------------------------------------------------------------
       The switch.

       The theme is already stamped on the root element by the inline
       script in the head, so this file only has to handle the press.
       Nothing here is required for the page to be readable — with the
       script blocked, the site simply follows the system setting.
       --------------------------------------------------------------- */
    var root = document.documentElement;
    var toggle = document.querySelector('[data-theme-toggle]');

    var isDark = function () {
        if (root.classList.contains('dark')) return true;
        if (root.classList.contains('light')) return false;
        return window.matchMedia('(prefers-color-scheme: dark)').matches;
    };

    if (toggle) {
        toggle.setAttribute('aria-pressed', String(isDark()));

        toggle.addEventListener('click', function () {
            var next = !isDark();

            root.classList.toggle('dark', next);
            root.classList.toggle('light', !next);
            toggle.setAttribute('aria-pressed', String(next));

            try {
                localStorage.setItem('binary:theme', next ? 'dark' : 'light');
            } catch (error) {}
        });
    }

    /* Another tab, or the OS, may change the setting while this page is
       open. Only follow it while the visitor has expressed no preference
       of their own — an explicit choice outranks the room. */
    var system = window.matchMedia('(prefers-color-scheme: dark)');

    var followSystem = function (event) {
        var stored = null;

        try {
            stored = localStorage.getItem('binary:theme');
        } catch (error) {}

        if (stored) return;

        root.classList.toggle('dark', event.matches);
        root.classList.toggle('light', !event.matches);

        if (toggle) toggle.setAttribute('aria-pressed', String(event.matches));
    };

    if (system.addEventListener) {
        system.addEventListener('change', followSystem);
    }
})();
