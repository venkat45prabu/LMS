<?php

$conn = mysqli_connect('localhost','root','');

if(!$conn)
	echo "Not Connected";

$db=mysqli_select_db($conn,'bt');

if(!$db)
	echo "Not Selected";
?>