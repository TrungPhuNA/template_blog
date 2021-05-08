var InitJs = {
   init : function ()
   {
        this.runToken()
       this.showNavBarAdmin()
   },
    runToken()
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    },

    showNavBarAdmin()
    {
        $(".js-type-navbar").off('click').on('click',function (){
            let $this = $(this)
            let URL = $this.attr('data-url')
            $.ajax(URL, {
                method: "GET",
                cache: true,
                beforeSend: function(){

                },
                success: function (results) {
                    $("#dataType").html(results)
                    $('body .js-sumo-select').SumoSelect();
                },
                error: function () {
                    console.log('Errors load article_content');
                }
            });
        })
    }
}

export default InitJs