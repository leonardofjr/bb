/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 44);
/******/ })
/************************************************************************/
/******/ ({

/***/ 44:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(45);


/***/ }),

/***/ 45:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(46);
__webpack_require__(47);
__webpack_require__(48);

/***/ }),

/***/ 46:
/***/ (function(module, exports) {

$(document).ready(function () {

    $('.contact-form').submit(function () {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            dataType: 'json',
            data: $(this).serialize(),

            success: function success(data, status) {
                if (status === 'success') {
                    $('.flash-message-success').removeClass('d-none');
                }
            },
            error: function error(err) {
                errorMessages = err.responseJSON.errors;
                if (err.status === 422) {
                    if (errorMessages.contactFormName) {
                        $('.flash-message-name span').html(errorMessages.contactFormName[0]);
                        $('.flash-message-name').removeClass('d-none');
                    } else {
                        $('.flash-message-name').addClass('d-none');
                    }
                    if (errorMessages.contactFormEmail) {
                        $('.flash-message-email span').html(errorMessages.contactFormEmail[0]);
                        $('.flash-message-email').removeClass('d-none');
                    } else {
                        $('.flash-message-email').addClass('d-none');
                    }
                    if (errorMessages.contactFormMessage) {
                        $('.flash-message-message span').html(errorMessages.contactFormMessage[0]);
                        $('.flash-message-message').removeClass('d-none');
                    } else {
                        $('.flash-message-message').addClass('d-none');
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

            success: function success(data, status) {
                if (status === 'success') {
                    $('.flash-message-newsletter-form-success').removeClass('d-none');
                }
            },
            error: function error(err) {
                response = err.responseJSON;
                if (err.status === 422) {
                    if (errorMessages.contactFormName) {
                        $('.flash-message-newsletter-form-name span').html(errorMessages.contactFormName[0]);
                        $('.flash-message-newsletter-form-name').removeClass('d-none');
                    } else {
                        $('.flash-message-newsletter-form-name').addClass('d-none');
                    }
                    if (errorMessages.contactFormEmail) {
                        $('.flash-message-newsletter-form-email span').html(errorMessages.contactFormEmail[0]);
                        $('.flash-message-newsletter-form-email').removeClass('d-none');
                    } else {
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

            success: function success(data, status) {
                if (status === 'success') {
                    console.log(data);
                    location.href = '/admin/user-panel/gallery/';
                }
            },
            error: function error(xhr, status, err) {
                response = err.responseJSON;
                console.log(xhr.responseText);
            }
        });

        return false;
    });
});

/***/ }),

/***/ 47:
/***/ (function(module, exports) {

$('.our-work-responsive-carousel').slick({
    dots: false,
    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 1000,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 6,
            slidesToScroll: 3,
            infinite: true,
            dots: true
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    }]
});

/***/ }),

/***/ 48:
/***/ (function(module, exports) {

(function ($) {
    // On Load 
    setActiveTab('.tabs li:nth-child(1)');
    showTabContent('.tabs_content', 'tabs li:nth-child(1)');

    // On Click
    $('.tabs').children().click(function () {
        if (!$(this).hasClass('active')) {
            setActiveTab($(this));
            showTabContent('.tabs_content', $(this));
        }
    });
})(jQuery);

function setActiveTab(e) {
    // Removing active class from siblings
    $(e).siblings().removeClass('active');
    // Adding active class to current selection
    $(e).addClass('active');
}

function hideTabContent(e) {
    // Hiding all tab content as a precaution
    $(e).children().slideUp();
}
function showTabContent(e, listItem) {
    hideTabContent(e);
    // Displaying content to the corresponding selection
    $(e).children().eq($(listItem).index()).slideDown();
}

/***/ })

/******/ });