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
            .no-radius, .no-radius .panel, .no-radius .panel-body, .no-radius .page-header, .no-radius .panel-footer,
            .no-radius .alert, .no-radius .form-control, .no-radius .btn,
            .no-radius .input-group .input-group-addon, .no-radius .input-group .form-control{
                border-radius:0;
            }
            .inline-block{
                display: inline-block; 
            }
            .input-error{
                position: absolute;
                padding: 4px 8px;
                margin-top:4px;
                font-size: 12px;
                font-weight: bold;
                background-color: #F44336;
                color: #fff;
            }
            .input-error>span{
                position: absolute;
                bottom: 100%;
                margin-left:2px;
                border:4px solid transparent;
                border-top:none;
                border-bottom-color: #F44336;
            }
            .input-error.in{
                display:block;
            }
        </style>
    </head>
    <body>
        <?php include_once './header.html'; ?>
        <div id="body_body">
            <div class="container" style="position:relative;">
                <h1 class="page-header">Input</h1>
                <form class="no-radius row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Text *</label>
                            <input type="text" class="form-control" required="" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Number *</label>
                            <input type="number" class="form-control" required="" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Email *</label>
                            <input type="email" class="form-control" required="" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Url *</label>
                            <input type="url" class="form-control" required="" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Pattern</label>
                            <input type="text" class="form-control" required="" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Select *</label>
                            <select class="form-control" required="">
                                <option></option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                                <option>Option 5</option>
                                <option>Option 6</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Multiple Select *</label>
                            <select class="form-control" required="" multiple="multiple" style="height:100px">
                                <option></option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                                <option>Option 5</option>
                                <option>Option 6</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Text area *</label>
                            <textarea class="form-control" required="" style="height:100px"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Checkbox *</label><br/>
                            <label class="checkbox-inline"><input type="checkbox" required="" /> Checkbox1</label>
                            <label class="checkbox-inline"><input type="checkbox" required="" /> Checkbox2</label>
                            <label class="checkbox-inline"><input type="checkbox" required="" /> Checkbox3</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Radio *</label><br/>
                            <label class="radio-inline"><input type="radio" name="radio1" required="" /> Radio1</label>
                            <label class="radio-inline"><input type="radio" name="radio1" required="" /> Radio2</label>
                            <label class="radio-inline"><input type="radio" name="radio1" required="" /> Radio3</label>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div data-has="javascript">
            <script>
                function validateInput() {
                    var $i = $(this),
                            val = $i.val(),
                            err = this.validationMessage;
                    if (!this.$errRef) {
                        this.$errRef = $('<div/>', {
                            'class': 'input-error gradient',
                            'appendTo': 'body',
                        });
                        this.$errRef[0].$inputRef = $i;
                    }
                    if (!err) {
                        this.$errRef.remove();
                        this.$errRef = undefined;
                        return;
                    }
                    this.$errRef.html('<span/>').append(err);
                    showError(this.$errRef);
                    console.log($i.offset())
                    //this.title = (navigator && navigator.vendor === 'Google Inc.') ? ' ' : '';
                }
                $(document).on('blur change keyup input', ':input', function () {
                    var $i = $(this), val = $i.val();
                    if (this.prevVal === val && this.prevChecked === this.checked)
                        return;
                    this.prevVal = val;
                    this.prevChecked = this.checked;
                    validateInput.call(this);
                });
                $(document).on('blur mouseleave', ':input', function () {
                    !$(this).is(':focus') && this.$errRef && this.$errRef;
                }).on('focus mouseover', ':input', function () {
                    this.$errRef && showError(this.$errRef);
                });
                function showError($e) {
                    setTimeout(function(){
                        
                    });
                    try {
                        var $i = $e[0].$inputRef,
                                h = $i.outerHeight(),
                                o = $i.offset(),
                                t = o.top + h,
                                l = o.left;
                        $e.css({
                            top: t,
                            left: l
                        });
                        if ($(window).outerWidth() - l < 180) {
                            $e.css({
                                left: 'auto',
                                right: 0
                            });
                        }
                        $e.find('span').css({left: l - $e.offset().left});
                    } catch (e) {
                    }
                    return $e;
                }
                $(window).resize(function () {
                    $('.input-error').each(function () {
                        showError($(this));
                    });
                });
            </script>
        </div>
    </body>
</html>
