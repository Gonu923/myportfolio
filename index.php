
<!DOCTYPE html>
<html>
<head>
	<title>Ashton - One Page Portfolio Template</title>
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body> 
	
	<header class="header creative position-relative bg-img height-100-vh valign" data-scroll-index="0" data-overlay-dark="6" data-background="Images/bg1.jpg" data-stellar-background-ratio="0.5" style="background-image: url(&quot;Images/bg1.jpg&quot;); background-position: 0px 57px;"> 
		<nav class="navbar navbar-expand-lg border-none nav-transparent nav-scroll">
			<div class="container padding-15px-lr md-padding-15px-lr sm-padding-15px-all"> 
				<a class="logo active" href="javascript:void(0);" data-scroll-nav="0"> 
					<img src="img/logo-light.png"> 
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="fas fa-bars"></i></span> 
				</button>
				<div class="collapse navbar-collapse" id="navbarContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"> 
							<a class="nav-link active" href="javascript:void(0);" data-scroll-nav="0">Home</a>
						</li>
						<li class="nav-item"> 
							<a class="nav-link" href="javascript:void(0);" data-scroll-nav="1">About</a>
						</li>
						<li class="nav-item"> 
							<a class="nav-link" href="javascript:void(0);" data-scroll-nav="2">Services</a>
						</li>
						<li class="nav-item"> 
							<a class="nav-link" href="javascript:void(0);" data-scroll-nav="3">Portfolio</a>
						</li>
						<li class="nav-item"> 
							<a class="nav-link" href="javascript:void(0);" data-scroll-nav="4">Contact</a>
						</li>
					</ul>
				</div>
			</div> 
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-12 text-center caption">
					<h1 class="banner-headline clip no-margin"> 
						<span class="blc">I'm </span> 
						<?php 
						   $con=mysqli_connect("localhost","root","","cc");
						   if (mysqli_connect_error()) {
						   	#error message
						   	echo "Failed to connect database ".mysqli_connect_error();
						   }
						?>
						<?php 
						    $query = "SELECT *from abouthome ORDER BY id DESC LIMIT 1";
						    $read = mysqli_query($con,$query);
						    if (mysqli_num_rows($read)>0) {
						    	while ($row=mysqli_fetch_assoc($read)) {

						?>
						<span class="banner-words-wrapper" style="width: 380px;"> 
							<b class="font-weight-600 is-hidden"><?php echo $row['name']; ?></b> 
							<b class="font-weight-600 is-hidden"><?php echo $row['t1']; ?></b> 
							<b class="font-weight-600 is-visible"><?php echo $row['t2']; ?></b> 
						</span>
					<?php } } ?>
					</h1>
					<p class="margin-30px-bottom sm-margin-20px-bottom xs-display-none">I provide best for our client and respect their business design idea.</p>
					<div class="social-links xs-margin-20px-top"> 
						<a href="https://www.facebook.com/">
							<img src="Images/facebook.png" class="fab fa-facebook-f text-light-gray">
								
							</img>
						</a> 
						<a href="javascript:void(0);">
							<img src="Images/t.png" class="fab fa-twitter text-light-gray"></img>
						</a> 
						<a href="javascript:void(0);">
							<img src="Images/g.png" class="fab fa-google-plus-g text-light-gray"></img>
						</a> 
						<a href="javascript:void(0);">
							<img src="Images/h.png" class="fab fa-dribbble text-light-gray"></img>
						</a> 
						<a href="javascript:void(0);">
							<img src="Images/y.png" class="fab fa-youtube text-light-gray"></img>
						</a> 
						<a href="javascript:void(0);">
							<img src="Images/i.png" class="fab fa-linkedin-in text-light-gray"></img>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="svg">
			<svg fill="#fff" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none"> 
				<path d="M0 30 L50 90 L100 30 V100 H0"></path> 
			</svg>
		</div>
	</header> 
	<section data-scroll-index="1" class="padding-100px-top padding-130px-bottom xs-padding-80px-top xs-padding-100px-bottom">
		<div class="container">
			<div class="row">
				<div class="col-12 center-col margin-70px-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center">
					<h2 class="font-size34 md-font-size30 sm-font-size26 xs-font-size24 font-weight-700 section-title style2">About Me</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-sm-12 sm-margin-30px-bottom">
					<div class="about-box"><div class="porfile-photo"> 
						<img src="Images/about-me.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="col-md-7 col-sm-12 padding-70px-left md-padding-50px-left xs-padding-15px-left">
				

				<div class="padding-20px-left sm-no-padding">
					<?php 
				   $con=mysqli_connect("localhost","root","","cc");
				   if (mysqli_connect_error()) {
				   	#error message
				   	echo "Failed to connect database ".mysqli_connect_error();
				   }
				?>
				<?php 
				    $query = "SELECT *from meabout ORDER BY id DESC LIMIT 1";
				    $read = mysqli_query($con,$query);
				    if (mysqli_num_rows($read)>0) {
				    	while ($row=mysqli_fetch_assoc($read)) {

				?>
					<h4 class="margin-5px-bottom alt-font font-size26 md-font-size24 xs-font-size20"><?php echo $row['im']; ?></h4> 
					<span class="margin-20px-bottom display-block"><?php echo $row['slogan']; ?></span>
					<p class="font-size15 xs-font-size14"><?php echo $row['text1']; ?></p>
					<?php } } ?>
					<div class="skills width-100 margin-40px-bottom sm-margin-30px-bottom">

							<?php 
						   $con=mysqli_connect("localhost","root","","cc");
						   if (mysqli_connect_error()) {
						   	#error message
						   	echo "Failed to connect database ".mysqli_connect_error();
						   }
						?>
						<?php 
						    $query = "SELECT *from myskill ORDER BY id DESC LIMIT 1";
						    $read = mysqli_query($con,$query);
						    if (mysqli_num_rows($read)>0) {
						    	while ($row=mysqli_fetch_assoc($read)) {

						    ?>
						<div class="prog-item"><p><?php echo $row['txt1']; ?></p>
							<div class="skills-progress">
								<span data-value="95%" style="width: 95%;"></span>
							</div>
						</div>
						<div class="prog-item">
							<p><?php echo $row['txt2']; ?></p>
							<div class="skills-progress">
								<span data-value="85%" style="width: 85%;">
									
								</span>
							</div>
						</div>
						<div class="prog-item">
							<p><?php echo $row['txt3']; ?></p>
							<div class="skills-progress">
								<span data-value="90%" style="width: 90%;">
									
								</span>
							</div>
						</div>
						<div class="prog-item">
							<p><?php echo $row['txt4']; ?></p>
							<div class="skills-progress">
								<span data-value="80%" style="width: 80%;">
									
								</span>
							</div>
						</div>
						<?php } } ?>
					</div> 
					
					<a class="btn white" href="javascript:void(0);"> 
						<i class="fas fa-arrow-alt-circle-down font-size16"></i> 
						<span class="alt-font margin-5px-left">Download My CV</span> 
					</a>
				</div>
			
			</div>
		</div>
	</div>
	<div class="svg gray"> 
		<svg fill="#f7f7f7" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none"> 
			<path d="M0 30 L50 90 L100 30 V100 H0"></path> 
		</svg>
	</div>
	</section> 
	<section class="services bg-light-gray padding-100px-top padding-130px-bottom xs-padding-80px-top xs-padding-100px-bottom" data-scroll-index="2">
		<div class="container">
			<div class="row">
				<div class="col-12 center-col margin-70px-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center">
					<h3 class="font-weight-700 font-size32 md-font-size27 sm-font-size24 xs-font-size20 section-title style2">My Services</h3>
				</div>
			</div>
		

			<div class="row" method="post" action="index.php">
				
					<div class="col-lg-4 col-md-6">
						<div class="text-center padding-40px-bottom sm-padding-30px-bottom xs-padding-20px-bottom">
							<div class="display-inline-block margin-20px-bottom xs-margin-15px-bottom">
								<img src="Images/settings.png" class="icon icon-gears text-extra-dark-gray font-size36"></img>
								<?php 
				    include "config.php";
				    include "database.php";
				?>
				<?php
				    $db = new Database();
				    $query = "SELECT *from services WHERE id=21";
				    $read = $db->select($query);
				?>
				               
				   <?php if($read){ ?>
				    <?php while($row = $read->fetch_assoc()){ ?> <!-- reading data in associative manner -->
				        
				        <?php 

				            $title=$row['title'];
				            $description=$row['description'];
				            $id=$row['id'];
				            //echo "title ".$title." "." Description".$description;
				         ?>
				         <div class="alt-font text-extra-dark-gray margin-10px-bottom font-size18 xs-font-size16">
				         	<?php echo $title; ?>
						</div>
								<p class="width-85 md-width-90 xs-width-100 center-col no-margin-bottom">
								<?php echo $description; ?>
								</p>
				    <?php } ?>
				    <?php } else{?>
				    <p>Data is not available.</p>
				    <?php } ?>
							</div>
						</div>
					</div>
				
				
				<div class="col-lg-4 col-md-6">
					<div class="text-center padding-40px-bottom sm-padding-30px-bottom xs-padding-20px-bottom">
						<div class="display-inline-block margin-20px-bottom xs-margin-15px-bottom">
							<img src="Images/si.png" class="icon icon-mobile text-extra-dark-gray font-size36"></img>
							<?php 
				    $query = "SELECT *from services WHERE id=40";
				    $read = $db->select($query);
				?>
				   <?php if($read){ ?>
				    <?php while($row = $read->fetch_assoc()){ ?> <!-- reading data in associative manner -->
				        
				        <?php 

				            $title=$row['title'];
				            $description=$row['description'];
				            $id=$row['id'];
				            //echo "title ".$title." "." Description".$description;
				         ?>
				         <div class="alt-font text-extra-dark-gray margin-10px-bottom font-size18 xs-font-size16">
				         	<?php echo $title; ?>
						</div>
								<p class="width-85 md-width-90 xs-width-100 center-col no-margin-bottom">
								<?php echo $description; ?>
								</p>
				    <?php } ?>
				    <?php } else{?>
				    <p>Data is not available.</p>
				    <?php } ?>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="text-center sm-padding-30px-bottom xs-padding-20px-bottom">
						<div class="display-inline-block margin-20px-bottom xs-margin-15px-bottom">
							<img src="Images/4i.png" class="icon icon-layers text-extra-dark-gray font-size36"></img>
							<?php 
				    $query = "SELECT *from services WHERE id=23";
				    $read = $db->select($query);
				?>
				                        
				               
				   <?php if($read){ ?>
				    <?php while($row = $read->fetch_assoc()){ ?> <!-- reading data in associative manner -->
				        
				        <?php 

				            $title=$row['title'];
				            $description=$row['description'];
				            $id=$row['id'];
				            //echo "title ".$title." "." Description".$description;
				         ?>
				         <div class="alt-font text-extra-dark-gray margin-10px-bottom font-size18 xs-font-size16">
				         	<?php echo $title; ?>
						</div>
								<p class="width-85 md-width-90 xs-width-100 center-col no-margin-bottom">
								<?php echo $description; ?>
								</p>
				    <?php } ?>
				    <?php } else{?>
				    <p>Data is not available.</p>
				    <?php } ?>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="text-center xs-padding-20px-bottom">
						<div class="display-inline-block margin-20px-bottom xs-margin-15px-bottom">
							<img src="Images/5i.png" class="icon icon-presentation text-extra-dark-gray font-size36"></img>
							<?php 
				    $query = "SELECT *from services WHERE id=24";
				    $read = $db->select($query);
				?>
				               
				   <?php if($read){ ?>
				    <?php while($row = $read->fetch_assoc()){ ?> <!-- reading data in associative manner -->
				        
				        <?php 

				            $title=$row['title'];
				            $description=$row['description'];
				            $id=$row['id'];
				            //echo "title ".$title." "." Description".$description;
				         ?>
				         <div class="alt-font text-extra-dark-gray margin-10px-bottom font-size18 xs-font-size16">
				         	<?php echo $title; ?>
						</div>
								<p class="width-85 md-width-90 xs-width-100 center-col no-margin-bottom">
								<?php echo $description; ?>
								</p>
				    <?php } ?>
				    <?php } else{?>
				    <p>Data is not available.</p>
				    <?php } ?>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="text-center">
						<div class="display-inline-block margin-20px-bottom xs-margin-15px-bottom">
							<img src="Images/6is.png" class="icon icon-genius text-extra-dark-gray font-size36">
							</img>
							<?php 
				    $query = "SELECT *from services WHERE id=25";
				    $read = $db->select($query);
				?>
				               
				   <?php if($read){ ?>
				    <?php while($row = $read->fetch_assoc()){ ?> <!-- reading data in associative manner -->
				        
				        <?php 

				            $title=$row['title'];
				            $description=$row['description'];
				            $id=$row['id'];
				            //echo "title ".$title." "." Description".$description;
				         ?>
				         <div class="alt-font text-extra-dark-gray margin-10px-bottom font-size18 xs-font-size16">
				         	<?php echo $title; ?>
						</div>
								<p class="width-85 md-width-90 xs-width-100 center-col no-margin-bottom">
								<?php echo $description; ?>
								</p>
				    <?php } ?>
				    <?php } else{?>
				    <p>Data is not available.</p>
				    <?php } ?>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="text-center">
						<div class="display-inline-block margin-20px-bottom xs-margin-15px-bottom">
							<img src="Images/5i.png" class="icon icon-genius text-extra-dark-gray font-size36">
							</img>
							<?php 
				    $query = "SELECT *from services WHERE id=26";
				    $read = $db->select($query);
				?>
				   <?php if($read){ ?>
				    <?php while($row = $read->fetch_assoc()){ ?> <!-- reading data in associative manner -->
				        
				        <?php 

				            $title=$row['title'];
				            $description=$row['description'];
				            $id=$row['id'];
				            //echo "title ".$title." "." Description".$description;
				         ?>
				         <div class="alt-font text-extra-dark-gray margin-10px-bottom font-size18 xs-font-size16">
				         	<?php echo $title; ?>
						</div>
								<p class="width-85 md-width-90 xs-width-100 center-col no-margin-bottom">
								<?php echo $description; ?>
								</p>
								
				    <?php } ?>
				    <?php } else{?>
				    <p>Data is not available.</p>
				    <?php } ?>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="svg"> 
			<svg fill="#fff" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none"> 
				<path d="M0 30 L50 90 L100 30 V100 H0"></path> 
			</svg>
		</div>
	</section> 
	<section class="portfolio padding-100px-top padding-130px-bottom xs-padding-80px-top xs-padding-100px-bottom" data-scroll-index="3" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-12 center-col margin-70px-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center">
					<h3 class="font-weight-700 font-size32 md-font-size27 sm-font-size24 xs-font-size20 section-title style2">My Portfolio</h3>
				</div>
			</div>
			<div class="row">
				<div class="filtering col-sm-12 text-center"> 
					<span data-filter="*" class="active">All</span> 
					<span data-filter=".develop">Develop</span> 
					<span data-filter=".design">Design</span> 
					<span data-filter=".graphic">Graphic</span>
				</div>
				<div class="clearfix">
					
				</div>
				<div class="gallery text-center width-100" style="position: relative; height: 760px;">
					<div class="col-md-4 items graphic develop" style="position: absolute; left: 0px; top: 0px;">
						<div class="item-img"> 
							<img src="Images/1.jpg" alt="image">
							<div class="item-img-overlay valign">
								<div class="overlay-info width-100 vertical-center"> 
									<a href="img/portfolio/1.jpg" class="popimg"> 
										<i class="fa fa-search-plus"></i> 
									</a>
									<h6>Show your time</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 items design" style="position: absolute; left: 380px; top: 0px;">
						<div class="item-img"> 
							<img src="Images/2.jpg" alt="image">
						
							<div class="item-img-overlay valign">
								<div class="overlay-info width-100 vertical-center"> 
									<a href="img/portfolio/2.jpg" class="popimg"> 
										<i class="fa fa-search-plus"></i> 
									</a>
									<h6>Creative design</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 items develop graphic" style="position: absolute; left: 760px; top: 0px;">
						<div class="item-img"> 
							<img src="Images/3.jpg" alt="image">
							<div class="item-img-overlay valign">
								<div class="overlay-info width-100 vertical-center"> 
									<a href="img/portfolio/3.jpg" class="popimg"> 
										<i class="fa fa-search-plus"></i> 
									</a>
									<h6>Tag Design Mockup</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 items design" style="position: absolute; left: 0px; top: 380px;">
						<div class="item-img"> 
							<img src="Images/4.jpg" alt="image">
							<div class="item-img-overlay valign">
								<div class="overlay-info width-100 vertical-center"> 
									<a href="img/portfolio/4.jpg" class="popimg"> 
										<i class="fa fa-search-plus"></i> 
									</a>
									<h6>Fries Mockup</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 items design" style="position: absolute; left: 380px; top: 380px;">
						<div class="item-img"> 
							<img src="Images/5.jpg" alt="image">
							<div class="item-img-overlay valign">
								<div class="overlay-info width-100 vertical-center"> 
									<a href="img/portfolio/5.jpg" class="popimg"> 
										<i class="fa fa-search-plus"></i> 
									</a>
									<h6>Creative Design</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 items develop graphic" style="position: absolute; left: 760px; top: 380px;">
						<div class="item-img"> 
							<img src="Images/6.jpg" alt="image">
							<div class="item-img-overlay valign">
								<div class="overlay-info width-100 vertical-center"> 
									<a href="img/portfolio/6.jpg" class="popimg"> 
										<i class="fa fa-search-plus"></i> 
									</a>
									<h6>Apple product design</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="clear-fix">
						
					</div>
				</div>
			</div>
		</div>
		<div class="svg gray"> 
			<svg fill="#fff" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none"> 
				<path d="M0 30 L50 90 L100 30 V100 H0"></path> 
			</svg>
		</div>
	</section>
	<section class="contact bg-light-gray no-padding-bottom padding-130px-top xs-padding-80px-top" data-scroll-index="4">
		<div class="container padding-130px-bottom xs-padding-80px-bottom">
			<div class="row">
				<div class="col-12 center-col margin-70px-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center">
					<h3 class="font-weight-700 font-size32 md-font-size27 sm-font-size24 xs-font-size20 section-title style2">Contact</h3>
				</div>
			</div>
			<div class="row">
			
