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
  <h1>Footer Text</h1>      
  <p></p>
</div>

<?php 
    include "config.php";
    include "database.php";
?>
<?php
    $db = new Database();
    $query = "SELECT *from footertxt ORDER BY id DESC LIMIT 1";
    $read = $db->select($query);
?>
                        
                <?php
                  if(isset($_GET['msg'])){
                      echo "<span style='color: green'>".$_GET['msg']."</span>";
                  }  
                ?>
<table class="tblone" border="1px solid gray"; align="center" ="20px auto" bgcolor="#BDA59F" style="margin: 10px;bgcolor:#BDA59F; align-content: center; " >
    <tr>
        <th width="80%" align="center">Current footer Text</th>
       
    </tr>
   <?php if($read){ ?>
    <?php while($row = $read->fetch_assoc()){ ?> <!-- reading data in associative manner -->
    <tr padding="3px">
        <td><?php echo $row['text']; ?></td>
        <td><a href="updatefooter.php?id=<?php echo $row['id']; ?>">Modify Footer Text</a></td>
    </tr>
    <?php } ?>
    <?php } else{?>
    <p>Data is not available.</p>
    <?php } ?>
</table>   
<a href="index.php" style="margin-left: 650px;
border: 1px solid;">Go Home</a>
<footer class="jumbotron" align="center" margin-top="10px" style="height: 80px;" >
  <p>Posted by: Gonesh</p>
  <p>Contact information: <a href="mailto:someone@example.com">
  someone@example.com</a>.</p>
</footer> 
</body>
</html>
