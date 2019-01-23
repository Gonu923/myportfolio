
<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
     <link rel="stylesheet" href="css/plugins.css">
  <link rel="stylesheet" href="css/style.css">
    <style type="text/css">

        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
      <style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    margin-top: 160px;
    width: 200px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body>

<div style="text-align: center;height: 158px;background: silver;margin-bottom: 30px;padding: 27px;">
    <h1 style="color: goldenrod;">Settings & Privacy</h1>
     <div style="float: right;margin-top: -77px;">
                <a href="index.php"><input type="submit" class="btn btn-primary" value="Back"></a>
            </div>
    

<div style="height: 550px;">
	<div class="dropdown">
  <button class="dropbtn">Insert Data</button>
  <div class="dropdown-content">
  	<a href="insertmyhome.php">Insert in My Home</a>
  	<a  href="insertabout.php">Insert About Details</a>
    <a href="insertmyskill.php">Insert Skill</a>
  	<a  href="srv/createser.php">Insert service</a>
    <a href="CTBar/contactcreate.php">Insert new conatact details</a>
    <a href="insertfooter.php">Insert Footer Text</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Show and Update</button>
  <div class="dropdown-content">
    <a href="create.php">Show All Messages</a>
    <a href="showmyhome.php">Show My Home Details</a>
    <a href="showaboutme.php">Show My  About Details</a>
    <a href="showmyskill.php">Show Skills</a>
    <a href="showservices.php">Show My  Services Details</a>
    <a href="showaddress.php">Show My  Address Details</a>
    <a href="showfooter.php">Show My  Footer Details</a>
  </div>
</div>
</div>


 


<body background="Images/giphy.gif">
    <div class="wrapper" style="margin: 0 auto;margin-top: 0px;margin-top: 0px;border: 3px solid green;margin-top: 110px;background: silver;width: 600px;margin-top: -21px;">
        <h2>How to Change Home Content</h2>
        <p style="border-bottom: 4px dotted green;padding-bottom: 16px;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
       
    </div>    
    <footer class="bg-black" style="background: silver;margin-top: 28px;">
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 text-center"> 

            <span class="font-size13 text-uppercase letter-spacing-1 text-light-gray" style="color: black">&copy; GONESH</span>
          </div>
        </div>
      </div>
    </div>
    <div id="back-to-top" class="back-to-top"> 
      <i class="fa fa-angle-up"></i>
    </div> 
  </footer> 
</body>
</html>