<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div style="text-align: center;
height: 158px;
background: gray;
margin-bottom: 30px;
padding: 27px;">
    <h1>Insert Into About Section</h1>


</div>
<?php
	$im="";
	$slogan="";
	$text1="";
	$txt1="";
	$txt2="";
	$txt3="";
	$txt4="";
	$id=0;
    $db = mysqli_connect('localhost','root','','cc');
    if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
    //data validation
    if(isset($_POST['save'])){ // if submit is found
		//$name = $_POST['name'];
        $im = $_POST['im'];
        $slogan= $_POST['slogan'];
        $text1= $_POST['text1'];
        $t1= $_POST['txt1'];
        $t2= $_POST['txt2'];
        $t3= $_POST['txt3'];
        $t4= $_POST['txt4'];
        $query = "INSERT INTO meabout(im, slogan, text1, txt1, txt2, txt3,txt4) VALUES('$im', '$slogan', '$text1','$txt1','$txt2','$txt3','$txt4')";
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
					<form id="contactForm" method="post" class="contact-form" action="insertabout.php">
						<div class="row">
							<div class="col-md-6"> 
								<input class="medium-input" placeholder="Ex: I am Gonesh *" required="required" id="name" name="im" type="text">
							</div>
							<div class="col-md-6"> 
								<input class="medium-input" placeholder=" Ex: I am Android and web developer *" required="required" id="text" name="slogan" type="text">
							</div>
							<div class="col-md-6"> 
								<input class="medium-input" placeholder="Title One *" required="required" id="subject" name="txt1" type="text">
							</div>
							<div class="col-md-6"> 
								<input class="medium-input" placeholder="Title Two *" required="required" id="subject2" name="txt2" type="text">
							</div>
							<div class="col-md-6"> 
								<input class="medium-input" placeholder="Title Three *" required="required" id="subject3" name="txt3" type="text">
							</div>
							<div class="col-md-6"> 
								<input class="medium-input" placeholder="Title Four *" required="required" id="subject4" name="txt4" type="text">
							</div>
							<div class="col-md-12">
								<textarea class="big-textarea" rows="6" placeholder="Type about yourself *" required="required" id="message" name="text1">
									
								</textarea>
							</div>
							<div class="col-md-12 text-center"> 
								<button class="btn white" name="save" type="submit">Insert About Details</button>
							</div>
							
						</div>
						
					</form>
				</div>
			</div>
		</div>
		 <a href="index.php"><button class="btn white">Go Home</button></a>
<footer class="bg-black">
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 text-center"> 

						<span class="font-size13 text-uppercase letter-spacing-1 text-light-gray">&copy; GONESH</span>
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