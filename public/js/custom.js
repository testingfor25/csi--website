/*================================
Preloader
==================================*/

var preloader = $('#preloader');
$(window).on('load', function () {
    setTimeout(() => {
        preloader.fadeOut('slow', function () { $(this).remove(); });
    }, 50);
});
