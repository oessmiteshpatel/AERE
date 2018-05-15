<?php 
include("admin/connect.php"); 
$res=mysql_query("SELECT * FROM tblcourse Where CourseID = '".$_REQUEST['cid']."'");
$data=mysql_fetch_array($res);

$cid=$_REQUEST['cid'];


//print_r($data);
?>
<!doctype html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>AERE | Assessment Services</title>
<link rel="apple-touch-icon" href="image/favicon-apple.png">
<link rel="icon" href="image/favicon.png">
<link rel="pingback" href="http://tritraining.edu.au/xmlrpc.php">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link type="text/css" media="screen" rel="stylesheet" href="css/awwwards.css" />
<link type="text/css" media="screen" rel="stylesheet" href="css/fastfonts.css" />

<!-- Normalize CSS -->
<link rel="stylesheet" href="css_new/normalize.css">
<!-- Main CSS -->
<link rel="stylesheet" href="css_new/main.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css_new/bootstrap.min.css">
<!-- Animate CSS -->
<link rel="stylesheet" href="css_new/animate.min.css">
<!-- Font-awesome CSS-->
<link rel="stylesheet" href="css_new/font-awesome.min.css">
<!-- Owl Caousel CSS -->
<link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
<link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
<!-- Main Menu CSS -->
<link rel="stylesheet" href="css_new/meanmenu.min.css">
<!-- nivo slider CSS -->
<link rel="stylesheet" href="vendor/slider/css/nivo-slider.css" type="text/css" />
<link rel="stylesheet" href="vendor/slider/css/preview.css" type="text/css" media="screen" />
<!-- Datetime Picker Style CSS -->
<link rel="stylesheet" href="css_new/jquery.datetimepicker.css">
<!-- Magic popup CSS -->
<link rel="stylesheet" href="css_new/magnific-popup.css">
<!-- Switch Style CSS -->
<link rel="stylesheet" href="css_new/hover-min.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css_new/style.css">
<!-- Modernizr Js -->
<script src="js_new/modernizr-2.8.3.min.js"></script>
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
.wrapper {
 //padding-top: 20px;
	padding-top: 50px;
}
input.parsley-error, select.parsley-error, textarea.parsley-error {
	border-color: #843534;
	box-shadow: none;
}
input.parsley-error:focus, select.parsley-error:focus, textarea.parsley-error:focus {
	border-color: #843534;
	box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 6px #ce8483
}
.parsley-errors-list {
	list-style-type: none;
	opacity: 0;
	transition: all .3s ease-in;
	color: #d16e6c;
	margin-top: 2px;
	margin-bottom: 0;
	padding-left: 220px;
}
.parsley-errors-list.filled {
	opacity: 1;
	color: #C5161D;
}
</style>
<style>
h3.sidebar-title {
	font-size: 22px;
	color: #002147;
	text-transform: capitalize;
	margin-bottom: 35px;
	position: relative;
	font-weight: 500;
	text-align: left;
}
.title-default-left {
	text-transform: capitalize;
	text-align: left;
	font-weight: 700;
	font-size: 28px;
	margin-bottom: 45px;
	color: #002147;
}
.course-details-inner .course-details-tab-area ul.course-details-tab-btn > li a {
	font-weight: 700;
}
.related-courses-title-area h3 {
	text-align: left;
	font-size: 22px;
	font-weight: 700;
}
.owl-nav {
	padding-top: 15px;
}
.enroll-btn {
	color: #002147;
	padding: 18px 0;
	background: #ffffff;
	text-transform: uppercase;
	font-size: 14px;
	font-weight: 700;
	display: inline-block;
	border: #C4161C;
	width: 100%;
	border: 2px solid #C4161C;
	text-align: center;
	-webkit-transition: all 0.5s ease-out;
	-moz-transition: all 0.5s ease-out;
	-ms-transition: all 0.5s ease-out;
	-o-transition: all 0.5s ease-out;
	transition: all 0.5s ease-out;
}
.enroll-btn:hover {
	background-color: #C4161C;
	color: #ffffff !important;
}
h3.sidebar-title:before {
	content: "";
	height: 3px;
	width: 40px;
	position: absolute;
	left: 0;
	bottom: -15px;
	z-index: 1;
	background: #C4161C !important;
}
.courses-box1 .single-item-wrapper .courses-img-wrapper:before {
	background-color: rgba(250, 0, 0, 0.8) !important;
}
ol, ul {
	padding: 0;
	list-style-type: none;
	text-align: left !important;
}
#accordion .panel-default .panel-heading a {
	outline: none;
	display: block;
	padding: 1px !important;
	text-align: center;
}
.curriculum-wrapper .panel-default .panel-heading .panel-title a ul li:nth-child(3n) {
	font-size: 16px;
	color: #002147;
	font-weight: 700;
}
dl, menu, ol, ul {
}
h4 {
	font-family: 'Roboto', sans-serif;
	line-height: 1.5 !important;
	font-weight: 300 !important;
	margin: 0 0 20px 0;
	color: #212121;
}
h3 {
	text-align: left !important;
	font-family: 'Roboto', sans-serif;
	line-height: 1.5;
	font-weight: 600 !important;
	color: #212121;
}
</style>
<style type="text/css">
img.wp-smiley, img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
.btn-t{
	margin-top:10px;
}
a:hover, a:visited:hover {
    text-decoration: none;
    color: #ffffff;
}
.areview
{
  margin-top:8px !important;
}
.courses-box1 .single-item-wrapper .courses-content-wrapper .item-title a:hover
{
	 color: #C4161C !important;
}
.courses-box1 .single-item-wrapper .courses-content-wrapper .courses-info li
{
	padding-right: 10px !important;
}

