    "use strict";

    var validate = function(event){

        var theForm = document.getElementById('loginForm');
        var result = true;
        if (theForm.username.value === "" || theForm.username.value.length < 2)
                {
                document.getElementById("message").innerHTML = "You must provide a user name.";
                event.preventDefault();
                result = false;
                }
        if (theForm.password.value === "" || theForm.password.value.length < 2)
                {
                document.getElementById("message").innerHTML = "You must provide a password.";
                event.preventDefault();
                result = false;
                }
        return result;
    }

    //tell the browser what to do when the form gets submitted
    window.onload = function () {
        document.getElementById('loginForm').onsubmit = function(event){validate(event);};
    }  