<?php
	$name="";
	$email="";
	$phone="";
	$subject="";
	$message="";
	$id=0;
    $db = mysqli_connect('localhost','root','','cc');
    if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
    //data validation
    if(isset($_POST['save'])){ // if submit is found
		//$name = $_POST['name'];
        $name = $_POST['name'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $subject= $_POST['subject'];
        $message= $_POST['message'];
        $query = "INSERT INTO contact(name, email, phone, subject, message) VALUES('$name', '$email', '$phone','$subject','$message')";
        mysqli_query($db,$query); // database methods instance creation and access
        
        
    }
?>
<?php
  if(isset($error)){
      echo "<span style='color: red'>".$error."</span>";
  }  
?>

				<div class="col-lg-12">
					<div class="no-margin-lr" id="success-contact-form">
						
					</div>
					<form id="contactForm" method="post" class="contact-form" action="index.php">
						<div class="row">
							<div class="col-md-6"> 
								<input class="medium-input" placeholder="Name *" required="required" id="name" name="name" type="text">
							</div>
							<div class="col-md-6"> 
								<input class="medium-input" placeholder="E-mail *" required="required" id="email" name="email" type="email">
							</div>
							<div class="col-md-6"> 
								<input class="medium-input" placeholder="Phone no with country code" id="phone" name="phone" type="tel">
							</div>
							<div class="col-md-6"> 
								<input class="medium-input" placeholder="Subject *" required="required" id="subject" name="subject" type="text">
							</div>
							<div class="col-md-12">
								<textarea class="big-textarea" rows="6" placeholder="Type your message *" required="required" id="message" name="message">
									
								</textarea>
							</div>
							<div class="col-md-12 text-center"> 
								<button class="btn white" name="save" type="submit">Send Message</button>
							</div>
							
						</div>
						
					</form>
				</div>
			</div>
		</div>
		<div class="bg-white padding-30px-tb border-top border-color-medium-gray">
				<?php 
				   $con=mysqli_connect("localhost","root","","cc");
				   if (mysqli_connect_error()) {
				   	#error message
				   	echo "Failed to connect database ".mysqli_connect_error();
				   }
				?>
				<?php 
				    $query = "SELECT *from addresses ORDER By id DESC LIMIT 1";
				    $read = mysqli_query($con,$query);
				    if (mysqli_num_rows($read)>0) {
				    	while ($row=mysqli_fetch_assoc($read)) {

				?>
				         <form class="container">
				     
				                <div class="row info">
				                    <div class="col-lg-4 col-md-3 item text-center border-right xs-no-border-right xs-border-bottom border-color-medium-gray xs-margin-20px-bottom xs-padding-20px-bottom"> 
										<span class="icon font-size32">
											<img src="Images/phone.png" class="icon-phone"></img>
										</span>
										<div class="cont">
											<h6><?php echo $row['phone'];?></h6>
											<p><?php echo $row['number1'];?></p>
										</div>
									</div>
				                     
				                    <div class="col-lg-4 col-md-5 item text-center border-right xs-no-border-right xs-border-bottom border-color-medium-gray xs-margin-20px-bottom xs-padding-20px-bottom"> 
										<span class="icon font-size32">
											<img src="Images/address.png" class="icon-map"></img>
										</span>
										<div class="cont">
											<h6><?php echo $row['address'];?></h6>
											<label><?php echo $row['addressdetails'];?></label>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 item text-center"> 
										<span class="icon font-size32">
											<img src="Images/email.png" class="icon-envelope"></img>
										</span>
										<div class="cont">
											<h6><?php echo $row['email'];?></h6>
											<p><?php echo $row['emailaddress'];?></p>
										</div>
									</div>
				                     
				                     
				                      
				             	</div>
				   
				     </form>            
				    <?php } } ?>
				    
				   
				    
						
			
		</div>
	</section> 
	<footer class="bg-black">
		<li class="font-size13 text-uppercase letter-spacing-1 text-light-gray"> 
			<a class="nav-link" href="signup/login.php">Settings</a>
		</li>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 text-center"> 
						<?php 
				   $con=mysqli_connect("localhost","root","","cc");
				   if (mysqli_connect_error()) {
				   	#error message
				   	echo "Failed to connect database ".mysqli_connect_error();
				   }
				?>
				<?php 
				    $query = "SELECT *from footertxt ORDER BY id DESC LIMIT 1";
				    $read = mysqli_query($con,$query);
				    if (mysqli_num_rows($read)>0) {
				    	while ($row=mysqli_fetch_assoc($read)) {

				?>

						<span class="font-size13 text-uppercase letter-spacing-1 text-light-gray"><?php echo $row['text']; ?></span>
					<?php } } ?>
					</div>
				</div>
			</div>
		</div>
		<div id="back-to-top" class="back-to-top"> 
			<i class="fa fa-angle-up"></i>
		</div> 
	</footer> 
	<script src="js/jquery.min.js"></script> 
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap.min.js"></script> 
	<script src="js/scrollIt.min.js"></script> 
	<script src="js/animated.headline.js"></script> 
	<script src="js/jquery.appear.js"></script> 
	<script src="js/jquery.count.min.js"></script> 
	<script src="js/owl.carousel.min.js"></script> 
	<script src="js/jquery.magnific-popup.min.js"></script> 
	<script src="js/jquery.stellar.min.js"></script> 
	<script src="js/isotope.pkgd.min.js"></script> 
	<script src="js/countdown.js"></script> 
	<script src="js/scripts.js"></script> 
</body>
</html>