.courses-box1 .single-item-wrapper
{
	width:286px !important;
}
.registration-form .btn
 {
    width: 51% !important;
}
.courses-box1 .single-item-wrapper .courses-img-wrapper a
{
	height:70px !important;
	width:70px !important;
}
.courses-page-area5 
{
    padding: 30px 0 70px !important;
}
.hentry header, .homepage-article header, .blog-article header
 {
     padding: 0em 0em !important; 
}
ul 
{
    margin: 1em -15px !important;
}
</style>
<link rel='stylesheet' id='ajax-load-more-css'  href='css/ajax-load-more.css' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='css/settings.css' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}


.none{display:none !important;}
</style>
<link rel='stylesheet' id='cpsh-shortcodes-css'  href='css/shortcodes.css' type='text/css' media='all' />
<link rel='stylesheet' id='bones-boot-css'  href='css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='bones-magnafic-css'  href='css/magnific-popup.css' type='text/css' media='all' />
<link rel='stylesheet' id='bones-animate-css'  href='css/animate.css' type='text/css' media='all' />
<link rel='stylesheet' id='bones-stylesheet-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='bones-icons-css'  href='css/icons.css' type='text/css' media='all' />
<link rel='stylesheet' id='googleFonts-css'  href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' type='text/css' media='all' />
</head>

<body class="home page page-id-2 page-template page-template-page-home single single-team page-template-page-home-php desktop">
<div id="container">
<div id="custom-content-popup" class="white-popup mfp-hide"> </div>
<header class="header" role="banner">
  <div id="inner-header" class="wrap cf"> <a id="logo" href="index.php" rel="nofollow"><img src="image/logo.png" ></a>
    <div class="mobile-nav mobile-nav-collapsed "><a id="mobile-nav-button" href="javascript:void(0);"><span></span><span></span><span></span><!-- <div class="icon icon-list-1"></div> --></a></div>
  </div>
  <div id="mega-menu" class="">
    <nav role="navigation">
      <ul id="menu-main" class="nav top-nav cf">
        <li id="menu-item-75" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-75"><a href="index.php">Home</a></li>
        <li id="menu-item-75" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-75"><a href="index.php#home-to-scroll">About</a></li>
        <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.php#section-blue" >Services</a></li>
        <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.php#presentations">Presentations</a></li>
        <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.php#page">One Pagers</a></li>
        <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.php#staff" >Staff</a></li>
        <li id="menu-item-125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="allcourses.php">ALL-Institute</a></li>
        <li id="menu-item-125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.php#footer">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>
