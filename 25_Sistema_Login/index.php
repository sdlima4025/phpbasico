<?php
session_start();

if (isset($_SESSION['id']) && empty($_SESSION['id'])== false) {
   
    echo    "ÁREA RESTRITA";
    
}else {
    header("Location: login.php");
}

?>