<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron" align="center">
  <h1>Modify Services</h1>      
  <p>Modify your services details</p>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id = $_GET['id'];
 $sql = "SELECT *FROM services WHERE id=$id";
 $getData = $conn->query($sql)->fetch_assoc();
if (isset($_POST['submit'])) {
  $title  = $_POST['title'];
 $description = $_POST['description'];
$sql = "UPDATE services SET title='$title',description='$description' WHERE id=$id";
}elseif (isset($_POST['delete'])) {
  $sql = "DELETE FROM services WHERE id=$id";
}

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} 

$conn->close();
?>

<form class="upform" action="updateser.php?id=<?php echo $id;?>" method="post">
<table align="center" width="40%">
 <tr>
  <td>Title</td>
  <td><input width="100%" type="text" style="margin-bottom: 15px;border: 1px solid gray;width: 400px;border-radius: 7px;" name="title" value="<?php echo $getData['title'] ?>"/></td>
 </tr>
 <tr>
  <td>Description</td>
  <td><input  type="text" name="description" style="height: 100px;border: 1px solid gray;margin-bottom: 15px;width: 400px;border-radius: 15px;" value="<?php echo $getData['description'] ?>"/></td>
 </tr>
 <tr>
  <td></td>
  <td>
  <input type="submit" style="border: 1px solid cadetblue;border-radius: 8px;margin-left: 47px;" name="submit" value="Update"/>
  <input type="reset" style="border: 1px solid cadetblue;border-radius: 8px;margin-left: 47px;" Value="Cancel" />
  <input type="submit" style="border: 1px solid cadetblue;border-radius: 8px;margin-left: 47px;" name="delete" Value="Delete" />
  </td>
 </tr>

</table>
</form>
<a href="createser.php" style="border: 1px solid cadetblue;
margin: 29px;
height: 104px;
border-radius: 4px;">Insert services</a>
<a href="../index.php" style="border: 1px solid cadetblue;
margin: 29px;
height: 104px;
border-radius: 4px;">Go Home</a>


<footer class="jumbotron" align="center" margin-top="10px">
  <p>Posted by: Gonesh</p>
  <p>Contact information: <a href="mailto:someone@example.com">
  someone@example.com</a>.</p>
</footer> 
</body>
</html>
