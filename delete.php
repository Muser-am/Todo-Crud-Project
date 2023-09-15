<?php
include ("config.php");
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM `tabletodo` WHERE id = $id");
header("location:tlist.php");
?>