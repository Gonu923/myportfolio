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
    <h1>Insert Into Home Section</h1>


</div>
<?php
	$name="";
	$t1="";
	$t2="";
	$id=0;
    $db = mysqli_connect('localhost','root','','cc');
    if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
    //data validation
    if(isset($_POST['save'])){ // if submit is found
		//$name = $_POST['name'];
        $name = $_POST['name'];
        $t1= $_POST['t1'];
        $t2= $_POST['t2'];
        $query = "INSERT INTO abouthome(name, t1, t2) VALUES('$name','$t1','$t2')";
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
				<form id="contactForm" method="post" class="contact-form" action="insertmyhome.php">
						<div class="row">
							<div class="col-md-6"> 
								<input class="medium-input" placeholder="Ex: I am Gonesh *" required="required" id="name" name="name" type="text">
							</div>
							<div class="col-md-6"> 
								<input class="medium-input" placeholder="Title One *" required="required" id="subject" name="t1" type="text">
							</div>
							<div class="col-md-6"> 
								<input class="medium-input" placeholder="Title Two *" required="required" id="subject2" name="t2" type="text">
							</div>							
							<div class="col-md-12 text-center"> 
								<button class="btn white" name="save" type="submit">Insert in home</button>
							</div>
							
						</div>
						
				</form>
				</div>
		</div>
 <a href="index.php"><button class="btn white">Go Home</button></a>

 <div style="text-align: center;background: gray; height: 100px;margin-top: 88px;padding-top: 122px;">
     &copy;Gonesh
 </div>

 </body>
</html>