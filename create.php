
<?php 
    include 'header.php';
    include "config.php";
    include "database.php";
?>
<?php
    $db = new Database();
    $query = "SELECT *from contact";
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
        <th width="20%" align="center">Email</th>
        <th width="20%" align="center">Phone</th>
        <th width="15%" align="center">Subject</th>
        <th width="20%" align="center">Message</th>
    </tr>
   <?php if($read){ ?>
    <?php while($row = $read->fetch_assoc()){ ?> <!-- reading data in associative manner -->
    <tr padding="3px">
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></ td>
        <td><?php echo $row['phone']; ?></ td>
        <td><?php echo $row['subject']; ?></ td>
        <td><?php echo $row['message']; ?></ td>
    </tr>
    <?php } ?>
    <?php } else{?>
    <p>Data is not available.</p>
    <?php } ?>
</table>   
<?php include 'footer.php'; ?>   








		

