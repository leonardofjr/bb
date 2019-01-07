class ModalAjaxRequest {
    constructor(url, id) {
        this.url = url;
        this.id = id;
    }
    init() {
        this.get();
    }

    get() {
        $.get(this.url + '/gallery/' + this.getId(), function (data) {
            $('.modal-description').html(data.description);
            $('.modal-body img').attr('src', 'storage/' + data.basename);
            $('.modal-body img').attr('alt', data.description);
        })
    }

    getId() {
        return this.id;
    }
}

$('#portfolio-gallery img').click(function() {
    // Storing selected image id
    id = $(this).data('id');
    let modal = new ModalAjaxRequest('http://localhost:8000/api',id);
    modal.init();
})