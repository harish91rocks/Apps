<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html mlns="http://www.w3.org/1999/xhtml">
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
			.tabs .nav-tabs li a{font-size:12px;padding:6px 8px; border:1px solid #d8d8d8;margin-bottom:0px}
			.tabs .nav-tabs li.active a{border-bottom-color:transparent;}
			@media(min-width:768px){
               	.tabs .nav-tabs li a{font-size:12px;padding:6px 8px; border:1px solid #d8d8d8;margin-bottom:0px}
			}
          </style>
          <script>
          $(function(){
			$("#scroll-spy-links li a[href^='#']").on('click', function(e) {
				var href = $(this).attr('href');
				$('html, body').animate({scrollTop: $(href).offset().top}, 300, function(){window.location.hash = href;});
				e.preventDefault();
			});
			
			$('#scroll-spy-links').css('min-width',$('#scroll-spy-links').parent().width());
			$(window).resize(function(){$('#scroll-spy-links').css('min-width',$('#scroll-spy-links').parent().width());});
			
			$(window).scroll(function(e){
				var win_top = $(window).scrollTop();
				$("#scroll-spy-links li a[href^='#']").each(function(index, element) {
					var arr = $("#scroll-spy-links li a[href^='#']");
					var href = $(element).attr('href');
					var el_top = $(href).offset().top;
					var next_el_top = (arr[index+1] === undefined) ? $(document).height() : $($($(arr[index+1])).attr('href')).offset().top;
					if(win_top+75 >= el_top && win_top < next_el_top){
						$(arr).parent().removeClass('active');
						$(element).parent('li').addClass('active');
					}
				});
			});				
          });
          </script>
     </head>
     <body data-spy="scroll1" data-target="#scrollspy">
          <div class="nav-header">
          	<?php include 'nav-header.php';?>
          </div>
          <div class="page-loading-message"><img src="assets/image/loading.gif" /></div>
          <div class="body-container">
               <div class="container">
                    <h2 class="page-header">Events</h2>
                    <div class="row">
                         <div class="col-sm-4 col-md-3 mgn-bottom-15" id="scrollspy">
                              <ul id="scroll-spy-links" class="nav dropdown-menu">
                                   <li>
                                        <a href="AxAcademy.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> IoT Academy</a>
                                   </li>
                                   <li>
                                   	<a href="#CorporateTraining">Corporate IoT Training</a>
                                   </li>
                                   <li>
                                   	<a href="#OnlineBootcamp">Online IoT Bootcamp</a>
                                   </li>
                                   <li>
                                   	<a href="#WeekendBootcamp">Weekend IoT Bootcamp</a>
                                   </li>
                                   <li>
                                   	<a href="#CommunitiesAndMeetups">Communities & Meetups</a>
                                   </li>
                                   <li>
                                   	<a href="#Webinar">Webinar</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="events col-sm-8 col-md-9">
						<div id="CorporateTraining" class="section-id"></div>
                              <section id="CorporateTraining" class="panel panel-default">
                                   <div class="panel-heading">
                                        <h3 class="mgn-auto">Corporate IoT Training</h3>
                                   </div>
                                   <div class="panel-body">
                                        <ul class="list-style-angle-quotes">
                                             <li>
                                                  <p>Prepare your organization for making most of one of the biggest wave hitting the technology world</p>
                                             </li>
                                             <li>
                                                  <p>Successfully conducted more than 25 bootcamps for individuals and corporates like<b>Intel and Mindtree</b></p>
                                             </li>
                                             <li>
                                                  <p>2 full day, hands-on workshop conducted on Internet of Things at your premises</p>
                                             </li>
                                             <li>
                                                  <p>The bootcamp provides End to End understanding on Internet of Things. Including technologies, protocols, business verticals, standards, platforms, alliances, consortiums and business opportunities</p>
                                             </li>
                                             <li>
                                                  <p>Deep understanding of latest IoT technologies and standards - Sensors, Bluetooth Low Energy, Wireless Communication, Cloud, Big Data, Analytics, REST services and much more</p>
                                             </li>
                                             <li>
                                                  <p>Participants build their own end to end working IoT Device and Solutions in the bootcamp itself. Supported by</p>
                                                  <ul>
                                                       <li>
                                                            <p>Full access to our IoT lab, experts and Osmosis IoT Platform</p>
                                                       </li>
                                                       <li>
                                                            <p>Course ware, Learning Kits, IoT Tool Kits &amp; other benefits</p>
                                                       </li>
                                                       <li>
                                                            <p>Mentoring by experts</p>
                                                       </li>
                                                  </ul>
                                             </li>
                                        </ul>
                                        <h4 class="clr-green">Trainers</h4>
                                        <p>IIT Graduates with experience of 20 years each in technology and product development ( href="AxAboutus.php">Co-founders of Axelta</a>)</p>
                                        <p><b class="clr-green">Coming soon:</b> Competency Development Program on Internet of Things.</p>
                                        <div class="contact-links">
                                            <p><b class="clr-green">Contact us</b></p>
                                            <p><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:corporate@axelta.com" class="cyan">corporate@axelta.com</a></p>
                                            <p><span class="glyphicon glyphicon-earphone"></span> +91-9949923705 / +91-9908112221</p>
                                        </div>
                                            <div class="tabs">
                                        	<ul id="tabs" class="nav nav-tabs row" data-tabs="tabs">
                                             	<li>
                                                  	<a href="AxFaqs.php" target="new" class="bg-info">
                                                       	<span class="glyphicon glyphicon-question-sign"> </span>
                                                            <b>FAQs</b>
                                                       </a>
                                                  </li>
                                                  <li>
                                                  	<a href="#enquiry-form" class="bg-warning" data-toggle="tab">
                                                       	<span class="glyphicon glyphicon-send"> </span>
                                                            <b><span class="hidden-xs">Send </span>Enquiry</b>
                                                       </a>
                                                  </li>
                                                  <li>
                                                  	<a href="#payment-details" class="bg-danger" data-toggle="tab">
                                                       	<span class="glyphicon glyphicon-credit-card"> </span>
                                                            <b>Payment</b>
                                                       </a>
                                                  </li>
                                                  <li>
                                                  	<a href="#brochure-form" class="bg-success" data-toggle="tab">
                                                       	<span class="glyphicon glyphicon-download"> </span>
                                                            <b><span class="hidden-xs">Get </span>Brochure</b>
                                                       </a>
                                                  </li>
                                                  <li class="active">
                                                  	<a href="#schedule" class="bg-black" data-toggle="tab">
                                                       	<span class="glyphicon glyphicon-time"> </span>
                                                            <b>Schedule</b>
                                                       </a>
                                                  </li>
                                             </ul>
                                             <div id="my-tab-content" class="tab-content">
                                             	<div class="tab-pane active has-warning" id="schedule">
                                                  	<label class="legend">Schedule</label>
                                                       <div class="row">
                                                       	<div class="col-sm-6">
                                                            	<p><b>Date :</b></p>
                                                                 <p><b>Time :</b></p>
                                                                 <p><b>Location :</b></p>
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
                                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                                            <input type="text" name="name" class="form-control" placeholder="Name" required="required" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Email *</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                                                            <input type="text" name="email" class="form-control" placeholder="Email" required="required" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Contact Number *</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                                                                            <input type="text" name="contact_number" class="form-control" placeholder="Mobile / Landline Number" required="required" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Address *</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-info-sign"></span></span>
                                                                            <input type="text" name="address" class="form-control" placeholder="Place, City, Country" required="required" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Other Details/Queries *</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                                                                            <textarea type="text" name="queries" class="form-control" required="required"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                    	  <style>
                                                                        	.input-iconic{position:relative;}
															.input-iconic .glyphicon{position:absolute;padding:9px;top:1px;bottom:1px;border-right:1px solid #ddd; pointer-events:none;}
															.input-iconic .form-control{padding-left:35px;}
															.input-iconic.right .glyphicon{right:0;border-right:none;border-left:1px solid #ddd;}
															.input-iconic.right .form-control{padding-right:35px;padding-left:8px;}
                                                                        </style>
                                                                        <label>Sample *</label>
                                                                        <div class="input-iconic">
                                                                            <span class="glyphicon glyphicon-pencil"></span>
                                                                            <input type="text" class="form-control" placeholder="Email"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                    	  <style>
                                                                        	.select-iconic{position:relative;}
															.select-iconic select{padding-right:2px;box-shadow:none;}
															.select-iconic select:focus{box-shadow:0 0 5px;}
															.select-iconic .select-icon{position:absolute;padding:9px;top:1px;right:1px;bottom:1px;width:32px;background-color:#f8f8f8;border-radius:0px 2px 2px 0px; z-index:5;pointer-events:none;}
															.select-icon:before{content:'';display:inline-block;margin-top:4px; border:6px solid transparent;border-bottom:none;border-top-color:inherit;}
                                                                        </style>
                                                                        <label>Custom select</label>
                                                                        <div class="input-iconic select-iconic">
                                                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                                                            <select class="form-control">
                                                                            	<option>options</option>
                                                                            </select>
                                                                            <span class="select-icon"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group text-right">
                                                                        <button type="submit" class="btn btn-info btn-block pdg-lr-15">
                                                                            <span class="glyphicon glyphicon-download-alt"> </span>
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
                                                        <li>Online Bootcamp Cost : <b><i>USD 400</i></b></li>
                                                        <li class="horizontal-dashed-divider row"></li>
                                                        <li><b>Payment Mechanism 1 - Direct Account Transfer</b></li>
                                                        <li>ICICI Bank<br/>
                                                        Axelta Systems Pvt Ltd<br/>
                                                        A/c no – <i>000805014884</i><br/>
                                                        Khairatabad Branch, Hyderabad [IFSC Code – <i>ICIC0000008</i>]</li>
                                                        <li class="horizontal-dashed-divider row"></li>
                                                        <li><b>Payment Mechanism 2 - Paypal</b></li>
                                                        <li>Once we get a confirmation of your registration, we will send a link to Paypal Site for payment transfer.</li>
                                                        <li class="horizontal-dashed-divider row"></li>
                                                        <li>For more information contact us on: <i>+91-9949923705 / +91-9908112221</i></li>
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
                                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                                            <input type="text" name="name" class="form-control" placeholder="Name" required="required" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Email *</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                                                            <input type="text" name="email" class="form-control" placeholder="Email" required="required" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Company *</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-info-sign"></span></span>
                                                                            <input type="text" name="company" class="form-control" placeholder="Company" required="required" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Job Position *</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-info-sign"></span></span>
                                                                            <input type="text" name="position" class="form-control" placeholder="Job Position" required="required" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Address *</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-info-sign"></span></span>
                                                                            <input type="text" name="address" class="form-control" placeholder="Place, City, Country" required="required" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Contact Number *</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                                                                            <input type="text" name="contact_number" class="form-control" placeholder="Mobile / Landline Number" required="required" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Other Details/Queries *</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                                                                            <textarea type="text" name="queries" class="form-control" required="required"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group text-right">
                                                                        <button type="submit" class="btn btn-success border">
                                                                            <span class="glyphicon glyphicon-send"> </span>
                                                                            <span>Send</span>
                                                                            <span class="bottom"></span>
                                                                        </button>
                                                                        <button type="reset" class="btn btn-info border">
                                                                            <span class="glyphicon glyphicon-refresh"> </span>
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
                              </section>
                              <div id="OnlineBootcamp" class="section-id"></div>
                              <section class="panel panel-default">
                              	<div class="panel-heading">
                                        <h3 class="mgn-auto">Online IoT Bootcamp</h3>
                                   </div>
                                   <div class="panel-body">
                                   	<ul class="list-style-angle-quotes">
                                             <li>
                                                  <p>Gives Software, electronics and industrial professionals, entrepreneurs and students a head start to ride the BIGGEST wave hitting the industry soon</p>
                                             </li>
                                             <li>
                                                  <p>Provides End to End knowledge on Internet of Things Ecosphere. Including technologies, business verticals, regulations, IoT platforms, Alliances, Consortiums and business opportunities</p>
                                             </li>
                                             <li>
                                                  <p>Deep understanding of latest IoT technologies and standards - Arduino, Sensors, Bluetooth Low Energy, Wireless Communication, Cloud, Big Data, Analytics, REST services, and much more</p>
                                             </li>
                                             <li>
                                                  <p>Gives entrepreneurs opportunity to get started with building their own IoT Device and Solutions supported by</p>
                                                  <ul>
                                                       <li>
                                                            <p>Full access to our IoT lab, experts and Axelta Osmosis IoT Platform</p>
                                                       </li>
                                                       <li>
                                                            <p>Course ware, Learning Kits, IoT Tool Kits & other benefits</p>
                                                       </li>
                                                       <li>
                                                            <p>Mentoring by experts</p>
                                                       </li>
                                                  </ul>
                                             </li>
                                        </ul>
                                        <h4>Trainers</h4>
                                        <p>IIT Graduates with experience of 20 years each in technology and product development (<a href="AxAboutus.php">Co-founders of Axelta</a>)</p>
                                   </div>
                              </section>
                              <div id="WeekendBootcamp" class="section-id"></div>
                              <section class="panel panel-default">
                              	<div class="panel-heading">
                                   	<h3 class="mgn-auto">Weekend IoT Bootcamp</h3>
                                   </div>
                                   <div class="panel-body">
                                        <ul class="list-style-angle-quotes">
                                             <li>
                                                  <p>Gives Software, electronics and industrial professionals, entrepreneurs and students a head start to ride the BIGGEST wave hitting the industry soon</p>
                                             </li>
                                             <li>
                                                  <p>Provides End to End knowledge on Internet of Things Ecosphere. Including technologies, business verticals, regulations and business opportunities</p>
                                             </li>
                                             <li>
                                                  <p>Hands-on understanding of latest technologies - Cloud, Big Data, Analytics, Mobile, REST services and much more</p>
                                             </li>
                                             <li>
                                                  <p>Gives entrepreneurs opportunity to get started with building their own IoT Device and Solutions supported by</p>
                                                  <ul>
                                                       <li>
                                                            <p>Full access to our IoT lab, experts and Axelta Osmosis IoT Platform</p>
                                                       </li>
                                                       <li>
                                                            <p>Course ware, Learning Kits, IoT Tool Kits & other benefits</p>
                                                       </li>
                                                       <li>
                                                            <p>Mentoring by experts</p>
                                                       </li>
                                                  </ul>
                                             </li>
                                        </ul>
                                        <h4>Trainers</h4>
                                        <p>IIT Graduates with experience of 20 years each in technology and product development (<a href="AxAboutus.php">Co-founders of Axelta</a>)</p>
                              	</div>
                              </section>
                              <div id="CommunitiesAndMeetups" class="section-id"></div>
                              <section class="panel panel-default">
                              	<div class="panel-heading">
                                   	<h3 class="mgn-auto">Communities & Meetups</h3>
                                   </div>
                                   <div class="panel-body">
                                   	<ul class="list-style-angle-quotes">
                                             <li><p></p></li>
                                        </ul>
                                   </div>
                              </section>
                              <div id="Webinar" class="section-id"></div>
                              <section class="panel panel-default">
                              	<div class="panel-heading">
                                   	<h3 class="mgn-auto">Webinar</h3>
                                   </div>
                              </section>
                         </div>
                    </div>
               </div>
          </div>
          <div class="nav-footer">
          	<?php include 'nav-footer.php';?>
          </div>
     </body>
</html>