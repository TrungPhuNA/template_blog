import {to_slug} from "../helpers/function";

var SEO = {
    init : function ()
    {
        this.showFormSeo()
        this.keypressInput()
    },

    showFormSeo()
    {
        $(".js-action-seo").click(function (event){
            event.preventDefault()
            $(".box-seo").toggleClass('hide')
        })
    },

    keypressInput()
    {
        $(".keypress-count").keyup(function (event){
            event.preventDefault()
            let $this = $(this)
            let value = $this.val()
            let slug = to_slug(value)
            let elementSlug = $this.attr('data-slug')
            let elementTitleSeo = $this.attr('data-title-seo')
            let elementDescSeo = $this.attr('data-description-seo')
            $(elementSlug).val(slug)
            $(elementTitleSeo).val(value)
            $(elementTitleSeo).text(value)

            $(elementDescSeo).val(value)
            $(elementDescSeo).text(value)
            $(elementSlug).text(slug)
        })
    }
}

export default SEO
