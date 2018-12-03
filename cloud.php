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

<div class="columns1">
        <ul class="price1">
          <li class="navv">Geel</li>
          <li class="grey1">&#8364; 4.00 Per Maand</li>
          <li>10GB Opslag</li>
          <li class="grey1"><a href="#" class="button1">Bestellen</a></li>
        </ul>
</div>
<div class="columns1">
        <ul class="price1">
          <li class="navv1">Oranje</li>
          <li class="grey1">&#8364; 6.00 Per Maand</li>
          <li>100GB Opslag</li>
          <li class="grey1"><a href="#" class="button1">Bestellen</a></li>
        </ul>
</div>
<div class="columns1">
        <ul class="price1">
          <li class="navv2">Groen</li>
          <li class="grey1">&#8364; 10.00 Per Maand</li>
          <li>1000GB/1TB Opslag</li>
          <li class="grey1"><a href="#" class="button1">Bestellen</a></li>
        </ul>
</div>


</body>

<div class="footer">
    <p>facebook etc</p>
  </div>



</html>