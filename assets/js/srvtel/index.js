(function () {
    const AllListContentInit = () => {
        const js_all_list_tag = $(".js_all_list_tag");
        const js_all_list_content = $(".js_all_list_content");

        js_all_list_tag.on("click", function () {
            const _ = $(this);
            if (_.hasClass("show")) {
                _.removeClass("show");
                js_all_list_content.slideUp(300);
            } else {
                _.addClass("show");
                js_all_list_content.slideDown(300);
            }
        });
    };
    $(window).on("load", function () {
        AllListContentInit();
    });
})();
