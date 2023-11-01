<?php

include_once ('./db_connect.php');
unset($_SESSION['id']);
session_destroy($_SESSION['id']);
header("Location:index.php")
?>