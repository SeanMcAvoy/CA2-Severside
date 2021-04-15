<?php
// Initialize the session
session_start();
?>
<div class="container">
<?php include('includes/header.php'); ?>
<div id="comingSoon">
<div class="bgimg">
<div class="topleft">
<p>Exciting things coming to the site keep an eye on this page!</p>
  </div>
  <div class="middle">
    <h1>COMING SOON</h1>
    <hr>
    <p id="timer" style="font-size:30px"></p>
  </div>
  <div class="bottomleft">
    
  </div>
</div>
</div>
</div>  
<script>
// Set the date we're counting down to
var countDownDate = new Date("May 5, 2021 09:30:00").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
  
  // Find the distance between now an the count down date
  var distance = countDownDate - now;
  
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  
  document.getElementById("timer").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(countdownfunction);
    document.getElementById("timer").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
<?php include('includes/footer.php');?>    
