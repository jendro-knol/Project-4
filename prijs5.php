<html>

<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="prijzen/prijs5.js"></script>
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
  
  <script>
  function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
          x.className += " responsive";
      } else {
          x.className = "topnav";
      }
  }
  </script>
  
  <h2 class="calc">Oranje<h2> 
    <select name="" id="list">
  		<option value="test1">Maand</option>
  		<option value="test2">Per jaar</option>
  		<option value="test3">Per 5 jaar</option>
  	</select> <br>
  	<button id="calculate" onclick="calculate()">Uitrekenen</button>
  	<div id="result">Totaalprijs</div>
  	<div id="discount">Korting</div>




	</body>


 <?php include ("includes/footer.php"); ?>