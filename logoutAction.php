<?php
if (!isset($_SESSION)) {
session_start();
}
session_unset();
session_destroy();
print '<script language="Javascript">document.location.replace("dashboard");</script>';
?>
