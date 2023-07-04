<!DOCTYPE html>
<html>
<head>
<title>Assign Chapters to Subjects</title>
</head>
<body>
<h1>Assign Chapters to Subjects</h1>
<form action="assign_chap.php" method="post">
<select name="subject">
<option value="">Select a subject</option>
<?php include "db.php";
$sql = "SELECT * FROM subject";
$result = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $id= $row['id'];
echo "<option value='$id'>$id</option>";
}
?>
</select>
<br>
<br>
<select name="chapter">
<option value="">Select a chapter</option>
<?php
$sql = "SELECT * FROM chapter";
$result = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
echo "<option value='$id'>$id</option>";
}
?>
</select>
<br>
<br>
<input type="submit" name="assign_chapter"value="Assign Chapter"><br><br>
<button><a href="dashboard.php">Home Page</a></button>
</form>
</body>
</html>
<?php
if (isset($_POST['assign_chapter'])) {

    $chapter_name = $_POST['chapter'];
    $subject_name = $_POST['subject'];

    $assign_chap_query = "insert into chapter_subject (chap_id, sub_id) values ('$chapter_name', '$subject_name')";
    $result = mysqli_query($connection, $assign_chap_query);
    if ($result) {
        $message = 'Chapter is assign to subjects.';
        echo '<script>alert("' . $message . '");
   window.location.href="assign_chap.php";</script>';
    } else {
    }
}
?>