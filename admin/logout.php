<?php
session_start();
unset($_SESSION["mail"]);
unset($_SESSION["name"]);
unset($_SESSION["phno"]);
unset($_SESSION["pwd"]);
header("Location:../user_dashboard.html");
?>