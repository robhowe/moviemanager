/*
 * Common files that are included on every page.
 */


// API keys are free at TMDb.org so please sign up for your own.
var k = 'af7df5acc6dc1bcef9272d6c2c3a5e84';

// When tmdb_id is wrong, indicate it:
var badTmdbidHtml = '<span class="glyphicon glyphicon-alert" title="Incorrect TMDb ID"></span>';


function trailerCallback(self) {
   return function(jsonData) {
        if ((typeof(jsonData) !== "undefined") &&
            (typeof(jsonData.youtube) !== "undefined") &&
            (typeof(jsonData.youtube[0]) !== "undefined")) {
            var videoKey = '';
            if (typeof(jsonData.youtube[0].source) !== "undefined") {
                videoKey = jsonData.youtube[0].source;
            } else if (typeof(jsonData.youtube[0].key) !== "undefined") {
                videoKey = jsonData.youtube[0].key;
            } else {
                return;
            }
            // YouTube "embed" is fullscreen,
            // or "watch" is within webpage.
            var youTubeUrl = 'https://www.youtube.com/embed/' + videoKey;
            var html = '<a class="glyphicon glyphicon-facetime-video" href="' +
                       youTubeUrl + '" target="_blank"' +
                       ' rel="external"' +
                       ' title="Click to view trailer"></a>';
            self.html(html).fadeIn(1000);
        }
    };
}


jQuery(document).ready(function($) {

    /*
     * Show YouTube trailer link, if any.
     */
    $('.moviem-trailer-data').each(function() {
        var self = $(this);
        $.getJSON('http://api.themoviedb.org/3/movie/' +
                  self.data('tmdb_id') + '/trailers',
                  {api_key: k},
                  trailerCallback(self))
                 .fail(function() {
                     self.html(badTmdbidHtml).fadeIn(1000);
                 });
    });


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