<div id="content">
<div id="inner-content" class="cf">
<div id="main" class="m-all t-all d-all cf" role="main"> 
  <!--<div class="section-white page-slider home-page-slider hom inner_banner_height">
                  <div class="parallax1" > </div>
                </div>-->
  <div class="section-white section-one">
    <article class="cf wrap post-410 team type-team status-publish has-post-thumbnail hentry profile-category-manager" role="article">
    <br>
    <header class="article-header wow fadeInUp">
      <h1 class="page-title" >Course Registration</h1>
    </header>
  </div>
  <!-- Inner Page Banner Area Start Here --> 
  <!--<div class="inner-page-banner-area" style="background-image: url('img_new/banner/5.jpg');">
            <div class="container">
                <div class="pagination-area">
                    <h1>Single Course - 03</h1>
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li>Courses Details</li>
                    </ul>
                </div>
            </div>
        </div>--> 
  <!-- Inner Page Banner Area End Here --> 
  <!-- Courses Page 5 Area Start Here -->
  <div class="courses-page-area5">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
          <div class="course-details-inner">
            <h2 class="title-default-left title-bar-high"><?php echo $data['Title'];?></h2>
            <img src="admin/upload/<?php echo $data['Image'];?>" class="img-responsive" alt="course">
            <div class="course-details-tab-area">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <ul class="course-details-tab-btn" style=" margin: 1em 5px !important;">
                    <li class="active"><a href="#description" data-toggle="tab" aria-expanded="false">Sign In</a></li>
                    <li><a href="#curriculum" data-toggle="tab" aria-expanded="false">Sign Up</a></li>
                    <li><a href="#lecturer" data-toggle="tab" aria-expanded="false">Forgot Password</a></li>
                  </ul>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="tab-content">
                    <div class="tab-pane fade active in" id="description">
                      <div class="form-top signIn">
                        <div class="form-top-left">
                          <h3>Sign In <i class="fa fa-pencil pull-right"></i></h3>
                        </div>
                        <p class="clearfix">Login to register for this course :</p>
                        <div class="form-top-divider"></div>
                      </div>
                      <div class="form-bottom signIn"  >
                        <form name="signinbtn" method="post" class="registration-form">
                          <div class="form-group">
                            <label class="sr-only" for="email1">Type your email address</label>
                            <br>
                       
                          <input name="email1" placeholder="What's your email address?" class="email form-control" type="email" required  data-parsley-trigger="keyup" data-parsley-error-message="Please enter the Email">
						  </div>
                          <div class="form-group">
                            <label class="sr-only" maxlength="30" for="form-password">Type your password</label>
							  <input name="pass1" placeholder="Type your password" id="pass1"class="form-control" 
							   type="password" required  data-parsley-trigger="keyup" data-parsley-error-message="Please enter the Password">
                         
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn" name="signinbtn">Sign In</button>
                          </div>
                        </form>
                      </div>
                    </div>
                    
                    <!-- Sign In --> 
                    
                    <!-- Sign Up -->
                    <div class="tab-pane fade" id="curriculum">
                      <div class="panel-group curriculum-wrapper" id="accordion">
                        <div class="form-top signUp" >
                          <div class="form-top-left">
                            <h3>Sign Up <i class="fa fa-pencil pull-right"></i></h3>
                          </div>
                          <p class="clearfix">Share you detail :</p>
                          <div class="form-top-divider"></div>
                        </div>
                        <div class="form-bottom signUp">
                          <form name="f1" id="signupbtn"  method="post" class="registration-form">
                            <input type="hidden" name="action" value="signUp" />
                            <div class="form-group">
                              <label class="sr-only" for="firstname">First name</label>
                              <br>
                              <input maxlength="50" name="firstname" placeholder="What's your first name?" class="firstname form-control" 
							  id="firstname" type="text" required data-parsley-pattern="^[a-zA-Z ]+$"  data-parsley-trigger="keyup" data-parsley-error-message="Please enter the First Name">
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="lastname">Last name</label>
                              <input maxlength="50"  name="lastname" placeholder="What's your last name?" class="lastname form-control" id="lastname" type="text" required 
							  data-parsley-pattern="^[a-zA-Z ]+$"  data-parsley-trigger="keyup" data-parsley-error-message="Please enter the Last Name">
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="email">Email</label>
                              <input name="email" placeholder="What's your email address?" class="email form-control" id="email" type="email" required  data-parsley-trigger="keyup" data-parsley-error-message="Please enter the Email">
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="pass">Password</label>
                              <input name="pass" maxlength="30" placeholder="Type secure password" class="pass form-control" 
							  id="pass" type="password" required data-parsley-length="[6, 15]" data-parsley-trigger="keyup" data-parsley-error-message="Please enter the Password">
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="confpass">Confirm password</label>
                              <input name="confpass" maxlength="30" placeholder="Confirm your password" class="confpass form-control" id="confpass" type="password" required data-parsley-equalto="#pass" data-parsley-trigger="keyup" data-parsley-error-message="Please enter the Confirm Password">
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="address">Address</label>
                              <input name="address" maxlength="200" placeholder="What's your address?" class="address form-control" id="address" type="text" required  data-parsley-trigger="keyup" data-parsley-error-message="Please enter the Address">
                            </div>
                            <!--<div class="form-group">
																<label class="sr-only" for="address">Address</label>
																<textarea name="address" placeholder="Your address..." class="form-about-yourself form-control" id="address"></textarea>
															</div>-->
                            <div class="form-group">
                              <label class="sr-only" for="Phone">Phone</label>
                              <input name="Phone" placeholder="Where can we call you?" class="Phone form-control" id="Phone" type="text" maxlength="12" required data-parsley-pattern="^[0-9]+$" data-parsley-trigger="keyup" data-parsley-error-message="Please enter the Contact Number">
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn" name="signupbtn">Sign Up</button>
                            </div>
                          </form>
                        </div>
                        
                        <!--End Sign Up --> 
                        
                      </div>
                    </div>
                    <div class="tab-pane fade" id="lecturer">
                      <div class="course-details-skilled-lecturers" style="margin: 0 !important;">
                        <div class="form-top forgot" >
                          <div class="form-top-left">
                            <h3>Forgot Password? <i class="fa fa-pencil pull-right"></i></h3>
                          </div>
                          <p class="clearfix">Type your email to recover your password :</p>
                          <div class="form-top-divider"></div>
                        </div>
                        <div class="form-bottom forgot"  >
                          <form id="forgotbtn" name="forgotbtn" role="form" method="post" class="registration-form">
                            <br>
                            
                            <input type="hidden" name="course" value="<?php echo $data['Title']; ?>" />
                            <input type="hidden" name="action" value="forgot" />
                            <div class="form-group">
                              <label class="sr-only" for="email3">Email</label>
                              <input name="email1" placeholder="What's your email address?" class="email form-control" type="email" required  data-parsley-trigger="keyup" data-parsley-error-message="Please enter the valid Email">
                            </div>
                            <br>
                            <div class="form-group">
                              <button name="remail"  type="submit" class="btn">Send Recovery Email!</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="related-courses-title-area">
            <h3>Related Courses</h3>
          </div>
          <div id="shadow-carousel" class="related-courses-carousel">
            <div class="rc-carousel" data-loop="true" data-items="3" data-margin="15" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="1" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="2" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false">
              <?php
