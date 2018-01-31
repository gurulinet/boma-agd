jQuery(function($){
    var viewport = $(window).width();
    if (viewport <= 414) {
        jQuery('.children').on("click", function() {
            jQuery('ul').toggleClass("display");
        });
    } else {
        jQuery('.children li').hover(
            function() {
                jQuery('ul', this).stop().slideDown(100);
            },
            function() {
                jQuery('ul', this).stop().slideUp(100);
            }
        );
    }
});
