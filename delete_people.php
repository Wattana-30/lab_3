<?php
require("connect_db.php");

$id=$_POST["id"];

$sql="DELETE FROM WATTANA WHERE id=$id";
$conn->query($sql);
header( "location: list.php" );
?>