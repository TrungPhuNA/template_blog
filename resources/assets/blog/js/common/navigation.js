var Navigation = {
    init() {
        this.loadMoreMenu();
    },
    loadMoreMenu() {
        $('.js-more-menu').off('click').on("click", function (e) {
            e.preventDefault();
            $('.action-popup').fadeToggle('fast');
            $('.wrapper-mb').toggle();
            $('html').toggleClass('no-scroll');
        });
        $('.wrapper-mb').on('click', function () {
            $('.js-more-menu').trigger("click");
        })
    }
};

$(function () {
    Navigation.init();
});