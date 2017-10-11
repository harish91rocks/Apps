(function ($) {
    $.fn.formValidate = function () {
        var regExpNotEmpty = /\S+/,
                regExpEmail = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/,
                regExpNumber = /^(-?\d+?\d*(\.0+)?)?$/;
        var config = {
            'validate_form': function ($form) {
                var $fileds = $form.find(':input'), $field, isFormValid = true;
                $fileds.each(function () {
                    $field = $(this);
                    if (!$field.is(':disabled')) {
                        if (!config.validate_field($(this)))
                            isFormValid = false;
                    }
                });
                if (!isFormValid) {
                    $form.find('.has-error:first :input').focus();
                }
                return isFormValid;
            },
            'validate_field': function ($field) {
                var value = $field.val(),
                        //noSpaces = value.replace(/\s/g, ''),
                        message = 'Please fill out this field !',
                        $fieldContainer = $field.closest('.form-group'),
                        $form = $field.closest('form'),
                        isValid = true,
                        isRequired = ($field.is('[data-required="true"]') || $field.is('[required]')),
                        isEmail = ($field.is('[type="email"]') || $field.is('[data-type="email"]')),
                        isNumber = ($field.is('[type="number"]') || $field.is('[data-type="number"]')),
                        isChkbx = $field.is('[type="checkbox"]'),
                        isRadio = $field.is('[type="radio"]'),
                        isBtn = $field.is('[type="button"],[type="submit"],[type="reset"], button'),
                        hasPattern = ($field.attr('pattern') || false),
                        isEmpty = !regExpNotEmpty.test(value);
                if (isBtn)
                    return true;
                else if (isEmail)
                    message = 'Please enter an email address !';
                else if (isNumber)
                    message = 'Please enter a number !';
                else if (isChkbx)
                    message = 'Please check this box to proceed !';
                else if (isRadio)
                    message = 'Please select one of these options !';
                if (hasPattern)
                    message = 'Please enter in correct format !';
                if ($field[0].validationMessage)
                    message = $field[0].validationMessage;
                if ($field.attr('error'))
                    message = $field.attr('error');
                if (isChkbx || isRadio)
                    $fieldContainer = $field.parent();
                if (isRequired) {
                    if ((isEmpty && !isChkbx && !isRadio) || (isChkbx && !$field.is(':checked'))) {
                        isValid = false;
                    }
                    if (isRadio) {
                        var name = $field.attr('name');
                        if (name) {
                            if (!$form.find('[name="' + name + '"]').is(':checked')) {
                                isValid = false;
                            } else {
                                $form.find('[name="' + name + '"]').parent().removeClass('has-error');
                            }
                        } else if (!$field.is(':checked')) {
                            isValid = false;
                        }
                    }
                }
                if ((isEmail && !regExpEmail.test(value)) || (isNumber && !regExpNumber.test(value)))
                    isValid = false;
                if (hasPattern) {
                    var pattern = '^' + hasPattern + '$';
                    if (!new RegExp(pattern).test(value))
                        isValid = false;
                    else
                        isValid = true;
                }
                if ($field[0].validationMessage)
                    isValid = false;
                if (isValid) {
                    $fieldContainer.removeClass('has-error');
                    $fieldContainer.find('.validation-msg').remove();
                } else {
                    $fieldContainer.addClass('has-error');
                    config.create_message($fieldContainer, message);
                }
                $field.data('is-valid', isValid);
                return isValid;
            },
            'create_message': function ($msg_container, message) {
                var $msg_block = $msg_container.find('.validation-msg>span');
                if ($msg_block.length === 0) {
                    $msg_container.append('<div class="validation-msg gradient"><span/></div>');
                    $msg_block = $msg_container.find('.validation-msg>span');
                }
                $msg_block.html(message);
            },
            'show_message': function ($field) {
                $field.closest('.has-error').find('.validation-msg').addClass('show');
            },
            'hide_message': function ($field) {
                if (!$field.is(':focus'))
                    $field.closest('.has-error').find('.validation-msg').removeClass('show');
            }
        };
        return this.each(function () {
            var $form = $(this);
            $form.find(':input').each(function () {
                var $field = $(this);
                $field.on('focus blur input keyup paste change', function () {
                    config.validate_field($field);
                });
                $field.on('focus keyup paste', function () {
                    config.show_message($field);
                });
                $field.on('blur', function () {
                    config.hide_message($field);
                });
            });
            $form.on('submit', function () {
                var flag = config.validate_form($form);
                $form.data('is-valid', flag);
                $form.attr('disable-enter-key', flag);
                return flag;
            });
            $form.on('reset', function () {
                $form.find('.has-error').removeClass('has-error');
                $form.find('.validation-msg').remove();
            });
        });
    };
    $('form[data-validation="true"]').formValidate();
    $('form[data-validation="true"]').attr('novalidate', true);
})(jQuery);
$('body').on("keyup keypress", '[disable-enter-key="true"]', function (e) {
    var code = e.keyCode || e.which;
    if (code === 13 && !$(e.target).is('textarea')) {
        e.preventDefault();
        return false;
    }
});