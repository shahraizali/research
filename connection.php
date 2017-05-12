<?php

$connectstr_dbhost = 'localhost';
$connectstr_dbname = '';
$connectstr_dbusername = 'root';
$connectstr_dbpassword = '';


    mysql_connect($connectstr_dbhost , $connectstr_dbusername , $connectstr_dbpassword);
    $selected = mysql_select_db("research");
    
?>