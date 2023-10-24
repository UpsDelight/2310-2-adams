(function () {
    window.isScrolling = false;

    const ani = $('.ani');
    const AniInit = () => {
        ani.map((a, b) => {
            const _ = $(b);
            let _wy = window.scrollY,
                _wh = window.innerHeight,
                _top = _wy + _wh;

            if (_.offset().top < _top) {
                _.addClass('animated');
            }
        });
    };

    const ToTop = $('.to_top');
    const ToTopInit = () => {
        let _wy = window.scrollY;

        _wy > 100 ? ToTop.addClass('show') : ToTop.removeClass('show');
    };

    const HTMLAnimate = (e) => {
        let _timed = Math.abs(window.scrollY - e);

        _timed > 1000 ? (_timed = 1000) : _timed < 300 ? (_timed = 300) : null;

        let _ww = window.innerWidth,
            _header_height = 160;

        _ww < 1025 && (_header_height = 100);
        _ww < 768 && (_header_height = 80);
        let _top_ex_header = e - _header_height;

        $('html').animate(
            {
                scrollTop: _top_ex_header,
            },
            _timed * 0.5,
            function () {
                setTimeout(function () {
                    window.isScrolling = false;
                }, 300);
            }
        );
    };

    const HeaderInit = () => {
        const has_drop_menu = $('.has_drop_menu');
        const js_open_target = $('.js_open_target');
        const nav_mask = $('.nav_mask');

        const drop_menu = has_drop_menu.find('.drop_menu');

        if (window.innerWidth <= 1025) {
            drop_menu.slideUp(0);
        }

        js_open_target.on('click', function () {
            const wiw = window.innerWidth;
            if (wiw < 1025) {
                const _ = $(this);
                const target = _.attr('data-target') || 0;
                if (target && _.parent().hasClass('active')) {
                    $(target).slideUp(300);
                    _.parent().removeClass('active');
                } else {
                    $(target).slideDown(300);
                    _.parent().addClass('active');
                }
            }
        });

        has_drop_menu
            .on('mouseenter', function () {
                const wiw = window.innerWidth;
                if (wiw >= 1025) {
                    nav_mask.addClass('show');
                }
            })
            .on('mouseleave', function () {
                const wiw = window.innerWidth;
                if (wiw >= 1025) {
                    nav_mask.removeClass('show');
                }
            });

        //*! -> toggler
        const nav_toggler = $('.nav_toggler');
        const js_nav_sp = $('.js_nav_sp');
        nav_toggler.on('click', function () {
            const _ = $(this);
            if (_.hasClass('active')) {
                js_nav_sp.removeClass('show');
                _.removeClass('active');
                $('html').css({
                    overflow: '',
                });
            } else {
                js_nav_sp.addClass('show');
                _.addClass('active');
                $('html').css({
                    overflow: 'hidden',
                });
            }
        });
    };

    const { hash } = window.location;
    if (hash) {
        $('html').animate(
            {
                scrollTop: 0,
            },
            0
        );
        const target = $(hash);
        const ScrollToInit = (e) => {
            let _wy = window.scrollY;
            e = e | 0;
            _wy = _wy | 0;
            if (e !== _wy) {
                $('html').animate(
                    {
                        scrollTop: e,
                    },
                    300
                );
            }
        };

        setTimeout(function () {
            let _top = target.offset().top || 0,
                _ww = window.innerWidth;
            _ww > 767 ? (_top -= 180) : (_top -= 80);
            if (_top > 0) {
                ScrollToInit(_top);
            }
        }, 300);

        $(window).on('load', function () {
            let _top = target.offset().top || 0,
                _ww = window.innerWidth;
            _ww > 767 ? (_top -= 180) : (_top -= 100);
            if (_top > 0) {
                ScrollToInit(_top);
            }
        });
    }

    const html = $('html');
    const js_goto = $('.js_goto');

    const HTML_animate = (e) => {
        const { scrollY, innerWidth } = window;
        let _time = Math.abs(e - scrollY);
        (_time > 1000) & (_time = 1000);
        let _top = e - 152;
        if (innerWidth < 768) {
            _top = e - 62;
        }
        html.animate(
            {
                scrollTop: _top,
            },
            _time
        );
    };

    js_goto.on('click', function (e) {
        e.preventDefault();
        const _ = $(this);
        const data_id = _.attr('href') || 0;
        // console.log(data_id)
        if (data_id) {
            const top = $(data_id).offset().top;
            
            HTML_animate(top);
            // $('.previewer_toggler.open').trigger('click');
            if(!$(data_id).find('.previewer_toggler').hasClass('open')){
                $(data_id).find('.previewer_toggler').trigger('click');
            }
        }

        return false;
    });

    const js_goto_local = $('.js_goto_local');

    js_goto_local.on('click', function () {
        const _ = $(this);
        const target = _.attr('data-local-id') || 0;
        if (target) {
            localStorage.setItem('target_id', target);
        }
    });

    $(window).on('load', function () {
        AniInit();
        ToTopInit();
        HeaderInit();

        ToTop.on('click', function () {
            window.isScrolling = true;
            HTMLAnimate(0);
        });

        const js_scroll_to = $('.js_scroll_to');
        js_scroll_to.on('click', function (e) {
            e.preventDefault();
            const _ = $(this);
            let _target_id = _.attr('href') || _.attr('data-target-id'),
                _target = $(_target_id);
            HTMLAnimate(_target.offset().top);

            const nav_toggler = $('.nav_toggler');
            const js_nav_sp = $('.js_nav_sp');
            js_nav_sp.removeClass('show');
            nav_toggler.removeClass('active');

            $('html').css({
                overflow: '',
            });

            return false;
        });
    });
    $(window).on('scroll', function () {
        AniInit();
        ToTopInit();
    });
    $(window).on('resize', function () {
        const wiw = window.innerWidth;
        const drop_menu = $('.drop_menu');
        if (wiw <= 1024) {
            drop_menu.slideUp(0);
        } else {
            drop_menu.slideDown(0);
        }
    });
})();
(function () {
    const LoadLocal = () => {
        const target = localStorage.getItem('target_id');
        // console.log(target);
        if (target) {
            setTimeout(function () {
                const height = $('.header').innerHeight();
                const top = $(target).offset().top - height - 20;
                $('html').animate(
                    {
                        scrollTop: top,
                    },
                    600
                );
                const toggler = $(target).find('.previewer_toggler');
                toggler && toggler.click();
            }, 500);
        }

        localStorage.removeItem('target_id');
    };

    $(window).on('load', function () {
        LoadLocal();
    });
})();
