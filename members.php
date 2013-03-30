<?php
session_start();
include ("includes/requireLogin.php");
//Just echoing out some session variables to show we have them
echo "First Name = " . $_SESSION['firstName'] . "<br/>";
echo "Last Name = " . $_SESSION['lastName'] . "<br/>";
echo "iCode = " . $_SESSION['iCode'] . "<br/>";
echo "Person ID = " . $_SESSION['personID'];




?>

<br><br><br><br><br>
First Name: <input type="text" name="firstName" value="<?php echo $_SESSION['firstName']?>" /><br>
Last Name: <input type="text" name="firstName" value="<?php echo $_SESSION['lastName']?>" />