var initUser = {
    init : function ()
    {
        this.showModalUser()
        this.updateInfoUser()
    },
    showModalUser()
    {
        $(".js-show-note-user").click( function (event){
            event.preventDefault()
            let $this = $(this)
            let URL = $this.attr('href')
            $this.parents('tr').addClass('active')
            $.ajax(URL, {
                method: "GET",
                url : URL,
                cache: true,
                beforeSend: function(){

                },
                success: function (results) {
                    $("body #modal-content").html(results.html)
                    $("#user-note").modal({
                        show : true
                    })
                },
                error: function () {
                    console.log('Errors load article_content');
                }
            });
        })
    },

    updateInfoUser()
    {
        $("body").on("click",".js-update-user", function (event){
            let $this = $(this)
            let $domForm = $this.closest('form');
            let URL = $domForm.attr('action')
            let ajax = $.ajax({
                method : "POST",
                url : URL,
                data: $domForm.serialize()
            });
            ajax.done(function (results) {
               console.log(results)
                let $trTable = $(".table-responsive tr.active");
                $(results.html).insertAfter($trTable)
                $trTable.remove()
                $("#user-note").modal('hide')
            });
            ajax.fail(function (results) {
                var errors = results.responseJSON;
                $.each(errors.errors, (i, val) => {
                    $domForm.find('input[name=' + i + ']').siblings('.error-form').text(val[0]);
                });
            });
        })
    }
}

export default initUser