<?php 
    include 'header.php';
    include "config.php";
    include "database.php";
?>
<?php
    $db = new Database();
    $query = "SELECT *from meabout";
    $read = $db->select($query);
?>
                        
                <?php
                  if(isset($_GET['msg'])){
                      echo "<span style='color: green'>".$_GET['msg']."</span>";
                  }  
                ?>
<table class="tblone" border="1px solid gray"; align="center" ="20px auto" bgcolor="#BDA59F">
    <tr>
        <th width="15%" align="center">Name</th>
        <th width="15%" align="center">Slogan</th>
        <th width="20%" align="center">My Details</th>
        <th width="12%" align="center">Titile One</th>
        <th width="12%" align="center">Titile Two</th>
        <th width="12%" align="center">Titile Three</th>
        <th width="12%" align="center">Titile Four</th>
    </tr>
   <?php if($read){ ?>
    <?php while($row = $read->fetch_assoc()){ ?> <!-- reading data in associative manner -->
    <tr padding="3px">
        <td><?php echo $row['im']; ?></td>
        <td><?php echo $row['slogan']; ?></td>
        <td><?php echo $row['text1']; ?></td>
        <td><?php echo $row['txt1']; ?></td>
        <td><?php echo $row['txt2']; ?></td>
        <td><?php echo $row['txt3']; ?></td>
        <td><?php echo $row['txt4']; ?></td>
        <td><a href="updateaboutme.php?id=<?php echo $row['id']; ?>">Edit</a></td>
    </tr>
    <?php } ?>
    <?php } else{?>
    <p>Data is not available.</p>
    <?php } ?>
</table>   
<a href="index.php" style="margin-left: 650px;
border: 1px solid;">Go Home</a>
<?php include 'footer.php'; ?>   