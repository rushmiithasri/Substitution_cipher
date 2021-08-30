<?php

session_start();

unset($_SESSION['un']);
unset($_SESSION['url']);
	echo '<script language="javascript">';
	echo 'alert("Logged Out!!!")';
	echo '</script>';
header( "refresh:0; url=login.php" ); 





?>