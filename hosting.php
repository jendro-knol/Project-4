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



<div class="columns">
        <ul class="price">
          <li class="nav">Brons</li>
          <li class="grey">&#8364; 5.95 Per Maand</li>
          <li>10GB HDD</li>
          <li>512MB RAM</li>
          <li>1 Core</li>
          <li>100GB Dataverkeer per maand</li>
          <li class="grey"><a href="prijs1.php" class="button">Bestellen</a></li>
        </ul>
</div>
<div class="columns">
        <ul class="price">
          <li class="nav1">Silver</li>
          <li class="grey">&#8364; 7.95 Per Maand</li>
          <li>20GB HDD</li>
          <li>1024MB RAM</li>
          <li>2 Cores</li>
          <li>200GB Dataverkeer per maand</li>
          <li class="grey"><a href="prijs2.php" class="button">Bestellen</a></li>
        </ul>
</div>
</div>
<div class="columns">
        <ul class="price">
          <li class="nav2">Goud</li>
          <li class="grey">&#8364; 10.95 Per Maand</li>
          <li>50GB HDD</li>
          <li>2048MB RAM</li>
          <li>4 Cores</li>
          <li>Onbeperkt Dataverkeer per maand</li>
          <li class="grey"><a href="prijs3.php" class="button">Bestellen</a></li>
        </ul>
</div>


      
    </body>

  <?php include ("includes/footer.php"); ?>

</html>