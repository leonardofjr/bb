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