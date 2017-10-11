<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html
    xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Axelta Internet Osmosis</title>
        <link href="assets/image/x.png" rel="shortcut icon" />
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" />
        <link href="assets/css/nav-header.css" rel="stylesheet" />
        <link href="assets/css/axelta.css" rel="stylesheet" />
        <link href="assets/css/nav-footer.css" rel="stylesheet" />
        <link href="assets/icon-social/css/social.css" rel="stylesheet" />
        <script src="assets/jquery/jquery-1.11.1.min.js"></script>
        <script src="assets/js/axelta.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/nav-header.js"></script>

        <script src="assets/js/serialize.diserialize.form.js"></script>
        <link href="assets/css/checkbox.radio.css" rel="stylesheet" />

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            section{min-height:700px;position:relative;}
            body.has-affix .section-id{width:100%;height:70px;}
            #scroll-spy-links{position:relative;display:block;float:none;right:auto;left:auto;top:auto;}
            #scroll-spy-links, #scroll-spy-links li a, .tabs{transition:all 0.5s;}
            body.has-affix #scroll-spy-links.out{right:-250px;}
            @media(min-width:768px){
                body.has-affix #scroll-spy-links{position:fixed;}
            }
            .tabs .nav-tabs li{float:right;}
            .tabs .nav-tabs li a{font-size:12px;padding:6px 8px; border:1px solid #d8d8d8;}
            .tabs .nav-tabs li.active a{border-bottom-color:transparent;}

            .validation-msg.in{display:block !important;opacity:0.9 !important;}
            .validation-msg.show{opacity:1 !important;}
            .validation-msg.bottom{top:100%;margin-top:4px;cursor:default;white-space:nowrap;max-width:none;}
            .validation-msg.bottom>.arrow{left:20px;}
            .validation-msg .popover-content{margin:0;padding:5px 15px;}
        </style>
        <script>
            $(function () {
                //disable form submission on click enter button(keyboard)
                $('form').on("keyup keypress", function (e) {
                    var code = e.keyCode || e.which;
                    if (code === 13 && !$(e.target).is('textarea')) {
                        e.preventDefault();
                        return false;
                    }
                });
                function validateForm($form, $caller) {
                    var $fileds = $form.find(':input'), isFormValid = true, invalidFieldsNo = 0;
                    for (var i = 0; i < $fileds.length; i++) {
                        var $field = $($fileds[i]);
                        if (!$field.is(':disabled')) {
                            var isFieldValid = validateField($field, $caller, invalidFieldsNo);
                            if (!isFieldValid) {
                                isFormValid = false;
                                invalidFieldsNo++;
                            }
                        }
                    }
                    if (isFormValid) {
                        $form.find(':submit').removeAttr('disabled');
                    }
                    else {
                        $form.find(':submit').attr('disabled', 'disabled');
                    }
                    return isFormValid;
                }
                function validateField($field, $caller, invalidFieldsNo) {
                    try {
                        var value = $field.val(),
                                isValid = true,
                                trimVal = value.replace(/^\s+|\s+$|\s+(?=\s)/g, ''),
                                regExpNotEmpty = /\S+/,
                                regExpEmail = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/,
                                regExpNumber = /^-?\d+?\d*$/;
                        /*regExpNumber = /^[-?\d+?\d]*$/;*/
                        if ($field.is('.required')) {
                            if (!regExpNotEmpty.test(value)) {
                                isValid = false;
                                createValidationMessage($field, 'Please fill out this filed !');
                            }
                            if ($field.is('[type="checkbox"]')) {
                                if (!$field.is(':checked')) {
                                    isValid = false;
                                    createValidationMessage($field, 'Please check this box if you want to proceed !');
                                }
                            }
                            if ($field.is('[type="radio"]')) {
                                var name = $field.attr('name');
                                var $form = $field.closest('form');
                                if (name !== undefined) {
                                    if (!$form.find('[name="' + name + '"]').is(':checked')) {
                                        isValid = false;
                                        createValidationMessage($field, 'Please select one of these options !');
                                    }
                                }
                                else if (!$field.is(':checked')) {
                                    isValid = false;
                                    createValidationMessage($field, 'Please select one of these options !');
                                }
                            }
                        }
                        if ($field.is('[type="email"]') && !regExpEmail.test(value)) {
                            isValid = false;
                            createValidationMessage($field, 'Please enter an email address !');
                        }
                        if ($field.is('[type="number"]') && !regExpNumber.test(value)) {
                            isValid = false;
                            createValidationMessage($field, 'Please enter a number !');
                        }
                        if (isValid) {
                            $field.parent().removeClass('has-error');
                            removeValidationMessage($field);
                        }
                        else {
                            $field.parent().addClass('has-error');
                            if ($caller.is('form') && invalidFieldsNo === 0) {
                                $field.focus();
                            }
                        }
                        return isValid;
                    } catch (error) {
                    }
                    return false;
                }
                function createValidationMessage($field, message) {
                    var msgBox = '<div class="validation-msg popover bottom" oncontextmenu="return false">' +
                            '<div class="arrow"></div>' +
                            '<div class="popover-content alert alert-danger">' +
                            '<span class="glyphicon glyphicon-remove"> </span> ' + message + '</div>' +
                            '</div>';
                    $field.parent().find('.validation-msg').remove();
                    $field.parent().append(msgBox);
                    $('body').not($field).click(function (e) {
                        if (!$(e.target).is($field)) {
                            $field.parent().find('.validation-msg').addClass('hide').removeClass('show');
                        }
                    });
                    return 0;
                }
                $(':input').parent().hover(
                        function () {
                            $(this).find('.validation-msg').addClass('in');
                        },
                        function () {
                            $(this).find('.validation-msg').removeClass('in');
                        }
                );
                function removeValidationMessage($field) {
                    $field.parent().find('.validation-msg').remove();
                    return 0;
                }
                $('form').each(function () {
                    validateForm($(this), document);
                });
                $(':input').on('focus keyup change click', function () {
                    validateForm($(this).closest('form'), $(this));
                    return 0;
                });
                $(':input').on('focus keyup keypress change click', function () {
                    $(this).parent().find('.validation-msg').addClass('show').removeClass('hide');
                });
                $(':input').on('bind', function () {
                    $(this).parent().find('.validation-msg').addClass('hide').removeClass('show');
                });
                $('form').on('submit', function (e) {
                    var $form = $(this);
                    validateForm($form, $form);
                    return false;
                });
            });
        </script>
    </head>
    <body>
        <div class="nav-header">
            <?php include 'nav-header.php'; ?>
        </div>
        <div class="page-loading-message">
            <img src="assets/image/loading.gif" />
        </div>
        <div class="body-container">
            <div class="container">
                <h2 class="page-header">Partners</h2>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-4">
                        <div class="tabs">
                            <ul id="tabs" class="nav nav-tabs row" data-tabs="tabs">
                                <li>
                                    <a href="AxFaqs.php" class="bg-info">
                                        <span class="glyphicon glyphicon-question-sign"></span>
                                        <b>FAQs</b>
                                    </a>
                                </li>
                                <li>
                                    <a href="#enquiry-form" class="bg-warning" data-toggle="tab">
                                        <span class="glyphicon glyphicon-send"></span>
                                        <b>Send Enquiry</b>
                                    </a>
                                </li>
                                <li>
                                    <a href="#payment-details" class="bg-danger" data-toggle="tab">
                                        <span class="glyphicon glyphicon-credit-card"></span>
                                        <b>Payment</b>
                                    </a>
                                </li>
                                <li>
                                    <a href="#brochure-form" class="bg-success" data-toggle="tab">
                                        <span class="glyphicon glyphicon-download"></span>
                                        <b>Get Brochure</b>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="#schedule" class="bg-black" data-toggle="tab">
                                        <span class="glyphicon glyphicon-time"></span>
                                        <b>Schedule</b>
                                    </a>
                                </li>
                            </ul>
                            <div id="my-tab-content" class="tab-content">
                                <div class="tab-pane active has-warning" id="schedule">
                                    <label class="legend">Schedule</label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p>
                                                <b>Date :</b>
                                            </p>
                                            <p>
                                                <b>Time :</b>
                                            </p>
                                            <p>
                                                <b>Location :</b>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="brochure-form">
                                    <form class="form-horizontal has-info">
                                        <label class="legend">Fill the Fields to Download Brochure</label>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Name *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-user"></span>
                                                        </span>
                                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required" disabled="disabled" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-envelope"></span>
                                                        </span>
                                                        <input type="text" name="email" class="form-control" placeholder="Email" required="required" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Contact Number *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-earphone"></span>
                                                        </span>
                                                        <input type="text" name="contact_number" class="form-control required" placeholder="Mobile / Landline Number" required="required" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Address *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-info-sign"></span>
                                                        </span>
                                                        <input type="text" name="address" class="form-control" placeholder="Place, City, Country" required="required" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Other Details/Queries *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-pencil"></span>
                                                        </span>
                                                        <textarea type="text" name="queries" class="form-control" required="required"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group text-right">
                                                    <button type="submit" class="btn btn-info btn-block pdg-lr-15">
                                                        <span class="glyphicon glyphicon-download-alt"></span>
                                                        <span>Download</span>
                                                        <span class="bottom"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="payment-details">
                                    <ul class="list-unstyled">
                                        <li>Online Bootcamp Cost : 


                                            <b>
                                                <i>USD 400</i>
                                            </b>
                                        </li>
                                        <li class="horizontal-dashed-divider row"></li>
                                        <li>
                                            <b>Payment Mechanism 1 - Direct Account Transfer</b>
                                        </li>
                                        <li>ICICI Bank


                                            <br/>
                                            Axelta Systems Pvt Ltd


                                            <br/>
                                            A/c no – 


                                            <i>000805014884</i>
                                            <br/>
                                            Khairatabad Branch, Hyderabad [IFSC Code – 


                                            <i>ICIC0000008</i>]


                                        </li>
                                        <li class="horizontal-dashed-divider row"></li>
                                        <li>
                                            <b>Payment Mechanism 2 - Paypal</b>
                                        </li>
                                        <li>Once we get a confirmation of your registration, we will send a link to Paypal Site for payment transfer.</li>
                                        <li class="horizontal-dashed-divider row"></li>
                                        <li>For more information contact us on: 


                                            <i>+91-9949923705 / +91-9908112221</i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="enquiry-form">
                                    <form class="form-horizontal has-info">
                                        <label class="legend">Enquiry Form</label>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Name *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-user"></span>
                                                        </span>
                                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-envelope"></span>
                                                        </span>
                                                        <input type="email" name="email" class="form-control" placeholder="Email" required="required" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Company *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-info-sign"></span>
                                                        </span>
                                                        <input type="text" name="company" class="form-control" placeholder="Company" required="required" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Job Position *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-info-sign"></span>
                                                        </span>
                                                        <input type="text" name="position" class="form-control" placeholder="Job Position" required="required" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Address *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-info-sign"></span>
                                                        </span>
                                                        <input type="text" name="address" class="form-control" placeholder="Place, City, Country" required="required" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Contact Number *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-earphone"></span>
                                                        </span>
                                                        <input type="text" name="contact_number" class="form-control" placeholder="Mobile / Landline Number" required="required" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Other Details/Queries *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-pencil"></span>
                                                        </span>
                                                        <textarea type="text" name="queries" class="form-control" required="required"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group text-right">
                                                    <button type="submit" class="btn btn-success border">
                                                        <span class="glyphicon glyphicon-send"></span>
                                                        <span>Send</span>
                                                        <span class="bottom"></span>
                                                    </button>
                                                    <button type="reset" class="btn btn-info border">
                                                        <span class="glyphicon glyphicon-refresh"></span>
                                                        <span>Reset</span>
                                                        <span class="bottom"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form class="form-horizontal">
                        <div class="form-group col-sm-6">
                            <label>Text</label>
                            <div class="input-iconic">
                                <span class="input-icon glyphicon glyphicon-user"></span>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Email</label>
                            <div class="input-iconic">
                                <span class="input-icon glyphicon glyphicon-envelope"></span>
                                <input type="email" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Number *</label>
                            <div class="input-iconic">
                                <span class="input-icon glyphicon glyphicon-envelope"></span>
                                <input type="number" class="form-control required" value="0"/>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Select Box *</label>
                            <div class="select-iconic">
                                <select class="form-control required">
                                    <option></option>
                                    <option>select1</option>
                                    <option>select2</option>
                                    <option>select3</option>
                                </select>
                                <span class="select-icon"></span>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="checkbox-inline checkbox">
                                <input type="checkbox" name="checkbox1" value="checkbox1" class="required" />
                                <span>check box 1</span>
                            </label>
                            <label class="checkbox-inline checkbox">
                                <input type="checkbox" name="checkbox2" value="checkbox2" class="required" />
                                <span>check box 2</span>
                            </label>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="radio-inline radio">
                                <input type="radio" name="radio1" value="radio1" class="required" />
                                <span>radio 1</span>
                            </label>
                            <label class="radio-inline radio">
                                <input type="radio" name="radio1" value="radio2" class="required" />
                                <span>radio 2</span>
                            </label>
                            <label class="radio-inline radio">
                                <input type="radio" name="radio2" value="radio3" class="required" />
                                <span>radio 3</span>
                            </label>
                            <label class="radio-inline radio">
                                <input type="radio" name="radio2" value="radio4" class="required" />
                                <span>radio 4</span>
                            </label>
                            <label class="radio-inline radio">
                                <input type="radio" value="radio5" class="required" />
                                <span>radio 5</span>
                            </label>
                        </div>
                        <div class="form-group col-sm-6">
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="nav-footer">
            <?php include 'nav-footer.php'; ?>
        </div>
    </body>
</html>