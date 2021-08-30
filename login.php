<?php

session_start();

if(isset($_SESSION["un"]))
{
  header("Location:enc_dec.php");
}

if(isset($_SESSION['url']))
{
     $url=$_SESSION['url'];
               
}
else
{
      $url="enc_dec.php";
               
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
<body>
<nav style="background-color: #5f5050">
  <div class="nav-wrapper">
<a href="" class="brand-logo" style="padding: 5px;">Substitution Cipher</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="login.php">LogIn</a></li>
      <li><a href="signup.php">SignUp </a></li>
    </ul>
  </div>
</nav>
<br><br><br><br>
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>

<div class="row">
  <center>
    <form class="col s12" method="post" action="process.php">
      <div class="row">
        <div class="input-field col s7">
          
         <h4 style="color: white">LogIn</h4>
          
          <input type="email" id="email" placeholder="Enter your Email" name="email" class="validate" required="" style="color: white;"><br><br>
          <input style="color: white;" type="password" name="password" id="password" placeholder="Enter your password" class="validate" required=""><br><br><input type="hidden"  class="form-control"  name="uri" value="<?php echo("$url");?>">
          <center><input type="submit" value="LogIn" class="waves-effect waves-light btn">
  </center>
        </div>
      </div>
    </form></center>
</div>


<script type="text/javascript" src="js/materialize.min.js"></script>
  
</body>
</html>


