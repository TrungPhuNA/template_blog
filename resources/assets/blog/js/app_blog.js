import "./libraries/lazyLoading"
import "./common/cv_suggest"
import "./common/sidebar_wrapper_mb"
import "./common/rate_star"
import "./common/navigation"

import SiteMapTag from "./pages/site_map_tag";

var AppFull = {
    init(){
        if($('.alpha-list').length > 0) SiteMapTag.init();

        this.fixedHeader();
        this.toggleSearch();
        this.toggleModal();
        this.removeWhiteSpace();
    },

    fixedHeader()
    {
        let $body = $('body');
        let $header = $("#header-v2");
        let height = $header.outerHeight() + 20;
        $(window).bind("scroll", function () {
            let $menu = $(".header-bot");
            if ($menu.length > 0) {
                if ($(window).scrollTop() > $('#header').height()) {
                    $body.css('padding-top', $menu.height());
                    $menu.addClass("menu-fixed");
                } else {
                    $body.css('padding-top', '0px');
                    $menu.removeClass("menu-fixed");
                }
            } else if ($header.is(":visible")) {
                if ($(window).scrollTop() > height) {
                    $body.css('padding-top', height);
                    $header.addClass("header-v2-fixed");
                } else {
                    $body.css('padding-top', '0px');
                    $header.removeClass("header-v2-fixed");
                }
            }
        });
    },

    toggleSearch()
    {
        let $body = $('body');
        $("#btn-search").click(function () {
            $body.toggleClass("no-scroll");
            $(".popup-search").toggleClass("d-flex");
            $("#btn-search i").toggleClass("fa fa-search").toggleClass("fa fa-times");
        });
        $('.navbar-btn-search').click(function () {
            $(".navbar-fixed__menu__search").toggleClass("d-hidden");
            $(".navbar-responsive__form").toggleClass("d-hidden");
        });
        $('.navbar-close-search').click(function () {
            $(".navbar-fixed__menu__search").toggleClass("d-hidden");
            $(".navbar-responsive__form").toggleClass("d-hidden");
        });
    },

    toggleModal()
    {
        let $body = $('body');
        $("#btn-open-madal").click(function () {
            $body.toggleClass("no-scroll");
            $(".cat-modal").toggleClass("d-block");
            $(".navbar-responsive__form").toggleClass("d-hidden");
            $("#btn-open-madal i").toggleClass("fa fa-bars").toggleClass("fa fa-times");
        });
    },

    removeWhiteSpace()
    {
        $('.post-detail__content li').each(function () {
            if ('' === $.trim($(this).text())) {
                $(this).remove();
            }
        });
    },

};

$(function () {
    AppFull.init();
});