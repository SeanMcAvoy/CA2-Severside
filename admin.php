<?php
session_start();
if(isset($_SESSION["username"]) != "mcavoy1129")
{
    header("location: index.php");
    exit;
}
?>
