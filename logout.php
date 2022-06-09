<?php
ob_start(); session_start();

//session bitir
session_destroy();
header("Location:index.php")

?>