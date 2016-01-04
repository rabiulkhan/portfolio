<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <?php /*?><link rel="shortcut icon" href="http://webagate.com/demos/alia/onepage-vcard-resume-portfolio-website-template/img/ico/favicon.ico"><?php */?>
        <?php 
			$val = $this->db->get_where('system_settings')->result_array();
			foreach($val as $row){
		?>
		<title>
			<?php echo $row['system_title'];?>
		</title>
		<?php
			}
		?>
        <!-- ALL STYLESHEETS -->
        <link href="<?php echo base_url();?>template/front/assets/css/all-stylesheet.css" rel="stylesheet">
        <!-- ALL COLORED STYLESHEETS -->
        <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>template/front/assets/css/colors/default.css" title="default">
        <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>template/front/assets/css/colors/blue.css" title="blue">
        <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>template/front/assets/css/colors/green.css" title="green">
        <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>template/front/assets/css/colors/red.css" title="red">
        <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>template/front/assets/css/colors/orange.css" title="orange">
        <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>template/front/assets/css/colors/yellow.css" title="yellow">
        <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>template/front/assets/css/colors/greyish-blue.css" title="greyish-blue">
        <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>template/front/assets/css/colors/purple.css" title="purple">
        <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>template/front/assets/css/colors/grey.css" title="grey">
        <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>template/front/assets/css/colors/mehroon.css" title="mehroon">
        <script src="<?php echo base_url();?>template/front/assets/js/jquery-1.11.0.min.js"></script> 
    <link rel="stylesheet" href="<?php echo base_url();?>template/front/assets/jquery.boxes.min.css" />
    <script type="text/javascript" src="<?php echo base_url();?>template/front/assets/jquery.boxes.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>template/front/assets/jquery.boxes.repopup.min.js"></script>
		
		
        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]>
        <script src="../../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- PRELOADER STARTS
            ========================================================================= --> 
        <div id="preloader">
            <div class="preloader">
                <div class="cube1"></div>
                <div class="cube2"></div>
            </div>
        </div>
        <!-- PRELOADER Ends
            ========================================================================= --> 
        <!-- SLIDER STARTS
            ========================================================================= -->
        <section id="slider">
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <ul>
                        <!-- SLIDE NR. 1-->
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                            <!-- MAIN IMAGE --> 
                            <img src="<?php echo base_url(); ?>uploads/parallax_image/bck.jpg"  alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
                            <!-- LAYER NR. 1 -->
							<?php 
								$val = $this->db->get_where('about')->result_array();
								foreach($val as $row){
							?>
                            <div class="tp-caption very_large_text customin customout"
                                data-x="230"
                                data-y="0"
                                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="1000"
                                data-easing="Back.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                style="z-index: 2"><?php echo $row['name'];?></div>
							<?php 
								}
							?>	
                            <!-- LAYER NR. 2 -->
							<?php 
								$val = $this->db->get_where('about')->result_array();
								foreach($val as $row){
							?>
                            <div class="tp-caption very_large_text customin customout"
                                data-x="700"
                                data-y="0"
                                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="1500"
                                data-easing="Back.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                style="z-index: 3"><?php echo $row['sname'];?></div>
							<?php
								}
							?>	
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption medium_text sft customout"
                                data-x="center"
                                data-y="140"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="2000"
                                data-easing="Power4.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                data-captionhidden="off"
                                style="z-index: 4">V-CARD / RESUME / PORTFOLIO </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption large_text skewfromleft customout"
                                data-x="center"
                                data-y="240"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="2500"
                                data-end="5500"
                                data-easing="Power4.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                data-captionhidden="off"
                                style="z-index: 5">
                                <p class="border">JOY IN THE JOURNEY</p>
                            </div>
                            <!-- LAYER NR. 5 -->
							<?php 
								$val = $this->db->get_where('about')->result_array();
								foreach($val as $row){
							?>
                            <div class="tp-caption large_text skewfromright customout"
                                data-x="center"
                                data-y="240"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="6500"                        
                                data-easing="Power4.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                data-captionhidden="off"
                                style="z-index: 6">
                                <p class="border"><?php echo $row['experience'];?> YEARS EXPERIENCE</p>
                            </div>
							<?php
								}
							?>
                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption skewfromleftshort customout slider-buttons"
                                data-x="295"
                                data-y="435"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="3000"
                                data-easing="Back.easeOut"
                                data-endspeed="500"
                                data-endeasing="Power4.easeIn"
                                data-captionhidden="off"
                                style="z-index: 7"><a href="<?php echo base_url(); ?>uploads/resume/rsm.pdf" class="btn2" target="_blank"><i class="fa fa-download"></i> DOWNLOAD RESUME</a> </div>
                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption skewfromleftshort customout slider-buttons"
                                data-x="645"
                                data-y="435"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="3500"
                                data-easing="Back.easeOut"
                                data-endspeed="500"
                                data-endeasing="Power4.easeIn"
                                data-captionhidden="on"
                                style="z-index: 8"><a href="#about" class="btn1"><i class="fa fa-briefcase"></i> ABOUT ME</a> </div>
                        </li>
                        
                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
        </section>
        <!-- /. SLIDER ENDS --> 
        <!-- NAVIGATION STARTS
            ========================================================================= -->
        <section id="navigation">
            <div class="navbar navbar-inverse" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav pull-right">
                            <li class="current"><a href="#slider" data-toggle="collapse" data-target=".navbar-collapse">TOP</a></li>
                            <li><a href="#about" data-toggle="collapse" data-target=".navbar-collapse">ABOUT</a></li>
                            <li><a href="#myskills" data-toggle="collapse" data-target=".navbar-collapse">SKILLS</a></li>
                            <li><a href="#education" data-toggle="collapse" data-target=".navbar-collapse">EDUCATION</a></li>
                            <li><a href="#work-experience" data-toggle="collapse" data-target=".navbar-collapse">WORK EXPERIENCE</a></li>
                            <li><a href="#portfolio" data-toggle="collapse" data-target=".navbar-collapse">PORTFOLIO</a></li>
                            <li><a href="#contact" data-toggle="collapse" data-target=".navbar-collapse">CONTACT</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse --> 
                </div>
            </div>
        </section>
        <!-- /.NAVIGATION --> 
        <!-- ABOUT US STARTS
            ========================================================================= -->
        <section id="about">
            <div class="container">
                <!-- Header Starts -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 section-heading">
                        <div class="heading animated" data-animation="fadeInUp" data-animation-delay="200">ABOUT ME</div>
                        <h1 class="icon-line animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-briefcase"></i></h1>
                        <div class="description animated" data-animation="fadeIn" data-animation-delay="1200"></div>
                    </div>
                </div>
                <!-- Header Ends --> 
                <!-- Row 1 Starts -->
                <div class="row">
                    <!-- Left Column Starts -->
                    <div class="col-md-3 personal-info col-left animated" data-animation="fadeInRight" data-animation-delay="1700">
                        <div class="line1">FULL NAME<br>
                            <span class="line2"><?php echo $row['name'];?> <?php echo $row['sname'];?></span> 
                        </div>
						<div class="line1">COMPANY<br>
                            <span class="line2"><?php echo $row['company'];?></span> 
                        </div>
                        <div class="line1">BIRTHDAY<br>
                            <span class="line2"><?php echo $row['birthday'];?></span> 
                        </div>
                        <div class="line1">BIRTH PLACE<br>
                            <span class="line2"><?php echo $row['birthplace'];?></span> 
                        </div>
                        <div class="line1">HOBBIES<br>
                            <span class="line2"><?php echo $row['hobbies'];?></span> 
                        </div>
                    </div>
                    <!-- Left Column Ends -->
                    <!-- Middle Column Starts -->
                    <div class="col-md-6">
					
						
                        <div class="col-md-8 col-md-offset-2 animated"  data-animation="fadeInUp" data-animation-delay="1000">
                            <div class="pic owl-carousel" id="my-pic-carousel">
									<?php
										$this->db->limit(5);
											$image1 = $this->db->get('about_gallary')->result_array();
												$i=0;
													foreach($image1 as $row1){
														$i++;
                               		?>
                                <div>
                                <img src="<?php echo base_url();?>uploads/about_gallary_image/about_gallary_<?php echo $row1['about_gallary_id'];?>.jpg" class="" alt=""/>
                                
                                </div>
                                <?php 
									}
								?>
                            </div>	
                        </div>
						
						
                    </div>
                    <!-- Middle Column Ends -->
                    <!-- Right Column Starts -->
                    <div class="col-md-3 personal-info col-right animated" data-animation="fadeInLeft" data-animation-delay="1700">
                        <div class="line1">ADDRESS<br>
                            <span class="line2"><?php echo $row['address'];?></span> 
                        </div>
                        <div class="line1">PHONE<br>
                            <span class="line2"><?php echo $row['phone'];?></span> 
                        </div>
                        <div class="line1">EMAIL<br>
                            <span class="line2"><?php echo $row['email'];?></span> 
                        </div>
                        <div class="line1">WEB<br>
                            <span class="line2"><?php echo $row['web'];?></span> 
                        </div>
						<div class="line1">CITY<br>
                            <span class="line2"><?php echo $row['city'];?></span> 
                        </div>
                    </div>
                    <!-- Right Column Ends -->
                </div>
                <!-- Row 1 Ends --> 
                <!-- Row 2 Starts -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 animated" data-animation="fadeInUp" data-animation-delay="2200">
                        <?php
							$about = $this->db->get('about')->result_array();
								foreach($about as $row1){
						?>
						<div class="intro"><?php echo $row1['description'];?></div>
						<?php
							}
						?>
                    </div>
                </div>
                <div>
                    <!-- Row 2 Ends --> 
                    <!-- Button Starts -->
                    <div class="link-btn"><a href="#myskills"><i class="fa fa-rocket"></i> MY SKILLS</a></div>
                    <!-- Button Ends --> 
                </div>
            </div>
        </section>
        <!-- /.ABOUT --> 
        <!-- MY SKILLS STARTS
            ========================================================================= -->
        <section id="myskills" data-speed="10" data-type="background">
            <div class="container">
                <!-- Header Starts -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 section-heading">
                        <div class="heading animated" data-animation="fadeInUp" data-animation-delay="200">MY SKILLS</div>
                        <h1 class="icon-line animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-rocket"></i></h1>
                        <div class="description animated" data-animation="fadeIn" data-animation-delay="1200">Here are the skills of mine in various computer programming languages and technology</div>
                    </div>
                </div>
                <!-- Header Ends -->
                <div class="owl-carousel animated" data-animation="fadeIn" data-animation-delay="3700" id="myskills-carousel">
                    
					<?php
						$skill = $this->db->get('skill')->result_array();
							foreach($skill as $row1){
					?>
					<div class="items">
                        <div class="donutchart" data-percent="<?php echo $row1['percentage'];?>"> </div>
                        <br>
						<?php echo $row1['name'];?>
                    </div>
					<?php
						}
					?>   
                </div>
                <!-- Button Starts -->
                <div class="link-btn animated" data-animation="fadeInUp" data-animation-delay="2200"><a href="#education"><i class="fa fa-book"></i> EDUCATION</a></div>
                <!-- Button Ends --> 
            </div>
        </section>
        <!-- /.MY SKILLS --> 
        <!-- EDUCATION STARTS
            ========================================================================= -->
        <section id="education">
            <div class="container">
                <!-- Header Starts -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 section-heading">
                        <div class="heading animated" data-animation="fadeInUp" data-animation-delay="200">EDUCATION</div>
                        <h1 class="icon-line animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-book"></i></h1>
                        <div class="description animated" data-animation="fadeIn" data-animation-delay="1200">  </div>
                    </div>
                </div>
                <!-- Header Ends --> 
                <!-- Education Timeline Starts -->
                <div class="education-timeline animated" data-animation="fadeInUp" data-animation-delay="1700">
                    <!-- Row 1 Starts -->
					<?php
						$education = $this->db->get('education')->result_array();
							foreach($education as $row1){
					?>
                    <div class="row education">
                        <div class="col-md-6 col-xs-6">
                            <div class="divider"><i class="fa fa-book"></i></div>
                            <div class="col-left">
                                <div class="programe"><?php echo $row1['subject'];?></div>
                                <div class="university"><strong><?php echo $row1['institute'];?></strong><br>
                                    <?php echo $row1['city'];?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <div class="col-right">
                                <div class="duration"><?php echo $row1['starting_year'];?> - <?php echo $row1['ending_year'];?></div>
                                <div class="description"><?php echo $row1['description'];?></div>
                            </div>
                        </div>
                    </div>
					<?php 
						}
					?>
                    <!-- Row 1 Ends --> 
                    
                </div>
                <!-- Education Timeline Ends -->
                <hr>
                <!-- Button Starts -->
                <div class="link-btn"><a href="#process"><i class="fa fa-cogs"></i> Research</a></div>
                <!-- Button Ends --> 
            </div>
        </section>
        <!-- /.EDUCATION --> 
        <!-- PROCESS STARTS
            ========================================================================= -->
        <section id="process" data-speed="10" data-type="background">
            <div class="container">
                <!-- Header Starts -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 section-heading">
                        <div class="heading animated" data-animation="fadeInUp" data-animation-delay="200">Research</div>
                        <h1 class="icon-line animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-cogs"></i></h1>
                        <div class="description animated" data-animation="fadeIn" data-animation-delay="1200"></div>
                    </div>
                </div>
                <!-- Header Ends -->
                <!-- Processes Starts -->
                <div class="education-timeline animated" data-animation="fadeInUp" data-animation-delay="1700">
                    <!-- Row 1 Starts -->
					<?php
						$research = $this->db->get('research')->result_array();
							foreach($research as $row1){
					?>
                    <div class="row education">
                        <div class="col-md-6 col-xs-6">
                            <div class="divider"><i class="fa fa-book"></i></div>
                            <div class="col-left">
                                <div class="programe"><?php echo $row1['name'];?></div>
                                <div class="university"><strong><?php echo $row1['duration'];?></strong><br>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <div class="col-right">
                                <div class="description"><?php echo $row1['description'];?></div>
                            </div>
                        </div>
                    </div>
					<?php 
						}
					?>
                    <!-- Row 1 Ends --> 
                    
                </div>
                <!-- Processes Ends -->
                <!-- Button Starts -->
                <div class="link-btn animated" data-animation="fadeInUp" data-animation-delay="2200"><a href="#work-experience"><i class="fa fa-tags"></i> WORK EXPERIENCE</a></div>
                <!-- Button Ends --> 
            </div>
        </section>
        <!-- /.PROCESS --> 
        <!-- WORK EXPERIENCE STARTS
            ========================================================================= -->
        <section id="work-experience" data-type="background">
            <div class="container">
                <!-- Header Starts -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 section-heading">
                        <div class="heading animated" data-animation="fadeInUp" data-animation-delay="200">WORK EXPERIENCE</div>
                        <h1 class="icon-line animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-tags"></i></h1>
                        <div class="description animated" data-animation="fadeIn" data-animation-delay="1200"></div>
                    </div>
                </div>
                <!-- Header Ends --> 
                <!-- Education Timeline Starts -->
                <div class="work-experience-timeline animated" data-animation="fadeInUp" data-animation-delay="1700">
                    <!-- Row 1 Starts -->
                    <div class="row">
                        <!-- Left Column Starts -->
                        <div class="col-md-6 col-xs-6">
						<?php
							$work_experience = $this->db->get('work_experience')->result_array();
								foreach($work_experience as $row1){
						?>
                          <div class="col-left">
                                <div class="arrow"></div>
                                <div class="company-name"><?php echo $row1['company'];?></div>
                            	<div class="designation"><?php echo $row1['designation'];?></div>
                                <div class="duration"><?php echo $row1['starting_year'];?> - <?php echo $row1['ending_year'];?></div>
                                <div class="description"><?php echo $row1['description'];?></div>
                                <div class="url"><a href="#"><?php echo $row1['web'];?></a></div>                                
                            </div>
						<?php 
							}
						?>	
                        </div>
                        <!-- Left Column Ends --> 
                        
                    </div>
                    <!-- Row 1 Ends --> 
                    <!-- Row 2 Starts -->
                    
                    <!-- Row 2 Ends --> 
                </div>
                <!-- Education Timeline Ends -->
                <hr>
                <!-- Button Starts -->
               <div class="link-btn"><a href="#portfolio"><i class="fa fa-heart"></i> Portfolio</a></div>
                <!-- Button Ends --> 
            </div>
        </section>
        <!-- /.WORK EXPERIENCE --> 
        <!-- SERVICES STARTS
            ========================================================================= -->
        
        <!-- /.SERVICES --> 
        <!-- PORTFOLIO STARTS
            ========================================================================= -->
        <section id="portfolio">
            <div class="container">
                <!-- Header Starts -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 section-heading">
                        <div class="heading animated" data-animation="fadeInUp" data-animation-delay="200">PORTFOLIO</div>
                        <h1 class="icon-line animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-thumbs-up"></i></h1>
                        <div class="description animated" data-animation="fadeIn" data-animation-delay="1200">some projects developed by myself.If anyone interest to know details about projects then please click on the image.</div>
                    </div>
                </div>
                <!-- Header Ends --> 
                <!-- Portfolio Nav Starts -->
                <div class="row animated" data-animation="fadeInUp" data-animation-delay="1700">
                    <div class="col-md-12">
                        <div id="options">
                            <ul id="filters" class="option-set clearfix" data-option-key="filter">
                                <li><a href="#filter" data-option-value="*" class="selected">ALL</a></li>
                                <li><a href="#filter" data-option-value=".web">WEB</a></li>
                                <li><a href="#filter" data-option-value=".java">Java</a></li>
                                <li><a href="#filter" data-option-value=".cs">C#</a></li>
                                <li><a href="#filter" data-option-value=".c">C</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
                <!-- Portfolio Nav Ends --> 
                <!-- AJAX Portfolio Details --> 
                <div class="portfolio-detail"></div>
                <!-- AJAX Portfolio Details --> 
                <!-- Portfolio Thumbs Starts -->
                <div class="container"> 
                <div class="row animated" data-animation="fadeInUp" data-animation-delay="2200" id="container-thumbs">
                    <!-- Portfolio Item 1 Starts -->
					<?php
						$project = $this->db->get('project')->result_array();
							foreach($project as $row1){
					?>
                    <div class="col-xs-12 col-sm-6 col-md-3 pic  items <?php echo $row1['type'];?>" class="">
                        <div class="zoom-gallery magnificPopup.ajax" data-project="">
                        	<a class="custom">
                            	<img src="<?php echo base_url();?>uploads/project_image/project_<?php echo $row1['project_id'];?>.jpg" class="img-responsive" alt="">
                                <span class="zoom"><span>
                                <i class="fa fa-picture-o"></i>
                                </span>
                                </span>
                             </a>
                        </div>
                        <div class="text">
							<strong>To develop this project I've used : </strong></br>
							Language : <?php echo $row1['language'];?></br>
							DataBase : <?php echo $row1['database'];?></br>
							Design : <?php echo $row1['design'];?></br>
							Frameworks : <?php echo $row1['frameworks'];?></br>
							<?php echo $row1['description'];?>
						</div>
                        <div class="heading"><?php echo $row1['name'];?></div>
                    </div>
					<?php
						}
					?>
					
                </div>
                <!-- Portfolio Thumbs Ends --> 
                <!-- Button Starts -->
                <div class="link-btn"><a href="#awards"><i class="fa fa-shield"></i> AWARDS</a></div>
                <!-- Button Ends --> 
            </div>
        </section>
        <!-- /.PORTFOLIO --> 
        <!-- VIDEO STARTS
            ========================================================================= -->
        
        <!-- TESTIMONIALS STARTS
            ========================================================================= -->
        
        <!-- /.TESTIMONIALS --> 
        <!-- AWARDS STARTS
            ========================================================================= -->
        <section id="awards" data-speed="10" data-type="background">
            <div class="container">
                <!-- Header Starts -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 section-heading">
                        <div class="heading animated" data-animation="fadeInUp" data-animation-delay="200">AWARDS</div>
                        <h1 class="icon-line animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-shield"></i></h1>
                        <div class="description animated" data-animation="fadeIn" data-animation-delay="1200">I have got some awards from various field....</div>
                    </div>
                </div>
                <!-- Header Ends -->
                <!-- Awards Carousel Starts --> 
                <div class="owl-carousel animated" data-animation="fadeInUp" data-animation-delay="1700" id="awards-carousel">
                    <!-- Item 1 Starts -->
					<?php
						$award = $this->db->get('award')->result_array();
							foreach($award as $row1){
					?>
                    <div class="items">
                        <div class="icon"><i class="fa fa-shield"></i></div>
                        <div class="title"><?php echo $row1['title'];?></div>
                        <div class="companyname"><?php echo $row1['institute'];?></div>
                        <div class="year"><?php echo $row1['year'];?></div>
                    </div>
					<?php 
						}
					?>
                    <!-- Item 4 Ends -->
                </div>
                <!-- Awards Carousel Ends -->
                <!-- Button Starts -->
                <div class="link-btn animated" data-animation="fadeInUp" data-animation-delay="2200"><a href="#contact"><i class="fa fa-map-marker"></i> CONTACT</a></div>
                <!-- Button Ends --> 
            </div>
        </section>
        <!-- /.AWARDS --> 
        <!-- DOWNLOAD CV STARTS
            ========================================================================= -->
        <section id="download-cv">
            <div class="container">
                <div class="row">
                    <!-- Description Starts -->
                    <div class="col-md-8 animated" data-animation="fadeInLeft" data-animation-delay="200">
                        <div class="description">Here is my CV. you can download my CV from here.</div>
                    </div>
                    <!-- Description Ends -->
                    <!-- Download CV Button Starts -->
                    <div class="col-md-4 animated" data-animation="fadeInRight" data-animation-delay="700">
                        <div class="link-btn-2"><a href="<?php echo base_url(); ?>uploads/resume/rsm.pdf"><i class="fa fa-download"></i> DOWNLOAD CV</a></div>
                    </div>
                    <!-- Download CV Button Ends -->
                </div>
            </div>
        </section>
        <!-- /.DOWNLOAD CV --> 
        <!-- CONTACT STARTS
            ========================================================================= -->
        <section id="contact">
            <div class="container">
                <!-- Header Starts -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 section-heading">
                        <div class="heading animated" data-animation="fadeInUp" data-animation-delay="200">CONTACT</div>
                        <h1 class="icon-line animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-map-marker"></i></h1>
                    </div>
                </div>
                <!-- Header Ends -->
                <!-- Contact Info Starts -->
                <div class="row contact-info animated" data-animation="fadeInUp" data-animation-delay="1200">
                    <?php 
						$val = $this->db->get_where('about')->result_array();
						foreach($val as $row){
					?>
					<div class="col-md-12">
                        <div class="address"><?php echo $row['address'];?>, <br>
                            <?php echo $row['city'];?>
                        </div>
                        <div class="phone"><?php echo $row['phone'];?></div>
                        <div class="email"><?php echo $row['email'];?></div>
                        <div class="web"><?php echo $row['web'];?></div>
                    </div>
					<?php
						}
					?>
                </div>
                <!-- Contact Info Ends -->
                <hr>
                <!-- Contact Form Starts -->
                <div class="contact-form">
                    <!-- Heading Starts -->
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 section-heading">
                            <div class="heading animated" data-animation="fadeInUp" data-animation-delay="200">DROP ME A LINE</div>
                            <h1 class="icon-line animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-envelope"></i></h1>
                        </div>
                    </div>
                    <!-- Heading Ends -->
                    <!-- Form Starts -->
                    <div class="row form animated" data-animation="fadeInUp" data-animation-delay="1200">
                        <div class="col-md-6 col-md-offset-3">
                            <form action='<?php echo base_url()?>index.php/front/mail' method='post' name='ContactForm' id='ContactForm' >
								<div class="input-group"> <span class="input-group-addon">@</span>
									<input type="text" name="name" class="form-control" placeholder="Name *">
								</div>
								<div class="input-group"> <span class="input-group-addon">@</span>
									<input type="text" name="email" class="form-control" placeholder="Email *">
								</div>
								<div class="input-group"> <span class="input-group-addon">@</span>
									<input type="text" name="website" class="form-control" placeholder="Subject">
								</div>
								<div class="input-group"> <span class="input-group-addon">@</span>
									<textarea name="comment" class="form-control" placeholder="Comment *" rows="4"></textarea>
								</div>
								<div class="input-group form-buttons"> <span class="input-group-btn">
									<button class="btn btn-default" type='submit' value='Submit' name='submit' id="submit">SAY HELLO</button>
								</span> 
								</div>
							</form>
                        </div>
                    </div>
                    <!-- Form Ends -->
                </div>
                <!-- Contact Form Ends -->
            </div>
        </section>
        <!-- /.CONTACT --> 
        <!-- SOCIAL MEDIA STARTS
            ========================================================================= -->
        <section id="social-media">
            <div class="container">
                <!-- Header Starts -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 section-heading">
                        <div class="heading animated" data-animation="fadeInUp" data-animation-delay="200">GET IN TOUCH</div>
                        <h1 class="icon-line animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-comments"></i></h1>
                        <div class="description animated" data-animation="fadeIn" data-animation-delay="1200">Anyone can contact with me by social networks given below.</div>
                    </div>
                </div>
                <!-- Header Ends -->
                <!-- Social Icons Starts -->
                <div class="row animated" data-animation="fadeInUp" data-animation-delay="1700">
                    <?php 
						$val = $this->db->get_where('network_settings')->result_array();
						foreach($val as $row){
					?>
					<div class="col-md-12 social-icons">
                        <ul>
                            <li><a href="<?php echo $row['facebook'];?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?php echo $row['linkedin'];?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="<?php echo $row['google_plus'];?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="<?php echo $row['twitter'];?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            
                        </ul>
                    </div>
					<?php 
						}
					?>
                </div>
                <!-- Social Icons Ends -->
            </div>
        </section>
        <!-- /.SOCIAL MEDIA --> 
        <!-- FOOTER STARTS
            ========================================================================= -->
        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <!-- Copyright Starts -->
						
                        <div class="desc animated" data-animation="fadeInUp" data-animation-delay="200"><i class="fa fa-heart"></i><br>
                            � 2014. Md. Rabiul Khan.<br>
                            Mahanagar project, Rampura, Dhaka.
                        </div>
                        <!-- Copyright Ends -->
						<div class="line"></div>
                        <!-- ToTop Starts -->
                        <a href="#" class="scrollup animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-angle-double-up"></i></a> 
                        <!-- ToTop Ends -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.FOOTER --> 
        <!-- STYLE SWITCHER PANEL STARTS
            ========================================================================= -->
        <div id="switch">
            <div class="content-switcher">
                <h4>STYLE SWITCHER</h4>
                <p>COLOR SKINS</p>
                <ul class="header">
                    <li><a href="<?php echo base_url();?>template/front/assets/css" onClick="setActiveStyleSheet('default'); return false;" class="button color switch" style="background-color:#e4545b"></a></li>
                    <li><a href="<?php echo base_url();?>template/front/assets/css" onClick="setActiveStyleSheet('grey'); return false;" class="button color switch" style="background-color:#7f7f7f"></a></li>
                    <li><a href="<?php echo base_url();?>template/front/assets/css" onClick="setActiveStyleSheet('blue'); return false;" class="button color switch" style="background-color:#3498db"></a></li>
                    <li><a href="<?php echo base_url();?>template/front/assets/css" onClick="setActiveStyleSheet('orange'); return false;" class="button color switch" style="background-color:#f86923"></a></li>
                    <li><a href="<?php echo base_url();?>template/front/assets/css" onClick="setActiveStyleSheet('green'); return false;" class="button color switch" style="background-color:#9bc638"></a></li>
                    <li><a href="<?php echo base_url();?>template/front/assets/css" onClick="setActiveStyleSheet('yellow'); return false;" class="button color switch" style="background-color:#ffd43a"></a></li>
                    <li><a href="<?php echo base_url();?>template/front/assets/css" onClick="setActiveStyleSheet('red'); return false;" class="button color switch" style="background-color:#dc2a0b"></a></li>
                    <li><a href="<?php echo base_url();?>template/front/assets/css" onClick="setActiveStyleSheet('greyish-blue'); return false;" class="button color switch" style="background-color:#51758f"></a></li>
                    <li><a href="<?php echo base_url();?>template/front/assets/css" onClick="setActiveStyleSheet('purple'); return false;" class="button color switch" style="background-color:#9b59b6"></a></li>
                    <li><a href="<?php echo base_url();?>template/front/assets/css" onClick="setActiveStyleSheet('mehroon'); return false;" class="button color switch" style="background-color:#9f0303"></a></li>
                </ul>
                
                <div class="clear"></div>
                <div id="hide"><i class="fa fa-times"></i></div>
            </div>
        </div>
        <div id="show" style="display: block;">
            <div id="setting"><i class="fa fa-cog"></i></div>
        </div>
        <!-- /.STYLE SWITCHER PANEL -->
        <!-- JAVASCRIPTS STARTS
            ========================================================================= --> 
        <!-- Bootstrap --> 
        <script src="<?php echo base_url();?>template/front/assets/js/bootstrap.min.js"></script> 
        <!-- Style Switcher --> 
        <script src="<?php echo base_url();?>template/front/assets/js/styleswitcher/styleswitcher.js" type="text/javascript"></script> 
        <!-- Animation --> 
        <script type="text/javascript" src="<?php echo base_url();?>template/front/assets/js/animation/jquery.appear.js"></script> 
        <!-- AJAX Contact Form --> 
        <script type="text/javascript" src="<?php echo base_url();?>template/front/assets/js/contact/contact-form.js"></script> 
        <!-- Lightbox --> 
        <script src="<?php echo base_url();?>template/front/assets/lightbox/ekko-lightbox.js"></script> 
        <!-- Isotope --> 
        <script src="<?php echo base_url();?>template/front/assets/js/isotope/jquery.isotope.min.js"></script> 
        <script src="<?php echo base_url();?>template/front/assets/js/isotope/custom-isotope.js"></script> 
        <!-- Slider Revolution 4.x Scripts --> 
        <script type="text/javascript" src="<?php echo base_url();?>template/front/assets/rs-plugin/js/jquery.themepunch.plugins.min.js"></script> 
        <script type="text/javascript" src="<?php echo base_url();?>template/front/assets/rs-plugin/js/jquery.themepunch.revolution.js"></script> 
		
		
        <script>
            var revapi;
            		jQuery(document).ready(function() {
            
            			   revapi = jQuery('.tp-banner').revolution(
            				{
            					delay:15000,
            					startwidth:1170,
            					startheight:500,
            					hideThumbs:10,
            					fullWidth:"off",
            					fullScreen:"on",
            					fullScreenOffsetContainer: "",
            					hideCaptionAtLimit:400            					
            				});
            		});	//ready	
        </script> 
        <!-- Owl Carousel --> 
        <script src="<?php echo base_url();?>template/front/assets/owl-carousel/owl-carousel/owl.carousel.js"></script> 
        <!-- Custom --> 
        <script src="<?php echo base_url();?>template/front/assets/js/custom.js"></script> 
        <!-- Parallex --> 
        <script src="<?php echo base_url();?>template/front/assets/js/parallex/script.js"></script> 
        <!-- ScrollTo --> 
        <script src="<?php echo base_url();?>template/front/assets/js/nav/jquery.scrollTo.js"></script> 
        <script src="<?php echo base_url();?>template/front/assets/js/nav/jquery.nav.js"></script> 
        <!-- Sticky --> 
        <script type="text/javascript" src="<?php echo base_url();?>template/front/assets/js/sticky/jquery.sticky.js"></script> 
        <!-- Donut Chart --> 
        <script type="text/javascript" src="<?php echo base_url();?>template/front/assets/js/progress-bars/jquery.donutchart.js"></script> 
        <script>
            $(".donutchart").donutchart("animate");
            $(".custom").click(function(e) {
				e.preventDefault();
				var titleHeight; // Đặt biến lưu giá trị chiều cao của title
				var here = $(this);
				$.boxes({
					mode: 'custom',
					title: 'Description',
					message: here.closest('.pic').find('.text').html(),
					okBtn: 'OK',
					cancelBtn: 'Cancel',
					inputTxt: 'Zzbaivong',

					width: 550,
					padding: [30, 40],
					border: [5, 5],

					autoClose: 5000, // Tự đóng sau 5000 ms
					noClose: false, // Không đóng boxes khi click vào nút Ok hoặc Cancel
					clickOut: false, // Đóng khi click ra ngoài nền
					messString: false, // Cho phép sử dụng HTML trong message

					okBtnShow: false, // Hiện nút Ok
					cancelBtnShow: true, // Hiện nút Cancel
					closeBtnShow: true, // Hiện nút Close
					inputTxtShow: false, // Hiện Input nhập liệu

					ok: function(helper) {
						var $input = helper.el.input;
						alert($input.val());
						$input.val('');
					},
					cancel: function(helper) {
						var $title = helper.el.title;
						var $input = helper.el.input;
						$title.text('...');
						helper.center();
						$input.val('').focus();
					},
					input: function(helper) {
						var $input = $(this); // Input của boxes hiện tại
						var $title = helper.el.title; // Title của boxes hiện tại
						titleHeight = $title.height(); // Lưu giá trị chiều cao của title
						$title.text($input.val()); // Lấy giá trị input đưa lên title
						if ($title.height() != titleHeight) { // Kiểm tra lại chiều cao của title, nếu khác giá trị cũ thì
							titleHeight = $title.height(); // Lưu lại giá trị chiều cao title mới
							helper.center(); // Chạy hàm căn giữa boxes
						}
					}
				});
			});
			
        </script> 
        <!-- Retina --> 
        <script type="text/javascript" src="<?php echo base_url();?>template/front/assets/js/retina/retina.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>template/front/assets/js/jquery.fitvids.js"></script>
		
		
		 
    </body>
</html>