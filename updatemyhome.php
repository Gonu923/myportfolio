<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/plugins.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron" align="center">
  <h1>Home Content</h1>      
  <p>These information will show home section</p>
</div>

<?php 
include "config.php";
include "database.php";
?>

<?php 
 $id = $_GET['id'];
 $db = new database();
 $query = "SELECT *FROM abouthome WHERE id=$id";
 $getData = $db->select($query)->fetch_assoc();
 
if(isset($_POST['submit'])){
 $name  = mysqli_real_escape_string($db->link, $_POST['name']);
 $t1 = mysqli_real_escape_string($db->link, $_POST['t1']);
 $t2 = mysqli_real_escape_string($db->link, $_POST['t2']);

 if($name == '' || $t1 == '' || $t2 == '' ){
  $error = "Field must not be Empty !!";
 } else {
  $query = "UPDATE abouthome
  SET
  name  = '$name',
  t1 = '$t1',
  t2 = '$t2'
  WHERE id = $id";
  $update = $db->update($query);
  
 }
}
?>

<?php 
if(isset($error)){
 echo "<span style='color:red'>".$error."</span>";
}
?>
</form>
<div class="col-lg-12">
          <div class="no-margin-lr" id="success-contact-form">
            
          </div>
          <form id="contactForm"  action="updatemyhome.php?id=<?php echo $id;?>" method="post">
            <div class="row">
              <div class="col-md-6"> 
               Name: <input type="text" name="name" value="<?php echo $getData['name'];?>"/>
              </div>
              <div class="col-md-6"> 
                Email: <input type="text" name="t1" value="<?php echo $getData['t1'];?>"/>
              </div>
              <div class="col-md-6"> 
                Phone: <input type="text" name="t2" value="<?php echo $getData['t2']; ?>"/>
              </div>
              <div class="col-md-12 text-center"> 
        
                <input class="btn white"type="submit" name="submit" value="Update"/>
                <input class="btn white" type="reset" Value="Cancel" />
              </div>
              
            </div>
            
          </form>
          <div class="col-md-14 text-center"> 
                <a href="showmyhome.php"><button class="btn white" name="show" type="show">Back</button></a>
              </div>
        </div>
<a href="insertmyhome.php">Insert New Home Details</a>


<footer class="jumbotron" align="center" margin-top="10px">
  <p>Posted by: Gonesh</p>
  <p>Contact information: <a href="mailto:someone@example.com">
  someone@example.com</a>.</p>
</footer> 
</body>
</html>
