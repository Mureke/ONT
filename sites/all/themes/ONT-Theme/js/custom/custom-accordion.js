(function ($) { $(document).ready(function() {

    $('.accordion-section .accordion-header').on('click', function(){
        var self = $(this);

        var content = self.parent().find('.accordion-content');

        if(!content.is(":visible")){
             content.slideDown(300);
             content.parent().find('i').css('transform', 'rotate(90deg)');
        }
        else{
            content.slideUp(300);
            content.parent().find('i').css('transform', 'rotate(0)');
        }
    });

    $('area[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);
        console.log($target)
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top-55
        }, 700, 'swing', function () {
            window.location.hash = target;
        });

           var content = $target.parent().find('.accordion-content');

        if(!content.is(":visible")){
             content.slideDown(300);
             content.parent().find('i').css('transform', 'rotate(90deg)');
        }
    });


  
});
})(jQuery);