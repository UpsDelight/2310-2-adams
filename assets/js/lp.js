(function () {
    AOS.init({
        once: true,
        duration: 1500,
    });
    $(".form").mCustomScrollbar({
        theme: "dark",
    });
    $(window).on("load", function () {
        if ($(".mw_wp_form").hasClass("mw_wp_form_confirm")) {
            $(".js_form01").addClass("open");
        } else {
            $(".js_form01").removeClass("open");
        }
        const header__btn_js = $(".header__btn_js");
        const close = $(".close");
        const js_form01 = $(".js_form01");
        const form01_wrap = $(".close");
        const html = $("html");

        const handleForm = (e) => {
            if (!e) {
                // open
                js_form01.addClass("open");
                html.css({
                    overflow: "hidden",
                });
            } else {
                // close
                js_form01.removeClass("open");
                html.css({
                    overflow: "",
                });
            }
        };
        header__btn_js.on("click", function () {
            const check = js_form01.hasClass("open");
            handleForm(check);
            return false;
        });
        close.on("click", function () {
            const check = js_form01.hasClass("open");
            handleForm(check);
            return false;
        });
        form01_wrap.on("click", function () {
            handleForm(true);
        });
        if($(".f__item,.accept_res span,.accept_res .txt")){
        addReColor();
        }

    });

    $(window).scroll(function (event) {
        if (window.innerWidth > 1023) {
            if (
                $(window).scrollTop() + $(window).height() >
                $(document).height() - 100
            ) {
                console.log($(window).width());
                $(".form01").css("top", "0");
            } else {
                $(".form01").removeAttr("style");
            }
        }
        if($(".f__item,.accept_res span,.accept_res .txt")){
            addReColor();
        }
        if ($(this).scrollTop() > 50) {
            $(".totop").css("transform", "translateY(0)");
        } else {
            $(".totop").removeAttr("style");
        }
    });

    $('a[href^="#"]').click(function() {
        if ($($(this).attr("href")).length) {
            var p = $($(this).attr("href")).offset();
            if ($(window).width() > 768) {
                $("html,body").animate({
                        scrollTop: p.top - 80,
                    },
                    600
                );
            } else {
                $("#gnavi").removeAttr("style");
                $(".c-toggle").removeClass("active");
                $("html,body").animate({
                        scrollTop: p.top - 85,
                    },
                    600
                );
            }
        }
        return false;
    });

    //Anchor scroll
    var hash1 = location.hash;
    var $root = $("html, body");
    if (hash1 !== "") {
        var top01 = $(hash1).offset().top;
        if ($(window).width() > 768) {
            $root.animate({ scrollTop: top01 - 130 }, 600);
        } else {
            $root.animate({ scrollTop: top01 - 85 }, 600);
        }
    }


    function addReColor() {
        if(typeof $(".point").offset() !== 'undefined'){
            let scroll = $(".point").offset().top;
            $(".f__item,.accept_res span,.accept_res .txt").each(function () {
                if ($(this).offset().top > scroll - 20) {
                    $(this).addClass("active");
                } else {
                    $(this).removeClass("active");
                }
            });
        }       
    }
})();

