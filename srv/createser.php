<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="../css/plugins.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div style="text-align: center;
height: 158px;
background: gray;
margin-bottom: 30px;
padding: 27px;">
    <h1 style="color: goldenrod;">Insert Into Service Section</h1>


</div>

<?php
	$title="";
	$description="";
	$id=0;
    $db = mysqli_connect('localhost','root','','cc');
    if (!$db) {
    die("Connection failed: ". mysqli_connect_error());
}
    //data validation
    if(isset($_POST['save'])){ // if submit is found
		//$name = $_POST['name'];
        $title = $_POST['title'];
        $description= $_POST['description'];
        $query = "INSERT INTO services(title, description) VALUES('$title', '$description')";
        mysqli_query($db,$query); // database methods instance creation and access
        echo "New Service inserted";
        
        
    }
?>
<?php
  if(isset($error)){
      echo "<span style='color: red'>".$error."</span>";
  }  
?>
<form id="contactForm" method="post" class="contact-form" action="createser.php" style="text-align: center;">
    <div class="row">
        <div class="col-md-6"> 
                <input class="medium-input" style="margin-bottom: 15px;border: 1px solid gray;width: 400px;border-radius: 7px;padding: 5px;margin-left: 473px;" placeholder="Title *" required="required" id="title" name="title" type="text">
        </div>
        <div class="col-md-12">
            <textarea wrap="head" class="big-textarea" rows="6" style="height: 100px;border: 1px solid gray;margin-bottom: 15px;width: 400px;border-radius: 15px;padding: 5px;" placeholder="Type your service *" required="required" id="description" name="description">
                                    
            </textarea>
        </div>
        <div class="col-md-12 text-center"> 
            <button class="btn white" name="save" type="submit">Insert Services</button>
        </div>
                            
    </div>

</form>
 <a href="../index.php"><button class="btn white">Go Home</button></a>

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