$date=date('Y-m-d');											
							$cnd=" AND StartDate > '$date' ";
							
							$cnd2= " AND '$date' BETWEEN  StartDate AND EndDate ";
											
			              $res=mysql_query("SELECT * FROM tblcourse Where CourseID!='$cid' and IsStatus = 1 AND (StartDate > '$date' OR '$date' BETWEEN  StartDate AND EndDate) order by StartDate ");
							
			$noofrec=mysql_num_rows($res);
						if($noofrec>0)
						{
							while($data=mysql_fetch_array($res))
							{
//print_r($data);
?>
              <div class="courses-box1">
                <div class="single-item-wrapper" style="300px">
                  <div class="courses-img-wrapper hvr-bounce-to-right">
				  
                     <img src="admin/upload/<?php echo $data['Image'];?>" style="height:190px; width:auto;" 
									alt="">
									
									<div style="width:285px; background-color:lightgrey;">
                                     <h style="font-size: 18px;font-weight: 500;text-align:justify ;line-height: 1.5;color:black !important;">
								 <center style="padding-top:0px;"></center> </h>
									</div>
						<div style="position:absolute; top:25%; color:#fff; left:0; text-align:center; font-weight:bold; width:100%;">
								<?php //echo $data['Title'];?>
						</div>
									<a href="detail.php?cid=<?php echo $data['CourseID'];?>"><i class="logo" aria-hidden="true"></i>
										<div style="margin-top:0px;">Click for</div>
										<div style="margin-top:-25px;">detail</div>
									</a>

					</div>
                  <div class="courses-content-wrapper">
				  
					 <ul class="courses-info" style="height:50px;">
									   
                                       <li>
											
                                           
											<?php echo $data['Title'];?><br>
											
											</li>
                                       
										</ul>
                    <ul class="courses-info">
                      <li><?php echo $data['StartDate']; ?> <br>
                        <span><b> Start Date</b></span></li>
                      <li><?php echo $data['TotalCapacity']; ?> <br>
                        <span><b>Seat</b></span></li>
                      <li><?php echo $data['Time']; ?> <br>
                        <span><b> Time</b></span></li>
                    </ul>
                  </div>
                </div>
              </div>
              <?php
							}
					}else
						{?>
					
                            <div class="single-item-wrapper" style="aligin:center; ">
                            	<div style="height:180px;width:850px; background-color:lightgrey;padding:25px" >
                                    <center style="font-size:24px;margin-top:40px;">   No Course Available..</center>
									</div>
                                
                            </div>
                      
                    
                        <?php 
						}
						?>
						
            </div>
          </div>
        </div>
        <?php include("admin/connect.php"); 
