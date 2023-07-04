<!DOCTYPE html>
<html>
<head>
<title>Assign Subjects to Standards</title>
</head>
<body>
<h1>Assign Subjects to Standards</h1>
<form action="assign_sub.php" method="post">
<select name="standard">
<option value="">Select a standard</option>
<?php include "db.php";
$sql = "SELECT * FROM standard";
$result = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $name = $row['standard'];
    $id = $row['id'];
echo "<option value='$id'>$name</option>";
}
?>
</select>

<select name="subject">
<option value="">Select a subject</option>
<?php
$sql = "SELECT * FROM subject";
$result = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $name= $row['subject_name'];
    $id = $row['id'];
echo "<option value='$id'>$name</option>";
}
?>
</select>
<input type="submit" name="assign_sub"value="Assign Subject"><br><br>
</form>
</body>
</html>

<?php include "db.php";

if(isset($_POST['assign_sub'])){
    $assign_std = $_POST['standard'];
    $assign_sub = $_POST['subject'];

    $sql = "INSERT INTO subject_standard (standard_id, sub_id) VALUES ('$assign_std', '$assign_sub')";
    print_r($sql);
    $assign_sub_result = mysqli_query($connection,$sql);

}
?>


