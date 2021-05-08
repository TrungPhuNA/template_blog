var Transaction = {
    init : function ()
    {
        console.log('init Transaction')
        this.showModalTransaction()
    },
    showModalTransaction()
    {
        $(".js-show-note-transaction").click( function (event){
            event.preventDefault()
            let $this = $(this)
            let URL = $this.attr('href')
            $.ajax(URL, {
                method: "GET",
                url : URL,
                cache: true,
                beforeSend: function(){

                },
                success: function (results) {
                    console.log(results)

                },
                error: function () {
                    console.log('Errors load article_content');
                }
            });
        })
    }
}

export default Transaction