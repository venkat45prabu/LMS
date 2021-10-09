<!-- <?php
include 'conn.php';

$sql="select cvideo from course where id='14' ";
$sql1=mysqli_query($conn,$sql);
?>
<video width="100%" controls>
<source src="<?php 
while($row= mysqli_fetch_assoc($sql1))
{
echo "video:".$row["cvideo"];
} ?>"> </video> -->