$res=mysql_query("SELECT * FROM tblcourse Where CourseID = '".$_REQUEST['cid']."'");
$data=mysql_fetch_array($res);
//print_r($data);
?>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
          <?php
														  if(isset($_POST['signupbtn']))
														  {
															$fnm=$_POST['firstname'];
															$lnm=$_POST['lastname'];
															$email=$_POST['email'];
															$upass=$_POST['pass'];
															$confpass=$_POST['confpass'];
															$address=$_POST['address'];
															$Phone=$_POST['Phone'];
															$CreatedBy=0;
			                                                $IsActive=0;
															$otp=rand(5000,25000);
										$select=mysql_query("select * from tblregister where Email='$email'");
										$r1=mysql_fetch_array($select);
										$emailalredy=$r1['Email'];
											
										if($emailalredy==$email)
										{
											?>
          <div class="alert alert-danger" style="width:262px;margin:0px 0px 10px 0px"> <strong>Your emailid are alredy existing.</strong> <br>
            Please enter new emailid...! </div>
          <br>
          <?php
										}
										else
										{
															$ins=mysql_query("insert into  tblregister(`UserName`,`Password` ,`FirstName` ,`LastName` ,`Email`,`Address`,`Phone`,`ConfirmationCode`, `IsActive`,`CreatedBy`,`otp` ) VALUES('$email','$upass', '$fnm', '$lnm', '$email', '$address', '$Phone', '$confpass', '$IsActive', '$CreatedBy','$otp')");
		session_start();
		$_SESSION['email']=$email;
		
		$email=trim($email);
		
		require_once('email/class.phpmailer.php');
		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465; // or 587
		$mail->IsHTML(true);
		$mail->FromName="AERE"; 
		$mail->Username = "myopeneyes3937@gmail.com";
		$mail->Password = "W3lc0m3@2018";
		$mail->SetFrom("myopeneyes3937@gmail.com");
		$mail->Subject = "AERE Confirmation email";
		$mail->Body = "<img src='http://aerexperts.com/image/logo.png' height='80px' width='180px'> <br><br><br>
		     Dear $fnm, <br/><br/>
		
		    Here is the your otp verification for registration :- <b>$otp</b><br><br>
			
			
			If you need to make any changes to this, please do not hesitate to 
			contact us at Manny@AERExperts.com or simply reply and someone will get back
			to you soon.<br><br>
			
			<b>Thank you,</b><br>
			<b>AERE Team</b>";
		$mail->AddAddress($email);
		//$msg="";
		if(!$mail->Send())
		{
			echo "Mailer Error: " . $mail->ErrorInfo;
		}
		else
		{
			$cid=$_REQUEST['cid'];
			//echo "Message has been sent";
			echo"<script>window.location='conf_otp.php?cid=$cid';</script>";
			
			
			
			
		}
		
		
	
											if($ins)
											{	?>
          <div class="alert alert-success" style="width:262px; 		margin:0px 0px 10px 0px"> <strong>You are register successfully.</strong> <br>
            Please make sure to login...! </div>
          <br>
          <?php
											}
										}				
								 }

	?>
          <?php
								
								$cid=$data['CourseID'];
								include("admin/connect.php"); 
								if(isset($_POST['signinbtn']))
								{
															
									$Email=$_POST['email1'];
									$Password=$_POST['pass1'];
															
															
							$select=mysql_query("select * from tblregister where Email='$Email' and Password='$Password'");
							$result=mysql_fetch_array($select);
							$emailpass=$result['Email'];
							$regid=$result['RegisterId'];
							$isactive=$result['IsActive'];
							
							if($isactive=='1')
							{
								session_start();
								$_SESSION['Email']=$emailpass;
								$_SESSION['RegisterId']=$regid;
								
									echo "<script> 
								
										window.location.href='detail.php?cid=$cid';
															</script>";
							}
							else if($isactive=='0')
							{
								?>
          <div class="alert alert-warning" style="width:262px; margin:0px 0px 10px 0px"> <strong>Please contact to Admin.</strong> <br>
            You are currently not activated...! </div>
          <br>
          <?php	
							}	
							else							
							{

							
							?>
          <div class="alert alert-danger" style="width:262px; margin:0px 0px 10px 0px"> <strong>Your Email-Id or Password is wrong.</strong> <br>
            Please try again to login...! </div>
          <br>
          <?php								
															
							}
					}
					
					
					
					if(isset($_POST['remail']))
	       {
			$email=$_REQUEST['email3'];
			$sql=mysql_query("SELECT * FROM tblregister WHERE Email='$email'");
			//var_dump($sql);
			//exit;
			
			$row = mysql_fetch_array($sql);
			$pass=$row['Password'];
			$email=$row['Email'];
		    $fnam=$row['FirstName'];
			//session_start();
			//$_SESSION['ema']=$emm;
			
		$emai=trim($email);
		
		require_once('email/class.phpmailer.php');
		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465; // or 587
		$mail->IsHTML(true);
		$mail->FromName="AERE"; 
		$mail->Username = "myopeneyes3937@gmail.com";
		$mail->Password = "W3lc0m3@2018";
		$mail->SetFrom("myopeneyes3937@gmail.com");
		$mail->Subject = "Aere Password for email";
		$mail->Body = "<img src='http://aerexperts.com/image/logo.png' height='80px' width='180px'> <br><br><br>
		    Hello $fnam, <br/><br/>
			
			Your Password code:-$pass<br/><br/>
			
			
			<b>Thank You,</b><br/>
			<b>Our Team </b><br/>";
		$mail->AddAddress($emai);
		//$msg="";
		if(!$mail->Send())
		{
			echo "Mailer Error: " . $mail->ErrorInfo;
		}
		else
		{
			//echo "Message has been sent";
			echo"<script>alert('Please check your mail');window.location='forgotpass.php';</script>";
			
		}
		
		
	}
