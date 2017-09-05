<?php  include("header.php");  ?>
<!DOCTYPE html>
<html>
<title>W3.CSS</title>

<body>

<h2 class="w3-center">View Pics</h2>

<div class="w3-content w3-display-container">
  <img class="mySlides" src="img/c.jpg" style="width:100%; height:80%; ">
  <img class="mySlides" src="img/d.jpg" style="width:100%; height:80%; ">
  <img class="mySlides" src="img/c.jpg" style="width:100%; height:80%; ">
  <img class="mySlides" src="img/d.jpg" style="width:100%; height:80%; ">

  <button class="w3-button w3-deep-orange w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-deep-orange w3-display-right" onclick="plusDivs(1)">&#10095;</button>


</div>
 <center>   <br> <button class="w3-button w3-teal">Back to MainPage</button>  </center>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>
