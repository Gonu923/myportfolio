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
  <h1>Footer Text</h1>      
  <p>These information will show footer section</p>
</div>

<?php 
include "config.php";
include "database.php";
?>

<?php 
 $id = $_GET['id'];
 $db = new database();
 $query = "SELECT *FROM footertxt WHERE id=$id";
 $getData = $db->select($query)->fetch_assoc();
 
if(isset($_POST['submit'])){
 $text  = mysqli_real_escape_string($db->link, $_POST['text']);

 if($text == ''){
  $error = "Field must not be Empty !!";
 } else {
  $query = "UPDATE footertxt
  SET
  text  = '$text'
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
          <form id="contactForm"  action="updatefooter.php?id=<?php echo $id;?>" method="post">
            <div class="row">
              <div class="col-md-6"> 
               Footer Text: <input type="text" name="text" value="<?php echo $getData['text'];?>"/>
              </div>
              <div class="col-md-12 text-center"> 
        
                <input class="btn white"type="submit" name="submit" value="Update"/>
                <input class="btn white" type="reset" Value="Cancel" />
              </div>
              
            </div>
            
          </form>
          <div class="col-md-14 text-center"> 
                <a href="showfooter.php"><button class="btn white" name="show" type="show">Back</button></a>
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