?>
														  
		  <!-- <div class="alert alert-success" style="width:262px; margin:0px 0px 10px 0px">
				                	    <strong> Thank you for registering in Aere.</strong>
			   </div>  -->
								   

          <div class="sidebar">
            <div class="sidebar-box" style="margin-top:-30px;">
              <div class="sidebar-box-inner">
                <h3 class="sidebar-title">Course Fees</h3>
                <div class="sidebar-course-price">
                  <p>$<?php  if($data['CourseFees']!=''){ echo $data['CourseFees'];}else{echo  "Not Avilable";}?></p>
                </div>
              </div>
            </div>
            
            <!--   <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Asked Any Question?</h3>
                                    <div class="sidebar-question-form">
                                        <form id="question-form">
                                            <fieldset>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <textarea placeholder="Message*" class="textarea form-control" name="message" id="sidebar-form-message" rows="3" cols="20" data-error="Message field is required" required></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="default-full-width-btn">Send</button>
                                                </div>
                                                <div class='form-response'></div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
							-->
            
            <?php include("admin/connect.php"); 
$res=mysql_query("SELECT * FROM tblcourse Where CourseID = '".$_REQUEST['cid']."'");
$data=mysql_fetch_array($res);
$noofuserreg=$data['NoofUserRegistered'];	
$totcap=$data['TotalCapacity'];
$setave=$totcap-$noofuserreg;
//print_r($data);
?>
            <div class="sidebar-box">
              <div class="sidebar-box-inner">
                <h3 class="sidebar-title">Start Date and Time</h3>
                <div class="sidebar-course-price">
                  <p><?php echo $data['StartDate']; ?>&nbsp;/&nbsp;<?php echo $data['Time'];?></p>
                </div>
                <h3 class="sidebar-title">Location</h3>
                <div class="sidebar-course-price">
                  <p><?php  if($data['Location']!=''){ echo $data['Location'];}else{echo  "Not Avilable";}?></p>
                </div>
                <h3 class="sidebar-title">Intended Audience</h3>
                <div class="sidebar-course-price">
                  <p><?php  if($data['IntendedAudience']!=''){ echo $data['IntendedAudience'];}else{echo  "Not Avilable";}?></p>
                </div>
                <h3 class="sidebar-title">Instructors</h3>
                <div class="sidebar-course-price">
                  <p><?php  if($data['Instructor']!=''){ echo $data['Instructor'];}else{echo  "Not Avilable";}?></p>
                </div>
                <h3 class="sidebar-title">Discussant/Moderator</h3>
                <div class="sidebar-course-price">
                  <p><?php  if($data['Instigator']!=''){ echo $data['Instigator'];}else{echo  "Not Avilable";}?></p>
                </div>
                <h3 class="sidebar-title">Seats Available</h3>
                <div class="sidebar-course-price">
                  <p><?php  if($setave!=''){ echo $setave;}else{echo  "Not Avilable";}?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Courses Page 5 Area End Here --> 
      <!-- Footer Area Start Here --> 
      
      <!-- Footer Area End Here --> 
    </div>
  </div>
 <?php
		 include('footer2.php');
		 ?>
