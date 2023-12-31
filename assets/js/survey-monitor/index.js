$(function () {
    /**
     * アコーディオン
     */
    let accordionDetails = '.js-accordion';
    let accordionSummary = '.js-summary';
    let accordionContent = '.js-content';
    let speed = 500;

    $(accordionSummary).each(function () {
        $(this).on("click", function (event) {
            // デフォルトの挙動を無効化
            event.preventDefault();
            if ($(this).parent($(accordionDetails)).attr("open")) {
                // アコーディオンを閉じるときの処理
                $(this).nextAll($(accordionContent)).slideUp(speed, function () {
                    $(this).parent($(accordionDetails)).removeAttr("open");
                    $(this).show();
                });
            } else {
                // アコーディオンを開くときの処理
                $(this).parent($(accordionDetails)).attr("open", "true");
                $(this).nextAll($(accordionContent)).hide().slideDown(speed);
            }
        })
    });

    /**
     * スムーススクロール
     */
    $(document).on('click', 'a[href*="#"]', function () {
        let time = 500;
        let header = $('header').innerHeight();
        let target = $(this.hash);
        if (!target.length) return;
        let targetY = target.offset().top - header;
        $('html,body').animate({ scrollTop: targetY }, time, 'swing');
        return false;
    });
});