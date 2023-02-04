<?php
require("connect_db.php");
$id = $_GET["id"];

$sql = "SELECT id, name, age, gender, marry_status FROM WATTANA where id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
<form action="save_edit_people.php" method="post">
    Name: <input type="text" name="name" value="<?php echo $row["name"];?>"><br>
    Age: <input type="text" name="age" value="<?php echo $row["age"];?>"><br>
    Gender: <select name="gender">
        <option value="M" <?php if($row["gender"]=="m") echo "selected";?>>Male</option>
        <option value="F" <?php if($row["gender"]=="f") echo "selected";?>>Female</option>
    </select><br>
    Marry Status: <select name="marry_status">
        <option value="S" <?php if($row["marry_status"]=="s") echo "selected";?>>Single</option>
        <option value="M" <?php if($row["marry_status"]=="m") echo "selected";?>>Married</option>
    </select><br>
    <input type="submit" value="Send">
</form>
<?php
}
?>