<?php 
	//use Roots\Sage\Assets;
 ?>
 <div class="con-header">
 	<div class="mebanner">
 		<div class="dayanlogo">
 			<img src="<?= wp_get_attachment_thumb_url(14)?>" alt="Dayanara" class="img-responsive pull-left">
 			<span class="pull-left logo-text">Dayanara<br>Caña</span>
 		</div> 		
 		<div class="banner-title">
 			<!-- <img src="<?= the_post_thumbnail_url()?>" class="img-responsive" style="margin: 0 auto;"> -->
 			<div class="web-intro">
 				<div class="introduction">Web Developer</div>
 				<div class="introskills">
 					<span>Wordpress <span class="asterisk">*</span> Html <span class="asterisk">*</span> Css <span class="asterisk">*</span> Jquery <span class="asterisk">*</span> Php</span>
 				</div>
 			</div>
 		</div>
 	</div><!-- end of mebanner class  -->
 	
 </div>
 <div class="body-content">
	<div class="hello">
		<div class="hello-img-title">
			<img src="<?= wp_get_attachment_thumb_url(17) ?>" alt="Hello everyone">
			<span>Hello</span>
			<p>
				I am a web developer. I have a strong experience with HTML, 
				CSS, Jquery and Php. I have developed and designed websites 
				for business advertising, Information System, Online Sales and Inventory System , and Content Management System. In 
				Wordpress development, I provide Sage theme and Custom 
				Functionality.
			</p>
		</div>
	</div>
	<div class="myexpertise">
		<span>My Expertise</span>
		<div class="row">
			<div class="col-md-7 skillsdesc">
				<div class="expertlogo"><img src="<?= wp_get_attachment_thumb_url(18) ?>" alt="My Expertise" class="img-responsive"></div>
				<div class="expertdesc"><p>*&nbsp;&nbsp;&nbsp;&nbsp;Good experience in Front End Development and Design.<br>
					*&nbsp;&nbsp;&nbsp;&nbsp;Good in handling the group.<br>
					*&nbsp;&nbsp;&nbsp;&nbsp;Works well both independently and in a team environment.<br>
					*&nbsp;&nbsp;&nbsp;&nbsp;Good in cooperating in making team/individual projects.<br>
					*&nbsp;&nbsp;&nbsp;&nbsp;Great in handling use cases.<br>
					*&nbsp;&nbsp;&nbsp;&nbsp;Great knowledge of responsive web and mobile applications.<br>
					*&nbsp;&nbsp;&nbsp;&nbsp;Knowledge in AJAX, Photoshop, Php, Laravel php framework and <br><span style="padding-left:30px;display: inline-block;"></span> SQL query.<br>
					*&nbsp;&nbsp;&nbsp;&nbsp;Strong experience with HTML, Jquery and CSS.
					</p></div>
			</div>
			<div class="col-md-5 skillsimage">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					<?php  
						$php =  wp_get_attachment_image_src(22, 'full');
						$wp =  wp_get_attachment_image_src(23, 'full');
						$html =  wp_get_attachment_image_src(20, 'full');
						$jquery =  wp_get_attachment_image_src(21, 'full');
						$css =  wp_get_attachment_image_src(19, 'full');
					
?>
						<div class="item active">
					      <img src="<?= $php[0] ?>" alt="PHP programming language" width="<?php echo $php[1]; ?>" height="<?php echo $php[2]; ?>" >
					    </div>
					    <div class="item">
					      <img src="<?= $wp[0] ?>" alt="PHP programming language" width="<?php echo $wp[1]; ?>" height="<?php echo $wp[2]; ?>" >
					    </div>
					    <div class="item">
					      <img src="<?= $html[0] ?>" alt="PHP programming language" width="<?php echo $html[1]; ?>" height="<?php echo $html[2]; ?>" >
					    </div>
					    <div class="item">
					      <img src="<?= $jquery[0] ?>" alt="PHP programming language" width="<?php echo $jquery[1]; ?>" height="<?php echo $jquery[2]; ?>" >
					    </div>
					    <div class="item">
					      <img src="<?= $css[0] ?>" alt="PHP programming language" width="<?php echo $css[1]; ?>" height="<?php echo $css[2]; ?>" >
					    </div>	
					
					    
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
				</div>
			</div>
		</div>
	</div>
	<div class="onthejobtraining">
		<div class="titlejob"><span>On The Job Training</span></div>
		<div class="row">
			<div class="col-md-6 con-convergys">
				<div class="convergys">
					<?php $Convergys = wp_get_attachment_image_src(28, 'full'); ?>
					<img src="<?= $Convergys[0] ?>" width="<?php echo $Convergys[1]; ?>" height="<?php echo $Convergys[2]; ?> alt="Convergys" class="img-responsive">
				</div>
			</div>
			<div class="col-md-6 con-convergys-expe">
				<div class="experiencecvg1">
					Convergys, 15th Floor.  Cebu 5, I.T Park Lahug, <br>
					Cebu City <br>
					Customer Service Associates
				</div>
				<div class="experiencecvg2">
					*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Was being part of the top agents of the 
					first <span style="margin-left:45px;"></span>(1) week of work. <br>
					*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Help and provide best solution to the 
					<span style="margin-left:45px;"></span>customers concern. <br>
					*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Completed Phase 1 and Phase 2 Training.
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 con-voxpori-expe">
				<div class="experiencevoxpori1">
					Voxpori Inc, Rm 313 N & N Arcade A. C. Cortes Ave.<br>
					Maguikay, Mandaue City<br>
					Web Developer<br>

				</div>
				<div class="experiencevoxpori2">
					*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Used Wordpress in developing Content Management <span style="margin-left:45px"></span>System.<br>
					*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Finished two (2) websites for the whole OJT period.<br>
					*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Used computer language like PHP in developing websites.<br>
					*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Used HTML, CSS, Php, Photoshop and JQuery to develop <span style="margin-left:45px"></span> projects.<br>
					*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Worked with group projects website.<br>
				</div>
			</div>
			<div class="col-md-6 con-voxpori">
				<div class="voxpori">
					<?php $voxpori = wp_get_attachment_image_src(29, 'full'); ?>
					<img src="<?= $voxpori[0] ?>" width="<?php echo $voxpori[1]; ?>" height="<?php echo $voxpori[2]; ?> alt="Voxpori" class="img-responsive">
				</div>
			</div>
		</div>
	</div><!-- end of onthejobtraining  -->
	<div class="myworks">
		<div class="titlework"><span>My Works</span></div>
		<div class="ourworks-con">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="..." alt="...">
				      <div class="carousel-caption">
				        ...
				      </div>
				    </div>
				    <div class="item">
				      <img src="..." alt="...">
				      <div class="carousel-caption">
				        ...
				      </div>
				    </div>
				    ...
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
			</div>
		</div>
	</div>
</div>