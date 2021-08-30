
<?php

session_start();
require_once("config.php");

if(!isset($_SESSION["un"]))
{
  header("Location:login.php");
}

if(isset($_SESSION['un']))
{
  $username=$_SESSION['un'];
}





?>
<!DOCTYPE html>
<html>
<head>
 <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="./css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./css/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body >
  

<nav style="background-color: #5f5050">
  <div class="nav-wrapper">
    <a href="" class="brand-logo" style="padding: 5px;">Substitution Cipher</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><?php echo("$username"); ?></li>
      <li ><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
<br><br><br><br>
<!-- Backgrund floaters-->
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
<!--End of floaters script-->
<div>
  <div class="card" style="max-width: 450px;max-height: 280px; margin-left: 10%;background-color: darkgray;">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="./img/encrypt.jpg">
    </div>
    <div class="card-content" style="background-color: darkgray">
      <span class="card-title activator grey-text text-darken-4">Encrypt Message</span>
      
    </div>
    <div class="card-reveal" style="background-color: #a5a3a1;">
      <span class="card-title grey-text text-darken-4" >Encrypt Message<i class="material-icons right">close</i></span>
      <h6 style="font-family: cursive;">Encryption uses an algorithm to scramble, or encrypt, data and then uses a key for the receiving party to unscramble, or decrypt, the information. The message contained in an encrypted message is referred to as plaintext. In its encrypted, unreadable form it is referred to as ciphertext.</h6>
      <a class="waves-effect waves-teal btn-flat" href="Ehome.php" style="background-color: #cff3ff;">Explore Now!!!</a>
    </div>
  </div>
  <div class="card" style="max-width: 450px;max-height: 280px; margin-left: 60%;background-color: darkgray; bottom: 300px">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="./img/decrypt.jpg">
    </div>
    <div class="card-content" style="background-color: darkgray">
      <span class="card-title activator grey-text text-darken-4">Decrypt Message</span>
      
    </div>
    <div class="card-reveal" style="background-color: #a5a3a1">
      <span class="card-title grey-text text-darken-4">Decrypt Message<i class="material-icons right">close</i></span>
      <h6 style="font-family: cursive;">The process of switching unreadable cipher text to readable information.</h6><br><br>
      <a class="waves-effect waves-teal btn-flat" href="Dhome.php" style="background-color: #cff3ff;">Explore Now!!!</a>
    </div>
  </div>

</div>
<script type="text/javascript" src="js/materialize.min.js"></script>
  
</body>
</html>