</div>
<link rel='stylesheet' id='gforms_reset_css-css'  href='css/formreset.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_formsmain_css-css'  href='css/formsmain.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_ready_class_css-css'  href='css/readyclass.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_browsers_css-css'  href='css/browsers.min.css' type='text/css' media='all' />
<script type='text/javascript'  src="js/jquery-2.1.1.min.js"></script> 
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script> 
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script> 
<script type="text/javascript">






	


</script> 
<script type='text/javascript' src='js/magnific-popup.js'></script> 
<script type='text/javascript' src='js/wow.min.js'></script> 
<script type='text/javascript' src='js/scripts.min.js'></script> 
<script type='text/javascript' src='js/jquery.sticky-kit.js'></script> 
<script>
$(".about-the-quickfacts").stick_in_parent({
    offset_top: 70
});

</script> 

<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here --> 
<!-- jquery--> 
<script src="js_new/jquery-2.2.4.min.js" type="text/javascript"></script> 
<!-- Plugins js --> 
<script src="js_new/plugins.js" type="text/javascript"></script> 
<!-- Bootstrap js --> 
<script src="js_new/bootstrap.min.js" type="text/javascript"></script> 
<!-- WOW JS --> 
<script src="js_new/wow.min.js"></script> 
<!-- Nivo slider js --> 
<script src="vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script> 
<script src="vendor/slider/home.js" type="text/javascript"></script> 
<!-- Owl Cauosel JS --> 
<script src="vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script> 
<!-- Meanmenu Js --> 
<script src="js_new/jquery.meanmenu.min.js" type="text/javascript"></script> 
<!-- Srollup js --> 
<script src="js_new/jquery.scrollUp.min.js" type="text/javascript"></script> 
<!-- jquery.counterup js --> 
<script src="js_new/jquery.counterup.min.js"></script> 
<script src="js_new/waypoints.min.js"></script> 
<!-- Countdown js --> 
<script src="js_new/jquery.countdown.min.js" type="text/javascript"></script> 
<!-- Isotope js --> 
<script src="js_new/isotope.pkgd.min.js" type="text/javascript"></script> 
<!-- Select2 Js --> 
<script src="js_new/select2.min.js" type="text/javascript"></script> 
<!-- Nouislider Js --> 
<script src="vendor/noUiSlider/nouislider.min.js" type="text/javascript"></script> 
<!-- Validator js --> 
<script src="js_new/validator.min.js" type="text/javascript"></script> 
<!-- Magic Popup js --> 
<script src="js_new/jquery.magnific-popup.min.js" type="text/javascript"></script> 
<!-- Custom Js --> 
<script src="js_new/main.js" type="text/javascript"></script> 
<script src="js/jquery-1.12.4-jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="parsleyjs/dist/parsley.min.js"></script> 
<script>
$(document).ready(function(){
	$('form').parsley();
});
</script>
</body>
</html>