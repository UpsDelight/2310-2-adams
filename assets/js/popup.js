(function () {
    const open_popup = $('.open_popup');
    const layr_popup = $('.layr_popup');
    const layr_popup_mask = $('.layr_popup .layr_popup_mask');
    const layr_popup_item = $('.layr_popup .layr_popup_item');
    const layr_popup_close = $('.layr_popup .layr_popup_close');

    const reset = () => {
        layr_popup.removeClass('open');
        layr_popup_item.hide();
    }
    const PopupState = (id) => {
        if (id) {
            console.log(id)
            const target = $(id);
            layr_popup.addClass('open');
            target.show();
        } else {
            reset();
        }
    };

    open_popup.on('click', function () {
        const _ = $(this);
        const data_id = _.attr('data-popup-id');
        if (data_id) {
            PopupState(data_id);
        }
        return false;
    });
    layr_popup_mask.on('click', function () {
        PopupState(0);
        return false;
    });
    layr_popup_close.on('click', function () {
        PopupState(0);
        return false;
    });
    // -- ▷ setup
    reset();

})();