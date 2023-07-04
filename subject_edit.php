<?php 
include "db.php";

global $connection;

if (isset($_POST['update'])) {
    $id = $_GET['edit'];
    $subject = $_POST['subject_name'];
     $query = "UPDATE `subject` SET `subject_name`='$subject' WHERE `id`='$id'";
     $result = mysqli_query($connection, $query);

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

        <label>Subject Name :</label>
        <input type="text" value="<?php echo $row['subject_name'] ?>" name="subject_name"><br><br>
        <label>Update Values</label>
        <input type="submit" value="update" name="update">
    </form>
</body>

</html>