(function () {
    $('.expand_button').on('click', function () {
        const _ = $(this);
        const check = _.hasClass('expand');
        const overflow = $(this).parents('.overflow');
        if (check) {
            overflow.css({
                height: '',
            });
            _.removeClass('expand');
            overflow.removeClass('expand');
        } else {
            overflow.css({
                height: 'auto',
            });
            _.addClass('expand');
            overflow.addClass('expand');
        }
    });

    const js_concerns_tab_item = $('.js_concerns_tab_item');
    js_concerns_tab_item.map((a, b) => {
        const _ = $(b);
        if (!_.hasClass('active')) {
            _.hide();
        }
    });
    const js_concerns_tab_button = $('.js_concerns_tab_button');
    js_concerns_tab_button.on('click', function () {
        const _ = $(this);
        if (!_.hasClass('active')) {
            const tab_id = _.attr('data-tab-id');
            js_concerns_tab_button.removeClass('active');
            _.addClass('active');

            js_concerns_tab_item.removeClass('active');
            js_concerns_tab_item.hide();
            $(tab_id).addClass('active');
            $(tab_id).show();
        }
    });
})();
