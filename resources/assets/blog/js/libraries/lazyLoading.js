import LazyLoad from "../libraries/lazyload.min";

function lazyLoading  () {
    (function () {
        function logElementEvent(eventName, element) {
            Date.now(), eventName, element.getAttribute("data-src")
        }
        let ll = new LazyLoad({
            elements_selector: '.lazy',
            load_delay: 300,
            threshold: 0,
            callback_enter: function (element) {

                logElementEvent("ENTERED", element);
            },
            callback_load: function (element) {
                logElementEvent("LOADED", element);
            },
            callback_set: function (element) {
                logElementEvent("SET", element);
            },
            callback_error: function (element) {
                logElementEvent("ERROR", element);
            }
        });
        $(".card-img-top").show();
    }());
}
lazyLoading();