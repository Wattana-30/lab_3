<?php
require("connect_db.php");


$sql = "SELECT id, name, age, gender, marry_status FROM survey";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["gender"]=="M"){
        if($row["age"]<15){
            echo"ด.ช.".$row["name"]."<br>";
        }
        else{
          echo"นาย".$row["name"]."<br>";
        }   
    }
    else if($row["gender"]=="F"){
      if($row["age"]<15){
        echo"ด.ญ.".$row["name"]."<br>";
      }
      else{
        if($row["marry_status"]=="M"){
          echo"นาง".$row["name"]."<br>";
        }
        else{
          echo"นางสาว".$row["name"]."<br>";
        }
      }
    }
  }
} else {
  echo "0 results";
}
$conn->close();
?>