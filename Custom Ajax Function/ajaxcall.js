/*
*
* Authour :Nilesh Patil
* Data: 11 April 2018
* reference link  : http://www.csharpdocs.com/generic-ajax-function-using-jquery/
* How to call function 
* POST method : Common.Ajax('POST', 'submit.php', formData, 'json', successUserCreateHandler);
* GET method : Common.Ajax('GET', 'submit.php', obj, 'html',successUserCreateHandler);
* successUserCreateHandler : custom function for handle response
*/



// set default options for toaster
toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": true,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

var Common = {

    Ajax: function (httpMethod, url, data, type, successCallBack, formtype='simple', async, cache) {

        if (typeof async == "undefined") {
            async = true;
        }
        if (typeof cache == "undefined") {
            cache = false;
        }

        options = {
            type: httpMethod.toUpperCase(),
            url: url,
            data: data,
            dataType: type,
            async: async,
            cache: cache,
            success: successCallBack,
            error: function (err, type, httpStatus) {
                Common.AjaxFailureCallback(err, type, httpStatus);
            }
        };

        if(formtype == 'file'){
            options.processData = false;
            options.contentType = false;
        }

        var ajaxObj = $.ajax(options);

        return ajaxObj;
    },

    DisplaySuccess: function (message) {
        Common.ShowSuccessSavedMessage(message);
    },

    DisplayError: function (message) {
        Common.ShowFailSavedMessage(message);
    },

    AjaxFailureCallback: function (err, type, httpStatus) {
        var failureMessage = 'Error occurred in ajax call' + err.status + " - " + err.responseText + " - " + httpStatus;
        console.log(failureMessage);
    },

    ShowSuccessSavedMessage: function (messageText) {

        toastr["success"](messageText, "Inserted Successfully");
    },

    ShowSuccessUpdateMessage: function (messageText) {

        toastr["info"](messageText, "Updated Successfully");
    },

    ShowSuccessDeleteMessage: function (messageText) {

        toastr["error"](messageText, "Deleted Successfully");
    },

    ShowFailSavedMessage: function (messageText) {

    	console.log("Error"+messageText);

    }
}

