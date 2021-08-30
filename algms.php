
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


<script type="text/javascript" src="js/materialize.min.js"></script>
  
</body>
</html>


