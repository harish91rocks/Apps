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

        </style>
    </head>
    <body>
        <?php include_once './header.html'; ?>
        <div id="body_body">
            <div class="container">
                <h1 class="page-header">Input</h1>
                <h2>Without Form</h2>
                <div class="form-inline">
                    <div class="form-group">
                        <div class="input-group">
                            <label class="input-group-addon no-radius">
                                <span class="sr-only">User ID</span>
                                <i class="glyphicon glyphicon-user"></i>
                            </label>
                            <input type="email" required="" placeholder="User ID" class="form-control no-radius" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <label class="input-group-addon no-radius">
                                <span class="sr-only">Password</span>
                                <i class="glyphicon glyphicon-lock"></i>
                            </label>
                            <input type="password" required="" pattern="[a-zA-Z]+" placeholder="Password" class="form-control no-radius" />
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
                        <label class="input-group">
                            <span class="input-group-addon no-radius"><input type="checkbox" required="" /></span>
                            <span class="form-control control-label">Remember me</span>
                        </label>
                        <label class="input-group">
                            <span class="input-group-addon no-radius"><input type="radio" name="r1" required="" /></span>
                            <span class="form-control control-label">radio1</span>
                        </label>
                        <label class="input-group">
                            <span class="input-group-addon no-radius"><input type="radio" name="r1" required="" /></span>
                            <span class="form-control control-label">radio2</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-block no-radius">
                            <i class="glyphicon glyphicon-send"></i>
                        </button>
                    </div>
                </div>
                <h2>Within Form</h2>
                <form class="form-inline">
                    <div class="form-group">
                        <div class="input-group">
                            <label class="input-group-addon no-radius">
                                <span class="sr-only">User ID</span>
                                <i class="glyphicon glyphicon-user"></i>
                            </label>
                            <input type="email" required="" placeholder="User ID" class="form-control no-radius" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <label class="input-group-addon no-radius">
                                <span class="sr-only">Password</span>
                                <i class="glyphicon glyphicon-lock"></i>
                            </label>
                            <input type="password" required="" pattern="[a-zA-Z]+" placeholder="Password" class="form-control no-radius" />
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
                        <label class="input-group">
                            <span class="input-group-addon no-radius"><input type="checkbox" required="" /></span>
                            <span class="form-control control-label">Remember me</span>
                        </label>
                        <label class="input-group">
                            <span class="input-group-addon no-radius"><input type="radio" name="r1" required="" /></span>
                            <span class="form-control control-label">radio1</span>
                        </label>
                        <label class="input-group">
                            <span class="input-group-addon no-radius"><input type="radio" name="r1" required="" /></span>
                            <span class="form-control control-label">radio2</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-block no-radius">
                            <i class="glyphicon glyphicon-send"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div data-has="javascript">
            <script>
                jQuery.fn.extend({
                    getMaxZ: function () {
                        return Math.max.apply(null, jQuery(this).map(function () {
                            var z;
                            return isNaN(z = parseInt(jQuery(this).css("z-index"), 10)) ? 0 : z;
                        }));
                    }
                });
                function createID() {
                    return 'uid-' + new Date().getTime() + (parseInt(Math.random() * 100)).toString();
                }
                $(document).on('blur change keyup input', ':input', function (e) {
                    validateInput.call(this, e);
                });
                $(document).on('blur', ':input', function () {
                    this.$errorRef && this.$errorRef.removeClass('in');
                }).on('focus', ':input', function () {
                    this.$errorRef && setErrPos(this.$errorRef.addClass('in'));
                }).on('mouseover mouseleave', ':input', function (e) {
                    var _t = this;
                    if (e.type === 'mouseover') {
                        this.countdown = setTimeout(function () {
                            _t.$errorRef && setErrPos(_t.$errorRef.addClass('in'));
                        }, 500);
                    } else {
                        clearTimeout(this.countdown);
                        !$(this).is(':focus') && this.$errorRef && setErrPos(this.$errorRef.removeClass('in'));
                    }
                });
                $(window).resize(function () {
                    $('.input-error').each(function () {
                        setErrPos($(this));
                    });
                });
                function setErrPos($e) {
                    var $m = $e.find('.error');
                    try {
                        var $f = $e[0].$inputRef,
                                h = $f.outerHeight(),
                                o = $f.offset(),
                                t = o.top + h,
                                l = o.left;
                        $m.css({top: t, left: l, right: 'auto'});
                        if ($(window).outerWidth() - l < 180)
                            $m.css({left: 'auto', right: 0});
                        $e.find('span').css({top: t, left: l});
                    } catch (e) {
                    }
                }
                function validateInput() {
                    var $i = $(this),
                            val = this.value,
                            err = this.validationMessage;
                    if (this.oldVal === val && this.isChecked === this.checked)
                        return;
                    this.isValid = true;
                    this.title = '';
                    this.oldVal = val;
                    this.isChecked = this.checked;
                    if (!this.$errorRef) {
                        this.$errorRef = $('<div/>', {
                            class: 'input-error',
                            appendTo: 'body'
                        });
                        this.$errorRef[0].$inputRef = $i;
                    }
                    if (!err) {
                        this.$errorRef.remove();
                        this.$errorRef = undefined;
                        $i.removeAttr('has-error');
                        $i.trigger('has-no-error');
                        return;
                    }
                    $i.trigger('has-error');
                    $i.attr('has-error', true);
                    this.isValid = false;
                    this.title = ' ';
                    this.$errorRef.html('<span/>').append('<div class="error gradient">' + err + '</div>');
                    $i.is(':focus') ? setErrPos(this.$errorRef.addClass('in')) : '';
                }
                $('form').attr('novalidate', true);
                $(document).on('submit', 'form', function (e) {
                    $(this).find(':input').each(function () {
                        validateInput.call(this, e);
                    });
                    if ($(this).find('[has-error]').length > 0) {
                        e.preventDefault();
                        $(this).find('[has-error]').first().focus();
                    }
                });

                $(':input').on('has-error', function () {
                    $(this).closest('.form-group').addClass('has-error');
                }).on('has-no-error', function () {
                    $(this).closest('.form-group').removeClass('has-error');
                });
            </script>
        </div>
    </body>
</html>
