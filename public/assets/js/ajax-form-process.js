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
                    $('.flash-message-contact-form-success').removeClass('d-none');
                }
            },
            error: function(err) {
                response = err.responseJSON;
                if (err.status === 422) {
                    if (response.contactFormName) {
                        $('.flash-message-contact-form-name span').html(response.contactFormName[0]);
                        $('.flash-message-contact-form-name').removeClass('d-none');
                    }
                    else {
                        $('.flash-message-contact-form-name').addClass('d-none');
                    }
                    if (response.contactFormEmail) {
                        $('.flash-message-contact-form-email span').html(response.contactFormEmail[0]);
                        $('.flash-message-contact-form-email').removeClass('d-none');
                    }
                    else {
                        $('.flash-message-contact-form-email').addClass('d-none');
                    }
                    if (response.contactFormMessage) {
                        $('.flash-message-contact-form-message span').html(response.contactFormMessage[0]);
                        $('.flash-message-contact-form-message').removeClass('d-none');
                    }
                    else {
                        $('.flash-message-contact-form-message').addClass('d-none');
                    }
                }
            }
        });

        return false;
    });


    $('.newsletter-form').submit(function () {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            dataType: 'json',
            data: $(this).serialize(),

            success: function (data, status) {
                if (status === 'success') {
                    $('.flash-message-newsletter-form-success').removeClass('d-none');
                }
            },
            error: function (err) {
                response = err.responseJSON;
                if (err.status === 422) {
                    if (response.contactFormName) {
                        $('.flash-message-newsletter-form-name span').html(response.contactFormName[0]);
                        $('.flash-message-newsletter-form-name').removeClass('d-none');
                    }
                    else {
                        $('.flash-message-newsletter-form-name').addClass('d-none');
                    }
                    if (response.contactFormEmail) {
                        $('.flash-message-newsletter-form-email span').html(response.contactFormEmail[0]);
                        $('.flash-message-newsletter-form-email').removeClass('d-none');
                    }
                    else {
                        $('.flash-message-newsletter-form-email').addClass('d-none');
                    }
                }
            }
        });

        return false;
    });


    $('#gallery-upload-form').submit(function () {
        var formData = new FormData($('#gallery-upload-form')[0]);
        if ($('#gallery-overlay-checkbox').attr('data-id')) {
            formData.set('gallery-overlay-checkbox', $('#gallery-overlay-checkbox').attr('data-id'));
        }
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            dataType: 'json',
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            data: formData,

            success: function (data, status) {
                if (status === 'success') {
                    console.log(data);
                    location.href = '/admin/user-panel/gallery/';
                }
            },
            error: function (xhr, status, err) {
                response = err.responseJSON;
                console.log(xhr.responseText);
            }
        });

        return false;
    });


      
   
});




