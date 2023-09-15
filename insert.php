<?php
include ("config.php");
$LIST = $_POST['list'];
mysqli_query($conn, "INSERT INTO `tabletodo`(`list`) VALUES ('$LIST');");
header("location: tlist.php");
?>
