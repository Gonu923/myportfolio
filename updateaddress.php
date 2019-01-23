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
  <h1>fffffff</h1>      
  <p>These information will show home section</p>
</div>

<?php 
include "config.php";
include "database.php";
?>

<?php 
 $id = $_GET['id'];
 $db = new database();
 $query = "SELECT *FROM addresses WHERE id=$id";
 $getData = $db->select($query)->fetch_assoc();
 
if(isset($_POST['submit'])){
 $phone  = mysqli_real_escape_string($db->link, $_POST['phone']);
 $number1  = mysqli_real_escape_string($db->link, $_POST['number1']);
 $address  = mysqli_real_escape_string($db->link, $_POST['address']);
 $addressdetails  = mysqli_real_escape_string($db->link, $_POST['addressdetails']);
 $email  = mysqli_real_escape_string($db->link, $_POST['email']);
 $emailaddress  = mysqli_real_escape_string($db->link, $_POST['emailaddress']);

 if($phone == '' || $number1 == '' || $address == '' || $addressdetails == '' || $email == '' || $emailaddress == ''){
  $error = "Field must not be Empty !!";
 } else {
  $query = "UPDATE addresses
  SET
  phone  = '$phone',
  number1 = '$number1',
  address = '$address',
  addressdetails = '$addressdetails',
  email = '$email',
  emailaddress = '$emailaddress'
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
          <form id="contactForm"  action="updateaddress.php?id=<?php echo $id;?>" method="post">
            <div class="row">
              <div class="col-md-6"> 
               Phone Title: <input type="text" name="phone" value="<?php echo $getData['phone'];?>"/>
              </div>
              <div class="col-md-6"> 
                Number: <input type="text" name="number1" value="<?php echo $getData['number1'];?>"/>
              </div>
              <div class="col-md-6"> 
                Address Title: <input type="text" name="address" value="<?php echo $getData['address']; ?>"/>
              </div>
              <div class="col-md-6"> 
               Address: <input type="text" name="addressdetails" value="<?php echo $getData['addressdetails'];?>"/>
              </div>
              <div class="col-md-6"> 
                Email Title: <input type="text" name="email" value="<?php echo $getData['email'];?>"/>
              </div>
              <div class="col-md-6"> 
                Email: <input type="text" name="emailaddress" value="<?php echo $getData['emailaddress']; ?>"/>
              </div>
              <div class="col-md-12 text-center"> 
        
                <input class="btn white"type="submit" name="submit" value="Update"/>
                <input class="btn white" type="reset" Value="Cancel" />
              </div>
              
            </div>
            
          </form>
          <div class="col-md-14 text-center"> 
                <a href="showaddress.php"><button class="btn white" name="show" type="show">Back</button></a>
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
