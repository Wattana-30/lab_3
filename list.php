<?php
require("connect_db.php");


$sql = "SELECT id, name, age, gender, marry_status FROM WATTANA";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"] . " Name: " . $row["name"]. " " . " Age: ". $row["age"] . "<br>";
    if($row["gender"]=="m"){
        if($row["age"]<15){
            echo"Mr.".$row["name"]."<br>";
        }
    }
  }
} else {
  echo "0 results";
}
$conn->close();
?>