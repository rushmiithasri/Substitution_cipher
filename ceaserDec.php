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
    <a href="enc_dec.php" class="brand-logo" style="padding: 5px;">Substitution Cipher</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><?php echo("$username"); ?></li>
      <li ><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>

<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
<script type="text/javascript" src="js/materialize.min.js"></script>
<center>
<h2 style="color: white;">Ceaser Cipher</h2></center>
<br><br>
<div style="margin-left: 10%;">
<p style="color: white;">Ciphertext<br><br><textarea id="c" name="c" rows="4" cols="50" style="color:white; font-family: cursive;max-width: 300px;">fyyfhp fy ifbs</textarea></p> 

<p style="color: white;">  Shift:
 <select id="key" name="key" size="1" style="display: inherit;max-width: 60px;max-height: 35px;background-color: #21ada0;font-family: cursive;"> 
  <option value="0">0</option> 
  <option value="1">1</option> 
  <option value="2">2</option> 
  <option value="3">3</option> 
  <option value="4">4</option> 
  <option value="5" selected="selected" style="color: white;">5</option> 
  <option value="6">6</option> 
  <option value="7">7</option> 
  <option value="8">8</option> 
  <option value="9">9</option> 
  <option value="10">10</option> 
  <option value="11">11</option> 
  <option value="12">12</option> 
  <option value="13">13</option> 
  <option value="14">14</option> 
  <option value="15">15</option> 
  <option value="16">16</option> 
  <option value="17">17</option> 
  <option value="18">18</option> 
  <option value="19">19</option> 
  <option value="20">20</option> 
  <option value="21">21</option> 
  <option value="22">22</option> 
  <option value="23">23</option> 
  <option value="24">24</option> 
  <option value="25">25</option> 
  </select></p>
<button onclick="Decrypt_Ceaser()" class="addMore" title="Decrypt"><i class="small material-icons">lock_open</i></button></p> 
<p style="color: white;">Plaintext<br/>
</p> 
<textarea id="p" name="p" rows="4" cols="50" style="color:white; font-family: cursive;max-width: 300px;"></textarea> 
</div>
<script type="text/javascript"> 

function Decrypt_Ceaser(f) { 
    ciphertext = document.getElementById("c").value.toLowerCase();  
    // do some error checking 
    if(ciphertext.length < 1){ alert("please enter some ciphertext (letters only)"); return; }    
    var shift = parseInt(document.getElementById("key").value);
    plaintext = "";    var re = /[a-z]/;
    for(i=0; i<ciphertext.length; i++){ 
        if(re.test(ciphertext.charAt(i))) plaintext += String.fromCharCode((ciphertext.charCodeAt(i) - 97 + 26 - shift)%26 + 97); 
        else plaintext += ciphertext.charAt(i); 
    } 
    document.getElementById("p").value = plaintext; 
} 
</script>
</body>
</html>
