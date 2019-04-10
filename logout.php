<?php
include('process_login.php');
session_destroy();
echo "Logout.....................";
header("refresh:0;url='index.php'");
?>