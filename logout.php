<?php 

session_start();
session_destroy();
header("Location:/BWB/index.php");
exit;

?>