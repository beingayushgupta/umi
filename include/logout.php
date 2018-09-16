<?php

session_start();
unset($_SESSION['umiId']);
session_destroy();
header("Location: ../index.php");
?>