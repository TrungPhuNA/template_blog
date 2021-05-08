import {to_slug} from "./../helpers/function";
var Charcounter = {
    contentInput : null,
    init: function () {
        this.countChar()
    },
    countChar() {
        let _this = this
        $(".keypress-count").keyup(function (event) {
            event.preventDefault();
            let $this = $(this);
            let $prev = $this.prev();
            let countMax = $prev.attr('data-max')
            let value = $this.val();
            let age = (parseInt(countMax) - parseInt(value.length))
            let html = `(` + age + ` character(s) remain)`;

            if (age <= 0) {
                $this.val(_this.contentInput)
                return false
            }

            _this.contentInput = value
            let elementMapping = $this.attr('data-add-content')

            if (typeof elementMapping !== "undefined") {
                $(elementMapping).text(value)
                $(elementMapping).val(value)
            }

            let elementMappingSlug = $this.attr('data-add-slug')
            if (typeof elementMappingSlug !== "undefined") {
                $(elementMappingSlug).text(to_slug(value))
                $(elementMappingSlug).val(to_slug(value))
            }

            $prev.html(html);
        })
    }
}

export default Charcounter
