<!-- the head section -->
<?php
// Initialize the session
session_start();
if (($_SESSION["loggedin"])) {
    
    $accountButton = "<div class=dropdown>
    <button class=dropbtn>Your Account
        <i class='fa fa-caret-down'></i>
    </button>
    <div class=dropdown-content>
        <a href=logout.php>Logout</a>
        <a href=reset-password.php>Reset Password</a>
    </div>
</div>";   
}
?>
<head>
    <title>Jersey Direct</title>
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script language="JavaScript" src="../gen_validatorv31.js" type="text/javascript"></script>
</head>
<!-- the body section -->

<body>
    <header>
        <h1>Jersey Direct</h1>
        <div class="topnav" id="myTopnav">
            <a href="index.php">Home</a>
            <a href="add_product_form.php">Add Product</a>
            <a href="contact.php">Contact Us</a>
            <a href="login.php">Login</a>
            <a href="register.php">Login</a>
            <?php echo $accountButton?>
        </div>

    </header>