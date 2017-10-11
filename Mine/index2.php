<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link href="resource/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="resource/css/styles.css" rel="stylesheet">
        <link href="resource/css/themes.css" rel="stylesheet">
        <style>
            body{
                transition:all 0.5s ease-in-out;
            }
            .navbar,.container-section{
                transition: all 0.2s ease-in-out;
            }
            @media (min-width: 767px){
                .has-fixed-navbar .navbar{
                    padding:30px 10px;
                    background-color: rgba(0,0,0,0.5);
                    border-color:transparent;
                }
                .has-fixed-navbar .navbar li{
                    padding:2px;
                }
                .has-fixed-navbar .navbar li>a{
                    border-color: transparent !important;
                }
                .has-fixed-navbar .navbar-brand{
                    transform: scale(1.3) translate(10px);
                }
            }
            .navbar a{
                text-transform: uppercase;
            }
            .navbar-toggle{
                border:none;
                border-radius:0;
            }
            .navbar-brand>.navbar-brand-icon{
                width: 30px;
                height: 30px;
                line-height: 30px;
                padding:1px;
                margin-top: -5px;
                font-weight: bold;
                text-align: center;
                display: inline-block;
                background-color: rgba(255,255,255,0.5);
                border-radius: 4px;
            }
            .container-section{
                position:relative;
                border-bottom: 1px solid rgba(0,0,0,0.3);
            }
            .section-heading{
                position:relative;
                margin-bottom:15px;
                padding-bottom:15px;
                text-align: center;
            }
            .section-heading:before,.section-heading:after{
                content: '';
                position: absolute;
                margin: -8px;
                bottom: 0;
                left: 50%;
                border: 8px solid;
                border-radius: 100%;
                background-color: white;
                box-shadow: 0 0 0 4px #fff;
            }
            .section-heading:before{
                left: 0;
                right: 0;
                margin: -2px;
                border-width: 2px;
                background-color: transparent;
                box-shadow: 0 0 0 2px #fff;
            }
            #home{
                background-color: #202020;
                color:#fff;
                background-image: url("http://blog.smartthings.com/wp-content/uploads/2014/05/internet_of_things.jpg");
                background-size:cover;
                background-position:center;
            }
            /*            #case_studies{
                            background-color: #202020;
                            color:#fff;
                            background-image: url("http://www.technologydatagroup.com/img/pageimg/cloud-users-lists.jpg");
                            background-size:cover;
                            background-position:center;
                        }
                        #technology{
                            background-image: url("http://www.groupzway.com/img/2.jpg");
                            background-size:cover;
                            background-position:center;
                        }*/
            #p1{
                position:relative;
                background: rgba(0, 150, 136, 0.69);
                display: inline-block;
                padding: 20px;
            }
            #p2{
                background: rgba(0, 188, 212, 0.65);
                display: inline-block;
                padding: 20px;
                margin-left:50px;
            }
            #p3{
                background: rgba(255, 152, 0, 0.75);
                display: inline-block;
                padding: 25px;
                margin-left:80px;
            }
            #p4{
                background: rgba(63, 81, 181, 0.72);
                display: inline-block;
                padding: 35px;
                margin-left:50px;
            }
            #p5{
                background: rgba(205, 220, 57, 0.68);
                display: inline-block;
                padding: 35px;
            }
        </style>
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="theme-red has-fixed-navbar" data-spy="scroll" data-target="#menu1">
        <div id="body_header" class="navbar navbar-default navbar-fixed-top gradient">
            <div class="container-fluid contatiner-sm">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#home" target="_top">
                        <img src="http://www.axelta.com/images/x.png" alt="X" class="navbar-brand-icon" style="background:#fff;" />
                        <span><b>Axelta</b></span>
                    </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                    </button>
                </div>
                <div class="collapse navbar-collapse has-ripple-effect" id="menu1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home" target="_top" data-active-title="Home">Home</a></li>
                        <li><a href="#case_studies" target="_top" data-active-title="Case Studies">Case Studies</a></li>
                        <li><a href="#technology" target="_top" data-active-title="Technology">Technology</a></li>
                        <li><a href="#about_us" target="_top" data-active-title="About us">About us</a></li>
                        <li><a href="#contact_us" target="_top" data-active-title="Contact us">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="body_body">
            <section id="home" class="container-section" style="background-color:#ccc;" data-on-active="scroll-theme-home">
                <div class="container-fluid contatiner-sm">
                    <h1 class="section-heading txt-default hidden">Home</h1>
                    <h1 id="p1">Internet of Things</h1><br/>
                    <h1 id="p2">Innovative Thoughts </h1><br/>
                    <h1 id="p3">IoT Vision</h1><br/>
                    <h1 id="p4">Control All The Electronics</h1><br/>
                    <h1 id="p5">Device Management</h1>
                </div>
            </section>
            <section id="case_studies" class="container-section" data-on-active="scroll-theme-case_studies">
                <div class="container-fluid contatiner-sm">
                    <h1 class="section-heading txt-default">Case Studies</h1>
                </div>
            </section>
            <section id="technology" class="container-section" data-on-active="scroll-theme-technology">
                <div class="container-fluid contatiner-sm">
                    <h1 class="section-heading txt-default">Technology</h1>
                </div>
            </section>
            <section id="about_us" class="container-section" data-on-active="scroll-theme-about_us">
                <div class="container-fluid contatiner-sm">
                    <h1 class="section-heading txt-default">About Us</h1>
                    <div style="font-size:16px;">
                        <p>We provide end to end solutions for your connected device needs. Our best of breed solutions and framework enables IOT communication like no one else does. Giving you the ability to harness the power of "Internet of Things" and achieve multi fold improvement in effectiveness of your business processes.</p>
                        <p>Our machine learning enabled solutions help you derive intelligent information and intuitive visual representation to take critical business decisions in real time at fraction of cost of our competitors We also provide support for building custom solutions for your specific needs that gives you the speed and agility to build and deploy to your needs faster than anyone else.</p>
                        <p>Based out of Hyderabad, India we are in a unique position to meet the IoT specific needs of businesses leveraging the huge talent available here and at an amazingly effective cost.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-2 col-sm-6 col-md-4">
                            <div class="panel bg-orange txt-orange">
                                <div class="panel-heading txt-white text-center">
                                    <img src="http://www.axelta.com/images/aboutus/pyush.png" class="img-circle img-thumbnail" width="120px">
                                    <h4>Mr. PYUSH JAIN</h4>
                                    <span class="show">CO FOUNDER & DIRECTOR</span>
                                </div>
                                <div class="panel-body bg-white" data-toggle="equal-height">
                                    Serial entrepreneur, passionate about creating unique solutions for Indian market. 20 years experience in technology industry as business head, principal consultant and solutions architect in India and United States.
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="panel bg-cyan txt-cyan">
                                <div class="panel-heading txt-white text-center">
                                    <img src="http://www.axelta.com/images/aboutus/manish.png" class="img-circle img-thumbnail" width="120px">
                                    <h4>Mr. MANISH AGARWAL</h4>
                                    <span class="show">CO FOUNDER & DIRECTOR</span>
                                </div>
                                <div class="panel-body bg-white" data-toggle="equal-height">
                                    Product development professional passionate about technology and its adoption to solve real world problems. 20+ years experience in industries like manufacturing, supply chain, insurance, human capital management and healthcare.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact_us" class="container-section" data-on-active="scroll-theme-contact_us">
                <div class="container-fluid contatiner-sm">
                    <h1 class="section-heading txt-default">Contact Us</h1>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div id="contact_us_google_map" class="panel bg-cyan txt-cyan" style="width:100%;height:450px;border-width: 2px;"><h1 class="text-center txt-white">Loading......</h1></div>
                        </div>
                        <div id="contact_us_details" class="col-lg-8 col-lg-offset-2">
                            <div class="panel bg-green txt-green">
                                <div class="panel-heading txt-white">
                                    <span class="glyphicon glyphicon-map-marker" style="font-size:26px;"></span>
                                    <span style="font-size:18px;vertical-align:bottom;">Address</span>
                                </div>
                                <div class="panel-body bg-white">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <address id="address_india">
                                                <big><b>India</b></big><br/>
                                                <b><small>Pyush Jain - Manish Agarwal</small></b><br/>
                                                <span>H.No : 6-3-571/a/12,</span><br/>
                                                <span>2nd Floor, Suhana Rockdale,</span><br/>
                                                <span>Somajiguda, Khairatabad</span><br/>
                                                <span>Hyderabad - 500082.</span><br/>
                                                <span>Telangana. India</span><br/>
                                                <span class="glyphicon glyphicon-earphone text-success"> </span>
                                                <a href="tel:+919908112221">+91-9908112221</a><br/>
                                                <span class="glyphicon glyphicon-earphone text-success"> </span>
                                                <a href="tel:+919949923705">+91-9949923705</a><br/>
                                                <span class="glyphicon glyphicon-envelope text-success"> </span>
                                                <a href="mailto:corporate@axelta.com">corporate@axelta.com</a>
                                            </address>
                                        </div>
                                        <div class="col-sm-4">
                                            <address id="address_us">
                                                <big><b>United States</b></big><br/>
                                                <b><small>William Morris</small></b><br/>
                                                <span>9063 Stacie Ln.</span><br/>
                                                <span>Anaheim, CA 92804</span><br/>
                                                <span>US</span><br/>
                                                <span class="glyphicon glyphicon-earphone text-success"> </span>
                                                <a href="tel:+15102108344  ">+1510 210 8344  </a><br/>
                                                <span class="glyphicon glyphicon-envelope text-success"> </span>
                                                <a href="mailto:william@axelta.com">william@axelta.com</a>
                                            </address>
                                        </div>
                                        <div class="col-sm-4">
                                            <address id="address_uk">
                                                <big><b>United Kingdom</b></big><br/>
                                                <b><small>Ajit Gupta</small></b><br/>
                                                <span>107, Ingledew Court,</span><br/>
                                                <span>Leeds LS17 8TY</span><br/>
                                                <span>UK</span><br/>
                                                <span class="glyphicon glyphicon-envelope text-success"> </span>
                                                <a href="mailto:ajit@axelta.com">ajit@axelta.com</a>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <form name="form_contact_us" class="panel bg-blue-gray txt-blue-gray border-radius-0-all" data-validation="true" novalidate="true">
                                <div class="panel-heading txt-white">
                                    <h3><span class="glyphicon glyphicon-envelope"></span> Drop us mail</h3>
                                    <p>We are happy to answer any questions you have or provide you with an estimate. Just send us a message in the form below with any questions you may have.</p>
                                </div>
                                <div class="panel-body bg-white">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="input_name">Name *</label>
                                                <div class="help-block with-errors pull-right"></div>
                                                <input type="text" id="input_name" name="name" data-required="true" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="input_email">Email *</label>
                                                <div class="help-block with-errors pull-right"></div>
                                                <input type="email" id="input_email" name="email" data-required="true" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="input_subject">Subject *</label>
                                                <div class="help-block with-errors pull-right"></div>
                                                <input type="text" id="input_subject" name="subject" data-required="true" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group" style="margin-bottom:0;">
                                                <label for="input_message">Message *</label>
                                                <div class="help-block with-errors pull-right"></div>
                                                <textarea type="text" id="input_message" name="message" data-required="true" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer text-right">
                                    <button type="submit" class="btn btn-success gradient">
                                        <span class="glyphicon glyphicon-send">  </span>
                                        <span>Send</span>
                                    </button>
                                    <button type="reset" class="btn btn-default gradient">
                                        <span class="glyphicon glyphicon-refresh">  </span>
                                        <span>Reset</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="body_footer" class="body-footer has-ripple-effect">
            <div class="body-footer-top">
                <div class="container-fluid container-sm">
                    <div class="social-references pull-right">
                        <a href="https://www.facebook.com/pages/Axelta/381177815354941" target="_blank"><i class="social-glyph social-glyph-fb"></i></a>
                        <a href="https://twitter.com/AxeltaSystems" target="_blank"><i class="social-glyph social-glyph-twitter" target="new"></i></a>
                        <a href="http://www.linkedin.com/company/axelta/" target="_blank"><i class="social-glyph social-glyph-linked-in" target="new"></i></a>
                    </div>
                </div>
            </div>
            <div class="body-footer-bottom">
                <div class="container-fluid container-sm">
                    <span>&copy; 2013 - <?php echo date("Y"); ?>  Axelta Systems Pvt.Ltd</span>
                    <a href="#" class="hidden" style="padding:0;float:right;">Terms &amp; Conditions | Privacy Policy </a>
                </div>
            </div>
        </div>
        <div data-has="javascripts">
            <script src="resource/jquery/jquery.min.js"></script>
            <script src="resource/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
            <script src="resource/js/js.js"></script>
            <script src="resource/js/form.validate.js"></script>
            <script src="resource/js/contact_us_map.js"></script>
            <script>
                var $body = $('body');
                function setSectionMinHeight() {
                    $('.container-section').css({'min-height': $(window).height(), 'padding-top': $('#body_header').outerHeight()});
                }
                $(function () {
                    console.log(location.hash);
                    setSectionMinHeight();
                });
                $(window).resize(function () {
                    setSectionMinHeight();
                });

                $('#menu1').on('click', 'a[target="_top"]', function (e) {
                    try {
                        $('html,body').animate({
                            scrollTop: $(this.hash).offset().top
                        }, 500);
                        $('#menu1').collapse('hide');
                        e.preventDefault();
                    } catch (e) {
                    }
                });
                $('a[target="_top"]').parent().on('activate.bs.scrollspy', function () {
                    var $target = $(this).children('a[target="_top"]');
                    $('title').text($target.data('active-title'));
                    $('body').removeClass(function (index, css) {
                        return (css.match(/(^|\s)scroll-theme-\S+/g) || []).join(' ');
                    });
                    $('body').addClass($($target[0].hash).data('on-active'));
                });
                $(window).scroll(function () {
                    var s = $(window).scrollTop(), h = $('#body_header').outerHeight();
                    if ($body.hasClass('has-fixed-navbar')) {
                        if (s >= h) {
                            $body.removeClass('has-fixed-navbar');
                        }
                    } else {
                        if (s <= h) {
                            $body.addClass('has-fixed-navbar');
                        }
                    }
                    setTimeout(function () {
                        setSectionMinHeight();
                    }, 500);
                });
            </script>
        </div>
    </body>
</html>