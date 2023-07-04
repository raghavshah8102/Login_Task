<?php 
include "db.php";

global $connection;

if (isset($_POST['update'])) {
    $id = $_GET['edit'];
    $subject = $_POST['chapter_name'];
     $query = "UPDATE `chapter` SET `chapter_name`='$subject' WHERE `id`='$id'";
     $result = mysqli_query($connection, $query);
print_r($result);
die();
    if (!$result) {
        echo "Data is not Updated" . mysqli_error($connection);
    } else {
        echo "Data has been updated";
        header("Location: dashboard.php");
    }
}
?>
<html>

<head>
    <title>Update</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">

        <h1>Edit Table</h1>

        <label>chapter Name :</label>
        <input type="text" value="<?php echo $row['chapter_name'] ?>" name="chapter_name"><br><br>
        <label>Update Values</label>
        <input type="submit" value="update" name="update">
    </form>
</body>

</html>