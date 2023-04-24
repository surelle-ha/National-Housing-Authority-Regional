<?php

// PROJECT DETAILS
$__title = "National Housing Authority";
$__envtype = "Development";

if($__envtype == "Production"){
    $__domain = "washityourself.epizy.com"; 
    $__dbserver = "sql107.epizy.com"; 
    $__dbport = "3306";
    $__dbusername = "epiz_33860814"; 
    $__dbpassword = "19mv1M5bAW"; 
    $__dbname = "epiz_33860814_wiylh"; 
}else if($__envtype == "Development"){
    $__domain = "localhost"; 
    $__dbserver = "localhost"; 
    $__dbport = "3306";
    $__dbusername = "root"; 
    $__dbpassword = "root"; 
    $__dbname = "nha_db"; 
}

?>