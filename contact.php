
<!-- the head section -->
 <div class="container">
<?php
include('includes/header.php');
?>
<div id="contactUs-form">
<h1>Contact us</h1>
<form method="POST" name="contactform" action="contact-form-handler.php"> 
<p>
<input type="text" name="name" placeholder="Full Name">
</p>
<p>
<input type="text" name="email" placeholder="Email Address"> <br>
</p>
<p>
<input type="text" name="phone" placeholder="Phone Number"> <br>
</p>
<p>
<textarea name="message" placeholder="Message"></textarea>
</p>
<input type="submit" value="Submit"><br>
</form>
</div>
<script language="JavaScript">
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>
    
<?php
include('includes/footer.php');
?>