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
});

/***/ }),

/***/ 47:
/***/ (function(module, exports) {

// Use the CDN or host the script yourself
// https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js
// https://matthewelsom.com/assets/js/libs/instafeed.min.js

var userFeed = new Instafeed({
    get: 'user',
    userId: '1434371074',
    clientId: 'e76694fd38c7412482d957c8fa45c8a4',
    accessToken: '1434371074.1677ed0.911988fab4b64ae29eccb01405fb1a76',
    resolution: 'standard_resolution',
    template: '\
    <div class="col-sm-3">\
        <div class="card  p-3">\
            <span class="pb-3"><b>Beauty Bliss</b></span>\
            <div class="img-container">\
              <a href="{{link}}" target="_blank" id="{{id}}" class="py-3"><img src="{{image}}" class="img-fluid" /></a>\
            </div>\
            <span><i class="far fa-heart"></i> {{likes}} <i class="far fa-comment"></i> {{comments}}</span>\
        </div>\
    </div>\
    ',
    sortBy: 'most-recent',
    limit: 4,
    links: false
});
userFeed.run();

/***/ })

/******/ });