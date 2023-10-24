(function () {
    const previewer_toggler = $('.previewer_toggler');
    const previewer_wrap = $('.previewer_wrap');

    const previewer_toggler_handle_click = () => {
        previewer_toggler.on('click', function () {
            const _ = $(this);
            const wrap = _.next('.previewer_wrap');

            if (_.hasClass('open')) {
                // -- ▷ close ◁ -- //
                _.removeClass('open');
                wrap.slideUp(1000);
            } else {
                // -- ▷ open ◁ -- //
                _.addClass('open');
                wrap.slideDown(1000);
            }
        });
    };
    const previewer_wrap_state = () => {
        previewer_wrap.slideUp();
    };

    const Init = () => {
        previewer_wrap_state();
        previewer_toggler_handle_click();
    };

    Init();
})();
