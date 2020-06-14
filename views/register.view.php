<?php
require "hdrftr/header.php"
?>

<div class="typewriter">
    <h1>Please enter your credentials</h1>
</div>
<!-- delete -->
<form action="../includes/register.inc.php" method="post" class="form_sign">
    <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="fname"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="fname" required>
        <label for="lname"><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" name="lname" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
        <label for="level"><b>Level</b></label><br>
        <select name="level" id="level">
        <option value="1">invited</option>
        <option value="2">regular</option>
        <option value="3">premium</option>
        </select><br>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pwd" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="pwd-repeat" required>
        <hr>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <button type="submit"  name="signup-submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? <a href="login.php">Sign in</a>.</p>
    </div>
</form>




<!-- till here -->


<script src="assets/js/app.js"></script>
<script src="assets/js/slideshow.js"></script>




<?php
require "hdrftr/footer.php"
?>
