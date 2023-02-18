<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
require("connect_db.php");
<<<<<<< HEAD
if(isset($_GET["keyword"])){
  $keyword=$_GET["keyword"];
}else{
  $keyword="";
}
?>
<form action="list.php" method="get">
  Keyword:<input type="text" name="keyword" value="<?php print($keyword);?>">
  <input type="submit" value="Search"><br>
</form>
<?php
$sql = "SELECT id, name, age, gender, marry_status FROM WATTANA WHERE name LIKE '%$keyword%'";
=======


$sql = "SELECT id, name, age, gender, marry_status FROM survey";
>>>>>>> 71686749327f8b9d552935a0bdea7bef46a99a4f
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
<<<<<<< HEAD
    if($row["gender"]=="m"){
        if($row["age"]<15){
            echo "ด.ช." . $row["name"];
        }else{
            echo "นาย" . $row["name"];
        }
    }else{
      if($row["marry_status"]=="m"){
        echo "นาง" . $row["name"];
      }else{
        if($row["age"]<15){
          echo "ด.ญ." . $row["name"];
        }else{
          echo "น.ส." . $row["name"];
=======
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
>>>>>>> 71686749327f8b9d552935a0bdea7bef46a99a4f
        }
      }
    }
    ?>
    <a href="edit_people.php?id=<?php print($row["id"]);?>">Edit</a>
    <a href="delete_people.php?id=<?php print($row["id"]);?>" 
      onclick="return confirm('Are you sure to delete <?php print($row["name"]);?>')">Delete</a>
    <br>
    <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<a href="add_people.php">Add People</a>
</body>
</html>
