<?php 
include "db.php";
include "functions.php";

global $connection;

if (isset($_POST['update'])) {
    editFun();
}


?>
<html>

<head>
    <title>Update</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">

        <h1>Edit Table</h1>

        <label>User Name :</label>
        <input type="text" value="<?php echo $row['username'] ?>" name="username"><br><br>
        <label>Email :</label>
        <input type="text" value="<?php echo $row['email'] ?>" name="email"><br><br>
        <label>Roll Number :</label>
        <input type="text" value="<?php echo $row['Roll_no'] ?>" name="Roll_no"><br><br>
        <label>City :</label>
        <input type="text" value="<?php echo $row['city'] ?>" name="city"><br><br>
        <label>Password :</label>
        <input type="password" value="<?php echo $row['password'] ?>" name="password"><br><br>
        <label>Upload Image</label>
        <input type="file" value="<?php echo $row['Image']?>" name="Image"><br><br>
        <label>Update Values</label>
        <input type="submit" value="update" name="update">
    </form>
</body>

</html>