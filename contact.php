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




<div class="container">
    <form action="action_page.php">
      <div class="row">
        <div class="col-25">
          <label for="fname">Voornaam</label>
        </div>
        <div class="col-75">
          <input type="text" id="fname" name="firstname" placeholder="Uw voornaam...">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Achternaam</label>
        </div>
        <div class="col-75">
          <input type="text" id="lname" name="lastname" placeholder="Uw achternaam...">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="country">Land</label>
        </div>
        <div class="col-75">
          <select id="country" name="country">
            <option value="australia">Nederland</option>
            <option value="canada">Belgie</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Onderwerp</label>
        </div>
        <div class="col-75">
          <textarea id="subject" name="subject" placeholder="Typ hier uw bericht of op/aanmerking..." style="height:180px"></textarea>
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div> 
  


</body>

<div class="footer">
    <p>facebook etc</p>
</div>



</html>