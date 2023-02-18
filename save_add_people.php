<?php
require("connect_db.php");

$id=$_POST["id"];
$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$marry_status=$_POST["marry_status"];

echo "id:$id<br>";
echo "name:$name<br>";
echo "age:$age<br>";
echo "gender:$gender<br>";
echo "marry_status:$marry_status<br>";

$sql="INSERT INTO WATTANA(name,age,gender,marry_status)";
$sql.=" VALUES('$name','$age','$gender','$marry_status')";
$conn->query($sql);
header( "location: list.php" );
?>