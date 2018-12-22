$(document).ready(function () {

    $('.contact-form').submit(function () {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            dataType: 'json',
            data: $(this).serialize(),
   
            success: function (data, status) {
                if (status === 'success') {
                    $('.flash-message-success').removeClass('d-none');
                }
            },
            error: function(err) {
                errorMessages = err.responseJSON.errors;
                if (err.status === 422) {
                    if (errorMessages.contactFormName) {
                        $('.flash-message-name span').html(errorMessages.contactFormName[0]);
                        $('.flash-message-name').removeClass('d-none');
                    }
                    else {
                        $('.flash-message-name').addClass('d-none');
                    }
                    if (errorMessages.contactFormEmail) {
                        $('.flash-message-email span').html(errorMessages.contactFormEmail[0]);
                        $('.flash-message-email').removeClass('d-none');
                    }
                    else {
                        $('.flash-message-email').addClass('d-none');
                    }
                    if (errorMessages.contactFormMessage) {
                        $('.flash-message-message span').html(errorMessages.contactFormMessage[0]);
                        $('.flash-message-message').removeClass('d-none');
                    }
                    else {
                        $('.flash-message-message').addClass('d-none');
                    }
                }
            }
        });

        return false;
    });


   
});




