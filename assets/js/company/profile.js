(function () {
    const { hash } = window.location;
    if (hash) {
        $("html").animate(
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
                $("html").animate(
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

        $(window).on("load", function () {
            let _top = target.offset().top || 0,
                _ww = window.innerWidth;
            _ww > 767 ? (_top -= 180) : (_top -= 100);
            if (_top > 0) {
                ScrollToInit(_top);
            }
        });
    }
})();
