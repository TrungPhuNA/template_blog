var Auth = {
    init : function()
    {
        this.runToken()
        this.showPopupLogin()
    },


    showPopupLogin()
    {
        $("body").on("click",".js-form-login", function(event){
            event.preventDefault()
            console.log("show form")
        })
    }
}

export default Auth