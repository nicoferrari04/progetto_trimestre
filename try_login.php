<?php
require('_config.php');
require('_dbFunc.php');

$conn=db_connect();

$user=$_GET["user"];
$pw=$_GET["pw"];




trylogin($conn,$user,$pw);


?>
