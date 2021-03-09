<?php
// Initialize the session
session_start();
?>
<div class="container">
    <?php
    include('includes/header.php');
    ?>
    <h2>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Your Account.</h2>
    <p> Forgot your Password? <a class="button1" href="reset-password.php">Reset Password</a></p>
    <a class="button1" href="logout.php">Sign Out</a>
    <a class="button1" href="index.php">Homepage</a>
<?php
    include('includes/footer.php');
?>  