<?php
session_start();
session_destroy();
unset($_SESSION['id']);
unset($_SESSION['n']);
header('location:logins.php');
?>