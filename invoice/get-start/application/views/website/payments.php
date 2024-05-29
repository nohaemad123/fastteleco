<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/icon" href="<?php echo base_url() ?>/assets/website/images/download%20(1)-1.png" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <title>FastTeleco - Payment</title>
    <link href="<?php echo base_url() ?>/assets/website/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>/assets/website/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>/assets/website/css/styles.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>/assets/website/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>/assets/website/css/hover.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>/assets/website/css/animate.css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url() ?>/assets/website/js/html5shiv.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/website/js/respond.min.js"></script>

</head>
<body>
    <script type="text/javascript" src="http://fastteleco.com/chat/php/app.php?widget-init.js"></script>
     <div class="header">
        <div class="logo">
                    <img src="<?php echo base_url() ?>/assets/website/images/download.png">
        </div>
        <div id='cssmenu'>
            <ul>
                <li class="active"> <a href='index.html'><span class="fa fa-home"> </span> Home</a></li>
                <li class=' has-sub'><a href="Email-service.html" ]><span class="fa fa-leaf"> </span> Services</a>
                    <ul>
                        <li><a href="Email-service.html"><span class="fa fa-envelope"> </span> Email Service</a></li>
                        <li><a href='invoice-system.html'><span class="fa fa-cogs"> </span> Invoice System</a></li>
                        <li><a href='ddos.html'><span class="fa fa-flag"> </span> DDOS System</a></li>

                    </ul>
                </li>
                <li><a href="news.html"><span class="fa fa-calendar"> </span> help</a></li>
                <li><a href="careers.html"><span class="fa fa-globe"> </span> payment</a></li>
                <li class='last'><a href='contact.html'><span class="fa fa-send"> </span> Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url() ?>/assets/website/images/index2.png"> EN <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><img src="<?php echo base_url() ?>/assets/website/images/index2.png"> EN</a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php echo base_url() ?>/assets/website/images/EG.gif"> AR</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>



    <div class="content">
        <div class="container">
            <h3 class="text-center">Confirm Your Payment</h3>
			  <div class="line">
                <!-- the line of width :6% -->
                <span style="width:30%"></span>
    </div>
            <p class="text-center"><i class="fa fa-lock"></i> After you pay the fees you need confirm your payment via this page, its take 2 hours to 24 hours to reactive your account, also you can re-pay your monthly fees, sometimes we call our clients by phone to get more details </p>
                    

    <?php if(!empty($ress) && $ress == "yes"){  ?>
											<div class="alert alert-success">
  <strong>Thank You For your business!</strong>  Your Request has been sent , Your account will be updated shortly .
</div>
	<?php } else if(!empty($ress) && $ress == "no"){ ?> 
	<div class="alert alert-danger">
  <strong>Error!</strong> Please Try Later.
</div>
	<?php } ?>
					<h4>Please fill the fields</h4>
					

                      <form  method="post" action="<?php echo base_url("mail/email_sending") ?>" enctype="multipart/form-data">
	
                        <label>The payment Method</label>
                        <select name="payment_method" required class="form-control">
                            <option disabled="" selected="" value="">Select</option>
                            <option value="PayPal">PayPal</option>
                            <option value="CashU">CashU</option>
                            <option value="Vodafone (in egypt)">Vodafone (in egypt)</option>
                            <option value="orange (in egypt)">orange (in egypt)</option>
                            <option value="Itisalat (in egypt)">Itisalat (in egypt)</option>
                        </select>
                        <label>Select Services</label>
                        <select name="service" required class="form-control">
                            <option disabled="" selected="" value="">Select</option>
                            <option value="Invoice System">Invoice System</option>
                            <option value="other">other</option>
                        </select>
                        <label>Enter Amout</label>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input name="amount" required type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                <div class="input-group-addon">.00</div>
                            </div>
                        </div>
                        <label>Enter ID</label>
                        <div class="form-group has-success has-feedback">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input name="email" required type="email" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" placeholder="Email Address">
                            </div>
                        </div>
                        <label>Contact Number</label>
                        <div class="form-group has-success has-feedback">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input name="phone" required type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" placeholder="Enter Phone Number">
                            </div>
                        </div>
                        <label>Comment (any details that could help us to make the processing faster like transaction ID for PayPal or sender mobile number for vodafone, orange and etisalat)</label>
                        <div class="form-group">
                        <textarea name="msg" rows="8" placeholder="Comment" class="form-control"></textarea>
                        </div>
                        <input  class="pay" type="submit" value="Confirm Your Payment">
                    </form>
            </div>
        </div>
    </div>

 

       <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="call-center">
                        <p>Questions? Call sales at
                            <br><span>+(202) 26709927</span></p>
                        <a href="http://www.fastteleco.com/Help">Help Center</a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="our-services">
                        <h4>Our Services</h4>
                                                                        <p><i class="fa fa-bullseye"></i><a href="http://www.fastteleco.com/Invoice-system"> Invoice System </a></p>

                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="support_and-billing">
                        <h4>Support</h4>
                                                <p><i class="fa fa-bullseye"></i><a href="#"> Live Chat </a></p>
                        <p><i class="fa fa-bullseye"></i><a href="http://forum.fastteleco.com"> Help Forum </a></p>
                        <p><i class="fa fa-bullseye"></i><a href="contact.html"> Email Us </a></p>
                        <hr>
                        <h4>Billing</h4>
                                                <p><i class="fa fa-bullseye"></i><a href="http://pay.fastteleco.com"> Pay Now </a></p>
                                                                        <p><i class="fa fa-bullseye"></i><a href="http://pay.fastteleco.com/confirm.html"> Confirm  Payment </a></p>

                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="method">
                        <h4>Our Company</h4>
                                                                        <p><i class="fa fa-bullseye"></i><a href="http://www.fastteleco.com/company/about.html"> About Us </a></p>
                                                                        <p><i class="fa fa-bullseye"></i><a href="http://www.fastteleco.com/company/careers.html"> Careers </a></p>


                                                                <p><i class="fa fa-bullseye"></i><a href="http://www.fastteleco.com/company/our-guarantee.html"> Our Guarantee </a></p>
                                                                        <p><i class="fa fa-bullseye"></i><a href="http://www.fastteleco.com/company/privacy-policy.html"> Privacy Policy </a></p>
                                                                        <p><i class="fa fa-bullseye"></i><a href="http://www.fastteleco.com/company/tos.html"> Term Of Conditions </a></p>
                                                                                                <p><i class="fa fa-bullseye"></i><a href="http://www.fastteleco.com/partners.html"> Become A Partner </a></p>
                                                <p><i class="fa fa-bullseye"></i><a href="http://www.fastteleco.com/contact.html"> Contact Us </a></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="images">
                <img src="<?php echo base_url() ?>/assets/website/images/paypal-logo.png">
						 <div class="social">
                            <a href="https://www.facebook.com/FASTtelecom/?fref=ts" target="_blank"><img src="<?php echo base_url() ?>/assets/website/images/Facebook-128%20(1).png"></a>
                            <a href="#" target="_blank"><img src="<?php echo base_url() ?>/assets/website/images/Googleplus-128%20(1).png"></a>
                            <a href="#" target="_blank"><img src="<?php echo base_url() ?>/assets/website/images/Twitter-128%20(1).png"></a>
                            <a href="#" target="_blank"><img src="<?php echo base_url() ?>/assets/website/images/Instagram-128.png"></a>
                            <a href="#" target="_blank"><img src="<?php echo base_url() ?>/assets/website/images/Linkedin-128.png"></a>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="copyright text-center">
        <p>CopyRight &copy; 2016 <a href="#">FastTeleco</a></p>
    </section>

    <script src="<?php echo base_url() ?>/assets/website/js/jquery.1.11.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/website/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/website/js/plugins.js"></script>
<script src="<?php echo base_url() ?>/assets/website/js/script.js"></script>
    <script src="<?php echo base_url() ?>/assets/website/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <script src="<?php echo base_url() ?>/assets/website/js/jquery.nicescroll.min.js"></script>


</body>
