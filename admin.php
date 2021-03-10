<?php
session_start();
if(isset($_SESSION["username"]) != "mcavoy1129")
{
    header("location: index.php");
    exit;
}
?>
<div class="container">
    <?php include('includes/header.php');?>
    <h2>Admin Page.</h2>

    <a class="button1" href="index.php">Homepage</a>
   
<?php include('includes/footer.php');?>  
