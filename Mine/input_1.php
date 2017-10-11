<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Input</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="resource/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="resource/style/colors.css" rel="stylesheet">
        <style>
            .no-radius{
                border-radius:0;
            }
            .inline-block{
                display: block;
            }
            .input-error *{
                display:none;
            }
            .input-error.in *{
                display:inline-block;
                z-index:10000;
            }
            .input-error>span{
                position: absolute;
                bottom: 100%;
                margin-left:2px;
                border:4px solid transparent;
                border-top:none;
                border-bottom-color: #F44336;
            }
            .input-error>.error{
                position: absolute;
                padding:4px 8px;
                margin-top:4px;
                margin-right:15px;
                font-size: 12px;
                font-weight: bold;
                background-color: #F44336;
                color: #fff;
                pointer-events:none;
                box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.6);
            }
            .input-group{margin:0;}
        </style>
    </head>
    <body>
        <?php include_once './header.html'; ?>
        <div id="body_body">
            <div class="container">
                <h1 class="page-header">Form Validation</h1>
                <div class="row">
                    <div class="col-sm-6">
                        <form class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="input-group-addon no-radius">
                                        <span class="sr-only">User ID</span>
                                        <i class="glyphicon glyphicon-user"></i>
                                    </label>
                                    <input type="email" data-type="email" required="" placeholder="User ID" class="form-control no-radius" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="input-group-addon no-radius">
                                        <span class="sr-only">Password</span>
                                        <i class="glyphicon glyphicon-lock"></i>
                                    </label>
                                    <input type="password" required="" pattern="[a-zA-Z]+" error="Enter only alphabets." placeholder="Password" class="form-control no-radius" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="input-group-addon no-radius">
                                        <span class="sr-only">Role</span>
                                        <i class="glyphicon glyphicon-cog"></i>
                                    </label>
                                    <select class="form-control no-radius" required="">
                                        <option></option>
                                        <option>Admin</option>
                                        <option>User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="input-group-addon no-radius">
                                        <span class="sr-only">Role</span>
                                        <i class="glyphicon glyphicon-cog"></i>
                                    </label>
                                    <select class="form-control no-radius" required="" multiple="multiple">
                                        <option></option>
                                        <option>Admin</option>
                                        <option>User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="input-group">
                                    <span class="input-group-addon no-radius"><input type="checkbox" required="" /></span>
                                    <span class="form-control control-label">Checkbox1</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="input-group">
                                    <span class="input-group-addon no-radius"><input type="checkbox" required="" /></span>
                                    <span class="form-control control-label">Checkbox2</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="input-group">
                                    <span class="input-group-addon no-radius"><input type="radio" name="r1" required="" /></span>
                                    <span class="form-control control-label">radio1</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="input-group">
                                    <span class="input-group-addon no-radius"><input type="radio" name="r1" required="" /></span>
                                    <span class="form-control control-label">radio2</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="input-group">
                                    <span class="input-group-addon no-radius"><input type="radio" required="" /></span>
                                    <span class="form-control control-label">radio 3</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="input-group-addon no-radius">
                                        <span class="sr-only">Captcha</span>
                                        <i class="glyphicon glyphicon-picture"></i>
                                        AF777
                                    </label>
                                    <input placeholder="Enter Captcha" class="form-control no-radius" />
                                </div>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-danger no-radius">
                                    <i class="glyphicon glyphicon-send"></i>
                                </button>
                                <button type="reset" class="btn btn-default no-radius">
                                    <i class="glyphicon glyphicon-refresh"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div data-has="javascript">
            <script>
                (function ($) {
                    var rEmpty = /\S+/,
                            rEmail = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/,
                            rNum = /^(-?\d+?\d*(\.0+)?)?$/;
                    function validateInput() {
                        var $i = $(this),
                                v = $i.val(),
                                f = true,
                                err = this.validationMessage,
                                isReq = $i.is('[data-required="true"]'),
                                isEmail = $i.is('[type="email"],[data-type="email"]'),
                                isNum = $i.is('[type="number"],[data-type="number"]'),
                                isChkbx = $i.is(':checkbox'),
                                isRadio = $i.is(':radio'),
                                pattern = $i.attr('pattern');
                        if (isEmail && !rEmail.test(v)) {
                            f = false;
                            err = 'Please enter an email address.';
                        }
                        if (isNum && !rNum.test(v)) {
                            f = false;
                            err = 'Please enter a number.';
                        }
                        if (isReq) {
                            if (isRadio) {
                                f = (this.name) ? $(':radio[name="' + this.name + '"]').is(':checked') : this.checked;
                                err = 'Please select one of these options.';
                            } else if (isChkbx) {
                                f = this.checked;
                                err = 'Please check this box to proceed.';
                            } else if (v === null || !rEmpty.test(v.toString())) {
                                f = false;
                                err = $i.is('select') ? 'Please select an item in the list.' : 'Please fill out this field.';
                            }
                        }
                        if (pattern) {
                            f = new RegExp('^' + pattern + '$').test(v);
                            err = 'Please enter in correct format.';
                        }
                        if (this.validationMessage) {
                            f = false;
                        }
                        if ($i.attr('error')) {
                            err = $i.attr('error');
                        }
                        this.isValid = f;
                        this.err = err;
                        if (this.disabled || f) {
                            $i.removeAttr('has-error').trigger('has-no-error');
                            if (this.$errRef) {
                                this.$errRef.remove();
                                this.$errRef = undefined;
                            }
                        } else {
                            if (navigator && navigator.appVersion && navigator.appVersion.indexOf('Chrome') > -1) {
                                //this.title = ' ';
                            }
                            $i.attr('has-error', true).trigger('has-error');
                            if (!this.$errRef) {
                                this.$errRef = $('<div/>', {
                                    'class': 'input-error',
                                    'appendTo': 'body'
                                });
                                this.$errRef[0].$inputRef = $i;
                            }
                            this.$errRef.html('<span/>').append('<div class="error gradient">' + err + '</div>');
                            $i.is(':focus') ? setErrPos(this.$errRef).addClass('in') : '';
                        }
                        return f;
                    }
                    function setErrPos($e) {
                        var $m = $e.find('.error');
                        try {
                            var $i = $e[0].$inputRef,
                                    h = $i.outerHeight(),
                                    o = $i.offset(),
                                    t = o.top + h,
                                    l = o.left;
                            $m.css({top: t, left: l, right: 'auto'});
                            if ($(window).outerWidth() - l < 180)
                                $m.css({left: 'auto', right: 0});
                            $e.find('span').css({top: t, left: l});
                        } catch (e) {
                        }
                        return $e;
                    }
                    $(window).resize(function () {
                        $('.input-error').each(function () {
                            setErrPos($(this));
                        });
                    });
                    $.fn.validateForm = function () {
                        this.each(function () {
                            if (this.hasValidation)
                                return;
                            this.hasValidation = true;
                            var $e = $(this);
                            $e.attr('novalidate', this);
                            $e.submit(function (e) {
                                $e.find(':input').each(function () {
                                    validateInput.call(this);
                                });
                                if ($e.find('[has-error]').length > 0) {
                                    e.preventDefault();
                                    $e.find('[has-error]').first().focus();
                                }
                            }).on('reset', function () {
                                $e.find(':input').each(function () {
                                    this.isValid = true;
                                    this.prevVal = null;
                                    this.prevChecked = null;
                                    if (this.$errRef) {
                                        this.$errRef.remove();
                                        this.$errRef = undefined;
                                    }
                                    $(this).removeAttr('has-error').trigger('has-no-error');
                                });
                            });
                            $e.find(':input').validateInput();
                        });
                        return this;
                    };
                    $.fn.validateInput = function () {
                        this.each(function () {
                            $(this).attr({'data-required': $(this).is('[required]')});
                            validateInput.call(this);
                            if (this.hasValidation)
                                return;
                            this.hasValidation = true;
                            $(this).on('blur change keyup input', function () {
                                var v = $(this).val();
                                if ((this.prevVal === v && this.prevChecked === this.checked))
                                    return;
                                if (this.prevVal && v && this.prevVal.toString() === v.toString())
                                    return;
                                this.prevVal = v;
                                this.prevChecked = this.checked;
                                validateInput.call(this);
                            });
                            this.onblur = function () {
                                this.$errRef && this.$errRef.removeClass('in');
                            };
                            this.onfocus = function () {
                                this.$errRef && setErrPos(this.$errRef).addClass('in');
                            };
                            this.onmouseover = function () {
                                var _t = this;
                                this.cdm = setTimeout(function () {
                                    _t.$errRef && setErrPos(_t.$errRef).addClass('in');
                                }, 750);
                            };
                            this.onmouseout = function () {
                                clearTimeout(this.cdm);
                                !$(this).is(':focus') && this.$errRef && this.$errRef.removeClass('in');
                            };
                        });
                        return this;
                    };
                    $('form[data-validate="true"]').validateForm();
                    $(':input[data-validate="true"]').validateInput();
                })(jQuery);
                $('form').validateForm();
                $(':input').on('has-error', function () {
                    $(this).closest('.form-group').addClass('has-error');
                }).on('has-no-error', function () {
                    $(this).closest('.form-group').removeClass('has-error');
                });
            </script>
        </div>
    </body>
</html>
