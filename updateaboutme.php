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
  <h1></h1>      
  <p>These informations will show in home section.</p>
</div>

<?php 
include "config.php";
include "database.php";
?>

<?php 
 $id = $_GET['id'];
 $db = new database();
 $query = "SELECT *FROM meabout WHERE id=$id";
 $getData = $db->select($query)->fetch_assoc();
if(isset($_POST['submit'])){
 $im  = mysqli_real_escape_string($db->link, $_POST['im']);
 $slogan = mysqli_real_escape_string($db->link, $_POST['slogan']);
 $text1 = mysqli_real_escape_string($db->link, $_POST['text1']);
 $txt1  = mysqli_real_escape_string($db->link, $_POST['txt1']);
 $txt2 = mysqli_real_escape_string($db->link, $_POST['txt2']);
 $txt3 = mysqli_real_escape_string($db->link, $_POST['txt3']);
 $txt4 = mysqli_real_escape_string($db->link, $_POST['txt4']);
 if($im == '' || $slogan == '' || $text1 == '' || $txt1 = '' || $txt2 = '' || $txt3 = '' || $txt4 = ''){
  $error = "Field must not be Empty !!";
 } else {
  $query = "UPDATE meabout
  SET
  im  = '$im',
  slogan = '$slogan',
  text1 = '$text1',
  txt1 = '$txt1',
  txt2 = '$txt2',
  txt3 = '$txt3',
  txt4 = '$txt4'
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
          <form id="contactForm"  action="updateaboutme.php?id=<?php echo $id;?>" method="post">
            <div class="row">
              <div class="col-md-6"> 
               Name: <input type="text" required="required" name="im" value="<?php echo $getData['im'];?>"/>
              </div>
              <div class="col-md-6"> 
                Theme: <input type="text" required="required" name="slogan" value="<?php echo $getData['slogan'];?>"/>
              </div>
              <div class="col-md-6"> 
                My Details: <input type="text" required="required" name="text1" value="<?php echo $getData['text1']; ?>"/>
              </div>
               <div class="col-md-6"> 
                Title One: <input type="text" required="required" name="txt1" value="<?php echo $getData['txt1'];?>"/>
              </div>
               <div class="col-md-6"> 
                Title Two: <input type="text" required="required" name="txt2" value="<?php echo $getData['txt2']; ?>"/>
              </div>
               <div class="col-md-6"> 
                Title Three: <input type="text" required="required" name="txt3" value="<?php echo $getData['txt3']; ?>"/>
              </div>
               <div class="col-md-6"> 
                Title Four: <input type="text" required="required" name="txt4" value="<?php echo $getData['txt4']; ?>"/>
              </div>
              <div class="col-md-12 text-center"> 
        
                <input class="btn white"type="submit" name="submit" value="Update"/>
                <input class="btn white" type="reset" Value="Cancel"/>
              </div>
              
            </div>
            
          </form>
          <div class="col-md-14 text-center"> 
                <a href="showaboutme.php"><button class="btn white" name="show" type="show">Back</button></a>
              </div>
        </div>
<a href="insertabout.php">Insert New Home Details</a>


<footer class="jumbotron" align="center" margin-top="10px">
  <p>Posted by: Gonesh</p>
  <p>Contact information: <a href="mailto:someone@example.com">
  someone@example.com</a>.</p>
</footer> 
</body>
</html>
