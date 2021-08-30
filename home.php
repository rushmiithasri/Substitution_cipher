
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

<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
<script type="text/javascript" src="js/materialize.min.js"></script>


<div class="card" style="min-height: 400px;min-width: 320px;margin-left: 10%;position: relative; ">
    <div class="card-image waves-effect waves-block waves-light">
      <center><h1 style="background-color: #488490;color: white;padding: 52px;font-family: cursive;">ROT13</h1></center>
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">ROT13<i class="material-icons right">more_vert</i></span><br><br><br><br><br><br>
      <p><a class="waves-effect waves-light btn" href="rot13Enc.php" >Encrypt</a><a style="padding: 20px;"></a><a class=" waves-effect waves-light btn" href="rot13Dec.php">Decrypt</a></p>
    </Div>
    <div class="card-reveal" style="background-color: #d4d2d2; font-family: cursive;">
      <span class="card-title grey-text text-darken-4">About:<i class="material-icons right">close</i></span>
      <p>The ROT13 cipher is essentially a substitution cipher with a fixed key, if you know the cipher is ROT13, then no additional information is needed to decrypt the message.<br><br>The substitution key is:<br><p style="padding: 1em;
    background-color: #F8F8F8;
    border-left: 2px solid #e6e6e6;
    border-right: 2px solid #e6e6e6;
    font-family: monospace;
    line-height: 1.25em;
    text-align: left;"><b>
"ABCDEFGHIJKLMNOPQRSTUVWXYZ"<br>
"NOPQRSTUVWXYZABCDEFGHIJKLM"</b></p></p>
<p>To <b>encipher</b> a message, find the letter you wish to encipher in the top row, then replace it with the letter in the bottom row. In the example below, we encipher the message 'ATTACK AT DAWN'. The first letter we wish to encipher is 'A', which is above 'N', so the first ciphertext letter is 'N'. The next letter is 'T', which is above 'G', so that comes next. The whole message is enciphered:
<p style="padding: 1em;
    background-color: #F8F8F8;
    border-left: 2px solid #e6e6e6;
    border-right: 2px solid #e6e6e6;
    font-family: monospace;
    line-height: 1.25em;
    text-align: left;"><b>
ATTACK AT DAWN<br>
NGGNPX NG QNJA</b></p>
To <b>decipher</b> a message, the exact same procedure is followed. Find 'N' in the top row, which is 'A' in the bottom row. Continue until the whole message is deciphered.</p>
    </div>
  </div>

  <div class="card" style="min-height: 400px;min-width: 300px;margin-left: 40%;bottom: 415px;position: relative;">
    <div class="card-image waves-effect waves-block waves-light">
      <center><h1 style="background-color: #488490;color: white;padding: 52px;font-family: cursive;">Ceaser Cipher</h1></center>
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Ceaser Cipher<i class="material-icons right">more_vert</i></span>
      <br><br><br><br><br><br><p><a class="waves-effect waves-light btn" href="ceaserEnc.php" >Encrypt</a><a style="padding: 20px;"></a><a class=" waves-effect waves-light btn" href="ceaserDec.php">Decrypt</a></p>
    </div>
    <div class="card-reveal" style="background-color: #d4d2d2; font-family: cursive;">
      <span class="card-title grey-text text-darken-4">About:<i class="material-icons right">close</i></span>
      <p>The Caesar cipher is one of the earliest known and simplest ciphers. It is a type of substitution cipher in which each letter in the plaintext is 'shifted' a certain number of places down the alphabet. For example, with a shift of 1, A would be replaced by B, B would become C, and so on. The method is named after Julius Caesar, who apparently used it to communicate with his generals.<br><br>Here is a quick example of the encryption and decryption steps involved with the caesar cipher. The text we will encrypt is 'defend the east wall of the castle', with a shift (key) of 1.<br><p style="padding: 1em;
    background-color: #F8F8F8;
    border-left: 2px solid #e6e6e6;
    border-right: 2px solid #e6e6e6;
    font-family: monospace;
    line-height: 1.25em;
    text-align: left;"><b>
"plaintext:  defend the east wall of the castle"<br><br>  
"ciphertext: efgfoe uif fbtu xbmm pg uif dbtumf"</b></p></p>
    </div>
  </div>

  <div class="card" style="min-height: 400px;min-width: 300px;margin-left: 70%;bottom: 830px;position: relative;">
    <div class="card-image waves-effect waves-block waves-light">
      <center><h1 style="background-color: #488490;color: white;padding: 25px;font-family: cursive;">Simple Substitution Cipher</h1></center>
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Simple Substitution Cipher<i class="material-icons right">more_vert</i></span><br><br><br><p><a class="waves-effect waves-light btn" href="sscEnc.php" >Encrypt</a><a style="padding: 20px;"></a><a class=" waves-effect waves-light btn" href="sscDec.php">Decrypt</a></p>
    </div>
    <div class="card-reveal"  style="background-color: #d4d2d2; font-family: cursive;">
      <span class="card-title grey-text text-darken-4">About<i class="material-icons right">close</i></span>
      <p>The <b>Simple substitution cipher</b> is a cipher that has been in use for many hundreds of years (an excellent history is given in Simon Singhs 'the Code Book'). It basically consists of substituting every plaintext character for a different ciphertext character. It differs from the Caesar cipher in that the cipher alphabet is not simply the alphabet shifted, it is completely jumbled.<br><br>The <b>simple substitution cipher</b> offers very little communication security, and it will be shown that it can be easily broken even by hand, especially as the messages become longer (more than several hundred ciphertext characters).</p>
    </div>
  </div>
</body>
</html>