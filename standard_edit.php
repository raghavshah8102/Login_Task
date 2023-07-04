<?php 
include "db.php";

global $connection;

if (isset($_POST['update'])) {
    $id = $_GET['edit'];
    $subject = $_POST['standard'];
     $query = "UPDATE `standard` SET `standard`='$subject' WHERE `id`='$id'";
     $result = mysqli_query($connection, $query);
    if (!$result) {
        echo "standard is not Updated" . mysqli_error($connection);
    } else {
        echo "standard has been updated";
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

        <label>Standard :</label>
        <input type="text" value="<?php echo $row['standard'] ?>" name="standard"><br><br>
        <label>Update Values</label>
        <input type="submit" value="update" name="update">
    </form>
</body>

</html>