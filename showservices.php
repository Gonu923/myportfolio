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
  <h1>All Services Information</h1>      
  <p>Modify your services details</p>
</div>
<?php 
    include "config.php";
    include "database.php";
?>
<?php
    $db = new Database();
    $query = "SELECT *from services ORDER BY id DESC";
    $read = $db->select($query);
?>
                        
                <?php
                  if(isset($_GET['msg'])){
                      echo "<span style='color: green'>".$_GET['msg']."</span>";
                  }  
                ?>
<table class="tblone" style="margin: 10px;align:center; border: 1px sold gray;" border="1px sold gray">
    <tr>
        <th width="40%" align="center">Title</th>
        <th width="40%" align="center">Description</th>
    </tr>
   <?php if($read){ ?>
    <?php while($row = $read->fetch_assoc()){ ?> <!-- reading data in associative manner -->
    <tr padding="3px">
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['description']; ?></td>
        <td><a href="srv/updateser.php?id=<?php echo $row['id']; ?>">Edit</a></td>
    </tr>
    <?php } ?>
    <?php } else{?>
    <p>Data is not available.</p>
    <?php } ?>
</table>   
<a href="index.php" style="margin-left: 650px;
border: 1px solid;">Go Home</a>
<footer class="jumbotron" align="center" margin-top="10px">
  <p>Posted by: Gonesh</p>
  <p>Contact information: <a href="mailto:someone@example.com">
  someone@example.com</a>.</p>
</footer> 
</body>
</html>
