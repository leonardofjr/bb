export class BasicValidation {
    constructor() {
        this.fields = [];
    }

    addField(ele, field) {
        if (field) {
            this.fields.push({
                field: field[0],
                ele: ele
            });
        }
    }

    init(ele) {
        this.hide(ele);
        this.validate();
    }

    hide(ele) {
            $(ele).addClass('d-none');
    }

    validate() {
        this.fields.forEach(function(item, i) {
                $(item.ele).removeClass('d-none');
                $(item.ele).html(item.field);
        })
    }
}
