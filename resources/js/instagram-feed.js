// Use the CDN or host the script yourself
// https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js
// https://matthewelsom.com/assets/js/libs/instafeed.min.js

var userFeed = new Instafeed({
    get: 'user',
    userId: '3588443679',
    clientId: '502665ce97d040c0b33927e6011e493e',
    accessToken: '3588443679.1677ed0.4b226543a5e340d5b1bcf4e33cf1c5ce',
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