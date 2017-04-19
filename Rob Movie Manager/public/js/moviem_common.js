/*
 * Common files that are included on every page.
 */


jQuery(document).ready(function($) {

    /*
     * Movie Collection index: make entire <th> clickable
     * (not just the <a> text).
     */
    $('.moviem-index th').click(function() {
        var href = $(this).find('a').attr('href');
        if (href) {
            window.location = href;
        }
    });

});
