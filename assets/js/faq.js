$(".js_accordion").each(function () {
    $(this).click(function () {
        $(this).next().stop().slideToggle();
        $(this).stop().toggleClass("is_open");
    });
});
$(".js_accordion").map(function () {
    const _ = $(this);
    _.hasClass("is_open") ? _.next().slideDown() : _.next().slideUp();
});
