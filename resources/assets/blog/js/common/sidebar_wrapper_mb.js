$(document).ready(function () {
    var overlay = $(".overlay");
    var sidebar_mb = $(".sidebar-wrapper-mb");
    var sidebar_mb_left = $(".sidebar-wrapper-mb .sidebar-left");
    var sidebar_mb_right = $(".sidebar-wrapper-mb .sidebar-right");
    $(".btn-bars").click(function () {
        $("body").addClass("no-scroll");
        overlay.addClass("active-right");
        sidebar_mb.addClass("active-left");
        sidebar_mb_left.addClass("d-block");
    });
    $(".btn-menu").click(function () {
        $("body").addClass("no-scroll");
        overlay.addClass("active-left");
        sidebar_mb.addClass("active-right");
        sidebar_mb_right.addClass("d-block");
    });
    overlay.click(function () {
        $("body").removeClass("no-scroll");
        overlay.removeClass("active-left").removeClass("active-right");
        sidebar_mb.removeClass("active-left").removeClass("active-right");
        sidebar_mb_left.removeClass("d-block");
        sidebar_mb_right.removeClass("d-block");
    });
});