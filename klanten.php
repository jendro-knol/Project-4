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
    <table id="customers">
  <tr>
    <th>Bedrijf</th>
    <th>Contact naam  + tel</th>
    <th>Land</th>
  </tr>
  <tr>
    <td>Jarno Jasper bv</td>
    <td>Jarno Jasper         ........</td>
    <td>Nederland</td>
  </tr>
  <tr>
    <td>Daan technologics</td>
    <td>Daan Gebraad         ........</td>
    <td>Nederland</td>
  </tr>
  <tr>
    <td>Jendroknol..bv.</td>
    <td>Jendro Knol      ........</td>
    <td>Nederland</td>
  </tr>
    </table>



</body>

 <?php include ("includes/footer.php"); ?>


</html>