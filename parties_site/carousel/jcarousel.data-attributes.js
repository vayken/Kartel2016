(function($) {
    $(function() {
        $('.jcarousel').jcarousel();

        $('.jcarousel').jcarouselAutoscroll({
            interval: 5000,
            target: '+=1'
        })
        $('.jcarousel').hover(function() {
            $(this).jcarouselAutoscroll('stop');
        }, function() {
            $(this).jcarouselAutoscroll('start');
        });
        $('[data-jcarousel]').each(function() {
            var el = $(this);
            el.jcarousel(el.data());
        });

        $('[data-jcarousel-control]').each(function() {
            var el = $(this);
            el.jcarouselControl(el.data());
        });
        $('.jcarousel-pagination')
        .on('jcarouselpagination:active', 'a', function() {
            $(this).addClass('active');
        })
        .on('jcarouselpagination:inactive', 'a', function() {
            $(this).removeClass('active');
        })
        .jcarouselPagination({
            perPage: 1,
            item: function(page) {
                return '<a href="#' + page + '">' + 'l' + '</a>';
            }
        }
);
    });
})(jQuery);
