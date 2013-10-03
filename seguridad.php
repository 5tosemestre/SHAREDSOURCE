<?php
session_start();
if(!isset($_SESSION['k_username']) && !isset($_SESSION['k_nam']) && !isset($_SESSION['k_name']))
{
header("location:index.php");
}

?>