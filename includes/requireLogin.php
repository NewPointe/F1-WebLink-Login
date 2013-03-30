<?php
if($_SESSION['iCode'] == null){
    $currentFile = $_SERVER["PHP_SELF"];
    $file = Explode('/', $currentFile);
    $currentpage = $file[count($file) - 1] . "?" . $_SERVER["QUERY_STRING"];
    $_SESSION['redirectTo']=$currentpage;
    print '<script language="Javascript">document.location.replace("login");</script>';
}else{
    $loggedin = true;
    //show the page
}
?>