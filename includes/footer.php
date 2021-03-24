<footer>
<p>&copy; <?php echo date("Y"); ?> Jersey Direct App</p>
</footer>
</div><!-- close div container -->
<script language="JavaScript">
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>

</body>
<script src="validation.js"></script>
</html>