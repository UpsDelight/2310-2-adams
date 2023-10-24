(function () {
    const service_threedom = $(".service_threedom");
    const circle_around = $(".circle_around");
    const service_box = $(".service_box");
    const service_block = $(".service_block");
    const service_fake_block = $(".service_fake_block");

    const ConvertDegToRad = (e) => {
        return (e * Math.PI) / 180;
    };

    const state = {
        prev_pos: 0,
        is_scrolling: false,
    };

    const config = {
        base_screen: 1600,
        base_width: 678,

        screen_1: 1200,
        screen_2: 767,

        fps: 60,

        initial: null,

        circle_line: {
            x: 0,
            y: 0,
            width: 230,
            height: 230,
        },
        pos: [
            {
                x: 0,
                y: 0,
            },
            {
                x: 240,
                y: 240,
            },
            {
                x: 120,
                y: 120,
            },
        ],
    };

    const UpdateText = (e) => {
        service_block.removeClass("actived");

        service_block.eq(e).addClass("actived");
        circle_around.eq(e).addClass("actived");
    };

    const Update = (step = 0) => {
        const { circle_line, pos } = config;

        circle_around.map((a, b) => {
            const _ = $(b);
            const { x, y, width, height } = circle_line;

            let _step = step;
            pos[a].x += _step;
            pos[a].y += _step;

            pos[a].x > 360
                ? (pos[a].x -= 360)
                : pos[a].x < -360
                ? (pos[a].x += 360)
                : null;

            pos[a].y > 360
                ? (pos[a].y -= 360)
                : pos[a].y < -360
                ? (pos[a].y += 360)
                : null;

            let p = ConvertDegToRad(pos[a].x),
                f = ConvertDegToRad(pos[a].y),
                _x = x + Math.cos(p) * width, // center x - pos w
                _y = y + Math.sin(f) * height; // center y - pos h

            // if (pos[a].x === 360) {
            //     //*! -> stop it

            //     UpdateText(a);
            //     ReInit();
            // }
            _.css({
                transform: "translate3d(" + _x + "px, " + _y + "px, 0)",
            });

            // _.text(pos[a].x);
        });
    };
    Update();

    let _scroll_auto_animation;
    const TimeoutForScrollAnimation = (e) => {
        let _timing = 30,
            _unit = 120 / _timing,
            _t = 0;

        _scroll_auto_animation = setInterval(function () {
            if (_t >= _timing) {
                clearInterval(_scroll_auto_animation);
            } else {
                _t++;
                Update(e * _unit);
            }
        }, 10);
    };

    const ResetAnimation = () => {
        const { circle_line } = config;

        const base_pos = [
            {
                x: 0,
                y: 0,
            },
            {
                x: 240,
                y: 240,
            },
            {
                x: 120,
                y: 120,
            },
        ];

        circle_around.map((a, b) => {
            const _ = $(b);
            const { width, height } = circle_line;

            let p = ConvertDegToRad(base_pos[a].x),
                f = ConvertDegToRad(base_pos[a].y),
                _x = Math.cos(p) * width, // center x - pos w
                _y = Math.sin(f) * height; // center y - pos h

            _.css({
                transform: "translate3d(" + _x + "px, " + _y + "px, 0)",
            });
        });

        config.pos = [...base_pos];
    };

    const ThreedomCircleInit = () => {
        const { base_screen, screen_1, screen_2 } = config;
        const screen_custom = 1400;
        const ww = window.innerWidth,
            wy = window.scrollY;

        let _scale = 1;
        // if (ww < base_screen && ww > screen_custom) {
        //     _scale = ww / base_screen;
        // }
        if (ww <= base_screen && ww > 1024) {
            _scale = (ww - 400) / screen_custom;
        }
        // if (ww <= screen_1 && ww > 1024) {
        //     _scale = (ww - 200) / screen_1;
        // }
        service_threedom.css({
            transform: `scale(${_scale})`,
        });
    };

    let _resetAnimation;
    const ThreedomCircleScrollInit = () => {
        const { scrollby, is_scrolling } = state;

        const { scrollY, innerHeight, innerWidth } = window;
        if (innerWidth <= 1024) return false;

        if (window.isScrolling) {
            clearTimeout(_resetAnimation);
            _resetAnimation = setTimeout(function () {
                ResetAnimation();

                //*! -> reset for all block service
                const r_slide = $(".r_slide");

                service_fake_block.removeClass("actived");
                circle_around.removeClass("actived");

                service_fake_block.eq(0).addClass("actived");
                circle_around.eq(0).addClass("actived");
                // r_slide.css({
                //     transform: "translate3d(0,0,0)",
                // });
            }, 300);

            return false;
        }

        const top = service_real_block.offset().top,
            height = service_real_block.innerHeight();

        if (
            top <= scrollY &&
            top + height >= scrollY + innerHeight * 0.5 &&
            !is_scrolling
        ) {
            const fakeActive = $(".service_fake_block.actived");
            const index = fakeActive.index();
            const r_slide = $(".r_slide");

            if (index !== -1) {
                if (scrollby === "up" && index - 1 >= 0) {
                    if (!state.is_scrolling) {
                        state.is_scrolling = true;

                        const prev = index - 1;
                        const prevTarget = service_fake_block.eq(prev);

                        let _circle_index = prev;
                        if (_circle_index < 0) {
                            _circle_index = circle_around.length - 1;
                        }

                        service_block.removeClass("actived");
                        service_fake_block.removeClass("actived");
                        circle_around.removeClass("actived");

                        prevTarget.addClass("actived");
                        service_block.eq(_circle_index).addClass("actived");
                        circle_around.eq(_circle_index).addClass("actived");
                        TimeoutForScrollAnimation(-1);
                        // r_slide.css({
                        //     transform: `translate3d(${prev * -100}%,0,0)`,
                        // });

                        $("html").animate(
                            {
                                scrollTop: prevTarget.offset().top,
                            },
                            300,
                            function () {
                                setTimeout(function () {
                                    state.is_scrolling = false;
                                }, 300);
                            }
                        );
                    }
                }

                if (
                    scrollby === "down" &&
                    index + 1 < service_fake_block.length
                ) {
                    if (!state.is_scrolling) {
                        state.is_scrolling = true;
                        const next = index + 1;
                        const nextTarget = service_fake_block.eq(next);

                        let _circle_index = next;
                        if (_circle_index >= circle_around.length) {
                            _circle_index = next - circle_around.length;
                        }
                        service_block.removeClass("actived");
                        service_fake_block.removeClass("actived");
                        circle_around.removeClass("actived");

                        nextTarget.addClass("actived");
                        service_block.eq(_circle_index).addClass("actived");
                        circle_around.eq(_circle_index).addClass("actived");

                        TimeoutForScrollAnimation(1);
                        // r_slide.css({
                        //     transform: `translate3d(${next * -100}%,0,0)`,
                        // });
                        $("html").animate(
                            {
                                scrollTop: nextTarget.offset().top,
                            },
                            300,
                            function () {
                                setTimeout(function () {
                                    state.is_scrolling = false;
                                }, 300);
                            }
                        );
                    }
                }
            } else {
                service_fake_block.map((a, b) => {
                    const _ = $(b);

                    if (
                        _.offset().top <= scrollY &&
                        top + _.innerHeight() > scrollY
                    ) {
                        _.addClass("actived");
                    }
                });
            }
        }
    };

    const service_real_block = $(".service_real_block");
    const ContainerFixedInit = () => {
        const { scrollY, innerHeight, innerWidth } = window;
        const target = service_real_block.find(".container_fixed");
        if (innerWidth <= 1024) {
            target.removeClass("fixed");
            target.removeClass("top");
            target.removeClass("bottom");
            return false;
        }

        const top = service_real_block.offset().top;
        const height = service_real_block.innerHeight();

        if (scrollY >= top && scrollY + innerHeight <= top + height) {
            target.addClass("fixed");
            target.removeClass("top");
            target.removeClass("bottom");
        }

        if (scrollY + innerHeight > top + height) {
            target.removeClass("fixed");
            target.removeClass("top");
            target.addClass("bottom");
        }
        if (scrollY < top) {
            target.addClass("top");
            target.removeClass("fixed");
            target.removeClass("bottom");
        }

        // if()
    };
    $(window).on("load", function () {
        ThreedomCircleInit();
        ContainerFixedInit();
        ThreedomCircleScrollInit();
    });

    $(window).on("scroll", function () {
        const { prev_pos } = state;
        const { scrollY } = window;

        if (scrollY < prev_pos) {
            // console.log("up");
            state.scrollby = "up";
        } else {
            // console.log("down");
            state.scrollby = "down";
        }
        ContainerFixedInit();
        ThreedomCircleScrollInit();

        // service_fake_block.map((a, b) => {
        //     const _ = $(b);
        //     const top = _.offset().top;
        //     if (top < window.scrollY + window.innerHeight * 0.5) {
        //         service_block.removeClass("actived");
        //         service_block.eq(a).addClass("actived");
        //         Update(10);
        //     }
        // });

        state.prev_pos = scrollY;
    });
    $(window).on("resize", function () {
        ThreedomCircleInit();
        ContainerFixedInit();
    });
})();
