<html>

<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <title>Colicss</title>

<header>   
  <div class="header">
  <h1>Colicss</h1>
  <p>Cloud en hosting</p>  
</div>
</header>  

<?php include ("includes/header.php"); ?>
  


<div class="slideshow-container">

<div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="Cloud.png" style="width:75%; margin-left: 125px;">
    <div class="text">cloud</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="server.jpg" style="width:75%; margin-left: 125px;"> 
    <div class="text">Server</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="hosting.jpg" style="width:50%; margin-left: 125px;">
    <div class="text">hosting</div>
</div>

</div>
<br>

<div style="text-align:center">
<span class="dot"></span>
<span class="dot"></span>
<span class="dot"></span>
</div>



<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3500); 
}
</script>




    </body>

  <?php include ("includes/footer.php"); ?>

</html>