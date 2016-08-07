(function ($) { $(document).ready(function() {

    var $window = $(window);
  	var html = $('html');
    var footer = $('#footer-bottom');

    footer.css('position','relative');

    function checkHeight() {
        var htmlSize = html.height();
        var windowsize = $window.height();

        if (windowsize > htmlSize) {
            footer.css({
                position: 'absolute',
                bottom: 0,
                height: ''
            });
        }
    } 

    $('.expanded a:first').on('click', function(){
        event.preventDefault();
    });
    // Execute on load
    checkHeight();
    // Bind event listener
    $(window).resize(checkHeight);

});
})(jQuery);