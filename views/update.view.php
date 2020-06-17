<?php 
session_start();
include_once "../model/user.model.php";
include_once "../model/fav.model.php";
include_once "../model/wink.model.php";
$userName=$_SESSION['usn'];
// $uid=$_SESSION['uid'];
$selected=new User();
$user=$selected->selectUser($userName);
?>

<!DOCTYPE html>
<html>
<title>MATCHER</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<h1></h1>
<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="../img/logo.jpg" style="width:100%">

</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->


<!-- Page Content -->
<div class="w3-padding-large" id="main">




  <div class="w3-padding-64 w3-content" id="photos">
    <form action="../includes/updateuser.inc.php" method="post" class="form_sign" enctype="multipart/form-data">
    <div class="container">
    
        <h1>Update</h1>
        <p>Please fill in this form to update your profile.</p>
        <hr>
        <input type="text"class="w3-input w3-padding-16" placeholder="Enter First Name" name="fname" value='<?php echo $user[0]['fname'] ?>'><br>
        <input type="text" class="w3-input w3-padding-16" placeholder="Enter Last Name" name="lname" value='<?php echo $user[0]['lname'] ?>'><br>
        <input type="text" class="w3-input w3-padding-16"placeholder="Enter Email" name="email" value='<?php echo $user[0]['email'] ?>'><br>
        <select name="level" class="w3-input w3-padding-16" id="level">
        <option class="w3-input w3-padding-16" value="1">invited</option>
        <option class="w3-input w3-padding-16" value="2">regular</option>
        <option class="w3-input w3-padding-16" value="3">premium</option>
        </select><br>
        <input type="password" class="w3-input w3-padding-16" placeholder="Enter new Password" name="pwd" value='<?php echo $user[0]['pwd'] ?>'><br>
        <!-- <input type="password" class="w3-input w3-padding-16" placeholder="Repeat Password" name="pwd-repeat" required><br> -->
        <hr>
        <input type="hidden" name="size" value="1000000">
  	    <div>
        <label for=" ">Please choose a profile pic : </label>
  	    <input type="file" name="image">
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <button type="submit"  name="signup-submit" class="registerbtn">Update</button>
    </div>
</form>
  <!-- End Portfolio Section -->
  </div>

  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
