function serializeForm($form) {
    var json = {};
    $form.find(':input').each(function () {
        if (this.name !== undefined || this.name !== '') {
            if ($(this).is('input:checkbox, input:radio')) {
                if (this.checked)
                    json[this.name] = $(this).val();
            }
            else
                json[this.name] = $(this).val();
        }
    });
    return json;
}
function deserializeForm($form, json) {
    $form.find(':input').each(function () {
        if (this.name !== undefined || this.name !== '') {
            var name = this.name, val = json[this.name];
            if ($(this).is('input:checkbox, input:radio')) {
                if (val !== undefined) {
                    if (this.value === val)
                        this.checked = true;
                    else
                        this.checked = false;
                }
                else
                    this.checked = false;
            }
            else {
                if (val !== undefined)
                    $(this).val(val);
                else
                    $(this).val('');
            }
        }
    });
}