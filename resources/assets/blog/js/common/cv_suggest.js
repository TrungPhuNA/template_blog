$(document).ready(function () {
    let cv_suggest = $(".cv-suggestion");
    let cvsg_direction = $(".cv-suggestion__direction span");
    cvsg_direction.click(function () {
        $(this).toggleClass('fa-angle-down').toggleClass('fa-angle-up');
        cv_suggest.toggleClass('cv-suggestion--show').toggleClass('cv-suggestion--collapsed');
    });
    $(window).bind("scroll", function () {
        $(window).scrollTop() > 1000 ? cv_suggest.removeClass("d-hidden") : cv_suggest.addClass("d-hidden");
    });
});