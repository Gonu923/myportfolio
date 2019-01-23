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
    <h1>Insert Into Footer Section</h1>


</div>

<?php
	$id=0;
    $text ="";
    $db = mysqli_connect('localhost','root','','cc');
    if (!$db) {
    die("Connection failed: ". mysqli_connect_error());
}
    //data validation
    if(isset($_POST['save'])){ // if submit is found
		//$name = $_POST['name'];
        $text = $_POST['text'];
        $query = "INSERT INTO footertxt(text) VALUES('$text')";
        mysqli_query($db,$query); // database methods instance creation and access
        
        
    }
?>
<?php
  if(isset($error)){
      echo "<span style='color: red'>".$error."</span>";
  }  
?>
<form id="contactForm" method="post" class="contact-form" action="insertfooter.php" align="center">
    <div class="row">
        <div class="col-md-6"> 
            <input class="medium-input" placeholder="Example: Published and modified by GCD *" required="required" id="emailaddress" name="text" type="txt" style="margin-left: 315px;
height: 100px;">
        </div>
        <div class="col-md-12 text-center"> 
            <button class="btn white" name="save" type="submit">Add Footer Text</button>
        </div>
                            
    </div>
</form>
 <a href="index.php"><button class="btn white">Go Home</button></a>

 <div style="
    text-align: center;
background: gray;
height: 100px;
margin-top: 88px;
padding-top: 122px;">
     &copy;Gonesh
 </div>

 </body>
</html>