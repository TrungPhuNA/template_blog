import './../plugins/jquery.login.google';
import Service from "../config/service";

function login_google(element)
{
    return $(document.getElementById(element)).login_google({
        appID: Service.google.client_id,
    });
}

export {
    login_google
}