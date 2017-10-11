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
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
        	$(function(){
				$('.faq-list .panel-collapse').on('hide.bs.collapse', function () {
				  $(this).closest('.panel').find('.panel-heading .glyphicon').toggleClass('glyphicon-minus-sign glyphicon-plus-sign');
				});
				$('.faq-list .panel-collapse').on('show.bs.collapse', function () {
				  $(this).closest('.panel').find('.panel-heading .glyphicon').toggleClass('glyphicon-minus-sign glyphicon-plus-sign');
				});
			});
        </script>
        <style>
			.faq-list .panel-heading{cursor:pointer;position:relative;padding-left:45px;}
			.faq-list .panel-heading:before{content:"\e082";position:absolute;font:21px 'Glyphicons Halflings';left:15px;color:#79BE0B;transition:all 0.5s;}
			.faq-list .panel-heading.collapsed:before{content:"\e081";color:#666;}
			.faq-list .faq-question{color:#555;text-transform:uppercase;font-size:11px;font-weight:600;display:block;padding:8px 0;}
			.faq-list .collapsed .faq-question{color:#999;}
			.faq-list .faq-question:hover{color:#555 !important;}
			.faq-list .panel-body{font-size:13px;color:#777;line-height:20px;}
			.faq-list .location ul{font-size:14px;padding-top:10px;padding-left:15%;}
			
			#carousel-img-slider .carousel-caption{top:-22px;right:auto;bottom:auto; left:0;color:#555;}
        </style>
    </head>
    <body>
        <div class="nav-header">
            <?php include 'nav-header.php';?>
        </div>
        <div class="page-loading-message"><img src="assets/image/loading.gif" /></div>
        <div class="body-container">
            <div class="container">
                <h2 class="page-header">FAQ - IoT Bootcamps</h2>
                <div class="row">
                    <div class="col-sm-12 faq-list">
                        <div class="panel-group" id="faq-group-1">
                            <div class="panel panel-default">
                                <div class="panel-heading" data-toggle="collapse" data-parent="#faq-group-1" href="#faq1">
                                    <span class="faq-question">WHO WILL BENEFIT FROM THIS TRAINING / BOOTCAMP?</span>
                                </div>
                                <div id="faq1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>Internet of Things is applicable to all verticals and specializations. That’s the beauty and attraction of IoT. Some of the people who can make most from the program are.</p>
                                        <ul class="pdg-lr-15">
                                            <li>
                                                <p>
                                                    <b class="clr-green">Software professionals</b> who are looking to expand their horizons by getting hands-on exposure to latest technologies like Big Data, Analytics, Mobile computing, Cloud computing, etc along with in-depth understanding of IoT. Most IT companies have started their IOT competencies and this training will be a very good career booster for them.
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <b class="clr-green">Existing or Budding entrepreneurs</b> entrepreneurs who have any IoT ideas (e.g. remote controlled things, home automation, wearable tech devices etc. ) that they would like to bring to a reality. They will get a very good understanding of all technologies and most importantly how these technologies work together to make IoT possible. They will also get technical support from Axelta experts and limited period free access to Axelta Osmosis platform to experiment and build their solutions.
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <b class="clr-green">Electronics engineers</b> who are aware that a golden period is coming for them soon and want to reach out beyond their current scope that limits them to just electronics. Getting an understanding of the electronic side of the IoT technologies and standards and also getting an exposure to the cloud / software side of things will enable them to play a key role in time to come when the demand for electronic engineers with IoT experience and knowledge will skyrocket.
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <b class="clr-green">Industry professionals</b> working in pharmaceutical, real estate, manufacturing, electrical, retail, healthcare and a number of other verticals and businesses who are foresighted to see the disruption that IoT will bring in the way their business operates in near future and want to be the early adopters or change agents in their respective industries. Through the insight that they build on the working and possibilities of IoT, they can spearhead the adoption of IoT in their business areas.
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <b class="clr-green">Students in the electronics and IT fields</b> who are looking to build a good career. There is going to be a very high demand for engineers who have knowledge and ability to contribute to IoT projects in the organizations. This program helps them develop an understanding that they can further deepen through learning and experimentation to ride the IoT wave.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#faq-group-1" href="#faq2">
                                    <span class="faq-question">WHAT ARE THE PRE-REQUISITES FOR THE BOOTCAMP?</span>
                                </div>
                                <div id="faq2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>There are no specific pre-req. The tutorials and sessions have been structured in a manner that anyone with zeal to learn can go through them. Our experts will help you understand end to end IOT. Even if you do not have no programming experience but are technically oriented and a quick learner, it will be worth your time and money spent. The program gets you a conceptual understanding about Internet of Things hands on experience on different technologies and application.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#faq-group-1" href="#faq3">
                                    <span class="faq-question">WILL I GET A JOB AFTER DOING THIS TRAINING?</span>
                                </div>
                                <div id="faq3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>We are going to cover multiple technologies like Big data, embedded programming, cloud deployment, analytics, etc and the idea is to give an hands-on understanding on each of these technologies as well as their synchronization. Surely this will provide a window of opportunity in the up and coming IOT tech industry and a huge number of startups coming up in the area. Companies/startups working on wearable tech etc are surely going to be looking out for guys trained in IOT.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#faq-group-1" href="#faq4">
                                    <span class="faq-question">WHAT WOULD BE THE NEXT STEPS AFTER THE BOOTCAMP?</span>
                                </div>
                                <div id="faq4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>The answer to this can vary significantly based what you intend to do with the competence you build on IoT. Here are some thoughts:</p>
                                        <ul class="pdg-lr-15">
                                            <li>
                                                <p>Software professionals will get a lot of hands on insights on latest technologies. While they prepare themselves and develop further depth for the IoT wave to hit our shores, they can leverage the insights on specific technologies to further build depth on them and transform their career in that direction.</p>
                                            </li>
                                            <li>
                                                <p>Govt/PSU employees can take this input and explore how Govt can make a difference in governance using IOT. How better data can be collected using IOT. Given the vast application of the IOT in social sector, healthcare, environment and quality management, huge scope for Govt employees to experiment and implement.</p>
                                            </li>
                                            <li>
                                                <p>Start up enthusiasts and students can immediately get started with implementing their ideas. They can buy our IoT Kit / Osmosis Gateway and with free access to Osmosis Platform, they can start putting together their proof of concept. This is the most time and cost effective way to experiment and convert their ideas to reality.</p>
                                            </li>
                                            <li>
                                                <p>Industry people can go back and start exploring on ideas through which they can create disruptive innovation in their businesses and work with our consulting / solutions division to develop solutions for their needs.</p>
                                            </li>
                                        </ul>
                                        <p>Besides this, we are open to work with passionate people on their ideas and if you are keen on putting further effort in realizing those ideas, we are going to back you up through technical support, mentoring, access to infrastructure, etc for translating these ideas to a reality. We are also working with a few angel investors and VCs give you an opportunity to present your ideas and proof of concepts to them for funding.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#faq-group-1" href="#faq5">
                                    <span class="faq-question">HOW ONE CAN PAY FOR THIS BOOTCAMP?</span>
                                </div>
                                <div id="faq5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="list-unstyled">
                                            <li>
                                                <p>
                                                    <b class="clr-green">Payment Mechanism 1 - Direct Account Transfer</b>
                                                </p>
                                            </li>
                                            <li>ICICI Bank</li>
                                            <li>Axelta Systems Pvt Ltd</li>
                                            <li>A/c no – 000805014884</li>
                                            <li class="mgn-bottom-15">Khairatabad Branch, Hyderabad [IFSC Code – ICIC0000008] </li>
                                            <li>
                                                <p>
                                                    <b class="clr-green">Payment Mechanism 2 - Paypal</b>
                                                </p>
                                            </li>
                                            <li>Once we get a confirmation of your registration, we will send a link to Paypal Site for payment transfer.</li>
                                            <li>For more information, contact us at: +91-9949923705 / +91-9908112221</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="page-header">FAQ - Weekend Bootcamps</h2>
                <div class="row">
                    <div class="col-sm-12 faq-list">
                        <div class="panel-group" id="faq-group-2">
                            <div class="panel panel-default">
                                <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#faq-group-2" href="#faq-2-1">
                                    <span class="faq-question">RIGHT NOW THE BOOTCAMP IS BEING ORGANIZED IN HYDERABAD AND BANGALORE. ARE YOU PLANNING TO DO THIS IN MY CITY ALSO?</span>
                                </div>
                                <div id="faq-2-1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>There is quite a bit of interest coming from cities like Chennai, Pune and Delhi. In case there are sufficient no of participants in a particular city, we will plan to organize one there. We are working on a partner program through which we plan to extend it to most of the major cities over next few months.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#faq-group-2" href="#faq-2-2">
                                    <span class="faq-question">WILL THE KITS WILL BE PROVIDES FOR THE BOOTCAMP?</span>
                                </div>
                                <div id="faq-2-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Yes, kits will provide for the free of cost for the duration of the bootcamp.</p>
                                        <p>More details of the IoT Kit [if you want to own one after the training] are available here. It's optional.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#faq-group-2" href="#faq-2-3">
                                    <span class="faq-question">WHAT IS THE LOCATION OF THIS BOOTCAMP?</span>
                                </div>
                                <div id="faq-2-3" class="panel-collapse collapse">
                                    <div class="panel-body row">
                                        <div class="location clearfix">
									<address class="col-sm-6">
										<big class="clr-green"><b><big class="glyphicon glyphicon-map-marker"> </big> Hyderabad :</b></big>
										<ul class="list-unstyled">
											<li><strong><small>Axelta Systems Pvt.Ltd</small> </strong></li>
											<li>H.No : 6-3-571/a/12, </li>
											<li>2nd Floor, Suhana Rockdale, </li>
											<li>Somajiguda, Khairatabad,</li>
											<li>Hyderabad - 500 082.</li>
											<li>Telangana. India.</li>
										</ul>
										<div class="contact-links">
											<p><span class="glyphicon glyphicon-earphone"> </span> +91-9908112221 / +91-9949923705</p>
											<p><span class="glyphicon glyphicon-envelope"> </span> <a href="mailto:corporate@axelta.com">corporate@axelta.com</a></p>
											<p><span class="glyphicon glyphicon-globe"> </span> <a href="http://www.axelta.com">www.axelta.com</a></p>
										</div>
									</address>
									<div class="col-sm-6">
										<a  href="#" data-target="#model-img-slider" data-toggle="modal" data-slide-to="0"><img src="assets/image/map/map-office.png" class="img-responsive" /></a>
									</div>
								</div>
								<div class="horizontal-divider mgn-10-15"></div>
								<div class="location clearfix">
									<address class="col-sm-6">
										<big class="clr-green"><b><big class="glyphicon glyphicon-map-marker"> </big> Bangalore :</b></big>
										<ul class="list-unstyled">
											<li><strong><small>Vinsys IT Services(I)Pvt.Ltd.(System Consultant is now Vinsys)</small></strong></li>
											<li>1st stage BTM Layout, 20th Main Road, </li>
											<li>100 Ft Ring Road, Near Friends Restaurant, </li>
											<li>Bangalore-560078.</li>
											<li>Karnataka. India.</li>
										</ul>
										<div class="contact-links">
											<p><span class="glyphicon glyphicon-earphone"> </span> +91-9908112221 / +91-9949923705</p>
											<p><span class="glyphicon glyphicon-envelope"> </span> <a href="mailto:corporate@axelta.com">corporate@axelta.com</a></p>
											<p><span class="glyphicon glyphicon-globe"> </span> <a href="http://www.axelta.com">www.axelta.com</a></p>
										</div>
									</address>
									<div class="col-sm-6">
										<a href="#" data-target="#model-img-slider" data-toggle="modal" data-slide-to="1"><img src="assets/image/map/map-bootcamp-bangalore.png" class="img-responsive" /></a>
									</div>
								</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Model-code -->
        <div class="modal fade"  id="model-img-slider" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin: -20px -15px;">&times;</button>
                        <div id="carousel-img-slider" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="assets/image/map/map-office.png" class="img-responsive" />
                                    <div class="carousel-caption">
                                        <label>Bootcamp Location - Hyderabad</label>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/image/map/map-bootcamp-bangalore.png" class="img-responsive" />
                                    <div class="carousel-caption">
                                        <label>Bootcamp Location - Bangalore</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-img-slider" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-img-slider" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- -->
        <div class="nav-footer">
            <?php include 'nav-footer.php';?>
        </div>
    </body>
</html>