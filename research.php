<?php 
include("admin/connect.php");
include_once "allfunction.php";
?>

<!doctype html>

        <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <title>AERE | Research Services</title>
        <link rel="apple-touch-icon" href="image/favicon-apple.png">
        <link rel="icon" href="image/favicon.png">
        <link rel="pingback" href="http://tritraining.edu.au/xmlrpc.php">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link type="text/css" media="screen" rel="stylesheet" href="css/awwwards.css" />
        <link type="text/css" media="screen" rel="stylesheet" href="css/fastfonts.css" />
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
	padding-left: 0px;
}
.parsley-errors-list.filled {
	opacity: 1;
	color:#C4161C;
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

        <body class="home page page-id-2 page-template page-template-page-home page-template-page-home-php desktop">
<div id="container">
          <div id="custom-content-popup" class="white-popup mfp-hide"> </div>
          <header class="header " role="banner">
    <div id="inner-header" class="wrap cf"> <a id="logo" href="index.php" rel="nofollow"><img src="image/logo.png" ></a>
              <div class="mobile-nav mobile-nav-collapsed "><a id="mobile-nav-button" href="javascript:void(0);"><span></span><span></span><span></span><!-- <div class="icon icon-list-1"></div> --></a></div>
            </div>
    <div id="mega-menu" class="">
              <nav role="navigation">
        <ul id="menu-main" class="nav top-nav cf">
                  <li id="menu-item-75" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-75"><a href="index.php">Home</a></li>
                  <li id="menu-item-75" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-75"><a href="index.php#home-to-scroll">About</a></li>
                  <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.php#section-blue" class="active">Services</a></li>
				  <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.php#presentations">Presentations</a></li>
				  <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.php#page">One Pagers</a></li>
				  <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.php#staff">Staff</a></li>
				  <li id="menu-item-89" class="mega menu-item menu-item-type-post_type"><a href="allcourses.php">ALL-Institute</a></li>
                  <li id="menu-item-125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-125"><a href="index.php#footer">Contact</a></li>
                </ul>
      </nav>
            </div>
  </header>
          <div id="content">
    <div id="inner-content" class="cf">
              <div id="main" class="m-all t-all d-all cf" role="main">
        <div class="section-white page-slider home-page-slider hom inner_banner_height" >
                  
                  <!-- <div class="parallax-slider" data-parallax="scroll" data-image-src="http://tritraining.edu.au/wp-content/uploads/2015/04/homepage-jul-2015.jpg" > --> 
                  <!-- <div class="parallax-slider" style="background-size:cover; background-image:url('wp-content/uploads/2015/04/homepage-jul-2015.jpg');" > -->
                  <div class="parallax1" > </div>
                  
                  
                  <!-- </div>							 -->
                  <!--<div class="skew-wrapper">
                    <div class="skew-bar"></div>
                  </div>-->
                </div>
        		<!--<div id="container">
                  <div class="parallelogram inner_banner"> </div>
                </div>-->	
        <div class="section-white section-one services_page">
        
                
                <div class="wrap">
            <article class="cf m-all t-1of3 d-1of3 post-322 course type-course status-publish has-post-thumbnail hentry course-category-management course-tag-feature" role="article">
                    <header class="article-header">
                <h1 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"> Other Services </h1>
              </header>
                    <section class="entry-content text-left cf wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <div class="about-the-quickfacts">
                        <table>
                        <tbody>
                          <tr>
                            <td><a href="assessment.php"><img src="image/assessment_services.png"></a></td>
                            <td><a href="assessment.php" style="color:inherit;">Assessment Services</a></td>
                          </tr>
                          <tr>
                            <td><a href="educational.php"><img src="image/education_services.png"></a></td>
                            <td><a href="educational.php" style="color:inherit;">Educational Services</a></td>
                          </tr>
                          <tr>
                            <td><a href="research.php"><img src="image/research_services.png"></a></td>
                            <td><a href="research.php" style="color:inherit;">Research Services</a></td>
                          </tr>
                          </tbody>
                  		  </table>
                      </div>
              </section>
                  </article>
            <article class="cf m-all t-2of3 d-2of3 post-322 course type-course status-publish has-post-thumbnail hentry course-category-management course-tag-feature" role="article">
                    <header class="article-header">
                <h1 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"> Research Services </h1>
              </header>
                    <section class="entry-content text-left cf wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"> 
                <!-- <div class="hom hot d-1of12" style="background-repeat: repeat-y; background-position: top center; height: 100%; background-image:url('/library/images/line.png');">&nbsp;</div> -->
                <div class="pad about-the-course">
                        <h5 class="push-color text-left">Research Methods Services</h5>
                        <p>To answer an organization’s critical questions, we employ a number of data collection methods such as literature reviews, case/observational studies, survey research, focus groups, interviews, and assessments and analyze the results with other pertinent information.</p>
                        <ul>
                        <li class="p1"><span class="s1">Survey Research  <br>
AERE provides online survey research services which include the design, communications, sampling, delivery, data analysis and management, demographic and statistical analysis, and reporting.</span></li>
						<li class="p1"><span class="s1">Focus Groups  <br>
AERE conducts focus groups for various organizational needs. We develop templates that include questions and prompts which, with the client’s and participants’ permission, we audio record and transcribe. Key findings are summarized in a final report.</span></li>
						<li class="p1"><span class="s1">Interviews<br>
AERE conducts interviews to gather information to meet the needs of the organization. We develop interview templates using many interview and information gathering techniques such as the Critical Incident Technique.</span></li>
                        
                        </ul>
                        
                        <h5 class="push-color text-left">Feasibility Study/Needs Assessments</h5>
                        <p>AERE uses research methods to determine the needs, value, demand, cost and price offering estimates of the certification product, purchase process, and channel analysis. In other words, the feasibility study provides information to help organizations determine whether a certification is a worthwhile investment.</p>
                        
                       <!--

 <h5 class="push-color text-left">Value of Certification Study (VoC).</h5>
                        <p>AERE conducts VoC studies to determine the value the certification may have to various stakeholders (e.g., certification holders, hiring personnel, public). These studies examine stakeholder characteristics such as motivational variables which may include promotions, salaries, professional development, peer acceptances, and lifelong learning. Once this information is synthesized, AERE can provide information on how the information can be useful to determine marketing strategies.</p>

-->
                        
                        <h5 class="push-color text-left">Marketing Research Study</h5>
                        <p>AERE conducts marketing research which encompasses the following</p>
                        
                        <ul>
                        <li class="p1"><span class="s1">Market Testing/Beta Testing/Field Trials</span></li>
						<li class="p1"><span class="s1">Concept Testing</span></li>
                        <li class="p1"><span class="s1">Demand Estimation</span></li>
                        <li class="p1"><span class="s1">Customer Satisfaction</span></li>
                        <li class="p1"><span class="s1">Metric Development and Analysis</span></li>
                        <li class="p1"><span class="s1">Price/Cost Testing (Elasticity)/Purchase Process</span></li>
                        <li class="p1"><span class="s1">Segmentation/Stakeholder Analysis</span></li>
                        <li class="p1"><span class="s1">Consumer Decision Analysis</span></li>
                        <li class="p1"><span class="s1">Brand Positioning</span></li>
                        <li class="p1"><span class="s1">Brand Equity/Competitor Research</span></li>
                        <li class="p1"><span class="s1">Awareness Testing</span></li>
                        <li class="p1"><span class="s1">Word of Mouth Analysis</span></li>
                        <li class="p1"><span class="s1">Attitude Surveys</span></li>
                        <li class="p1"><span class="s1">Customer Recovery/Retention Research</span></li>
                        <li class="p1"><span class="s1">Product Placement Analysis</span></li>
                        <li class="p1"><span class="s1">Salary Surveys</span></li>
                        
                        </ul>
                        
                        <h5 class="push-color text-left">Data and Statistical Analysis</h5>
                        <p>AERE supports research findings with statistical analysis of the data. AERE can also support clients’ data analysis with the following services:</p>
                        
                        <ul>
                        <li class="p1"><span class="s1">Exploratory analysis and descriptive statistics</span></li>
						<li class="p1"><span class="s1">Regression analysis</span></li>
                        <li class="p1"><span class="s1">Hierarchical linear models</span></li>
                        <li class="p1"><span class="s1">Multivariate analysis</span></li>
                        <li class="p1"><span class="s1">Factor analysis</span></li>
                        <li class="p1"><span class="s1">Cluster analysis and data mining</span></li>
                        <li class="p1"><span class="s1">Monte Carlo studies and simulations of outcomes</span></li>
                        <li class="p1"><span class="s1">Data visualization</span></li>
                        
                        </ul>
                        
                        
                      </div>
              </section>
                  </article>
            <div class="cf"></div>
          </div>
        
        
        
        
                  <div class="clearfix"></div>
                </div>
        
      </div>
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
        <script type="text/javascript">


$('#mega-menu ul li a').on('click',function(){
   $('.menu-main').addClass('none');
   $('.mobile-nav').addClass('menu-open1');
   $('.menu-main').removeClass('menu-open');
});

$('#mobile-nav-button').on('click',function(){
   $('.menu-main').addClass('menu-open');
   $('.menu-main').removeClass('none');
});
</script>
<script type='text/javascript' src='js/magnific-popup.js'></script> 
<script type='text/javascript' src='js/wow.min.js'></script> 
<script type='text/javascript' src='js/scripts.min.js'></script> 

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