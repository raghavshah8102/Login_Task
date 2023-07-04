<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Assign Standard</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Assign Standard to Student</h1>
    <form action="assign_standard.php" method="post">
    <select name="student">
    <option value="">Select Student</option>
    <?php include "db.php";

    $sql = "SELECT register.username FROM register INNER JOIN userType ON register.id = userType.user_id INNER JOIN accessType ON userType.user_access_type = accessType.id WHERE accessType.access_type = 'student'";
    $result = mysqli_query($connection, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $studentName = $row['username'];
            // $id = $row['id'];
            echo "<option>$studentName</option>";
        }
    }
    

    ?>
</select>
<select name="standard">
<option value="">Select a standard</option>
<?php include "db.php";
$sql = "SELECT * FROM standard";
$result = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $name = $row['standard'];
    // $id = $row['id'];
echo "<option>$name</option>";
}
?>
</select>
<input type="submit" name="assign_standard"value="Assign Standard">
    </form>
</body>
</html>
<?php include "db.php";
if(isset($_POST['assign_standard'])){
    global $connection;

    $studName = $_POST['student'];
    $stdName = $_POST['standard'];

    $studid=mysqli_insert_id($connection);
    $query = "select id from register where username='$studName'";
    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($result);
    $studid = $row['id'];

    $stdid=mysqli_insert_id($connection);
    $query1 = "select id from standard where standard=$stdName";
    $result1 = mysqli_query($connection,$query1);
    $row = mysqli_fetch_assoc($result1);
    $stdid = $row['id'];

    $query2 = "INSERT INTO `student_standard`(`student_id`, `standard_id`) VALUES($studid,$stdid)"; 
    $result2 = mysqli_query($connection,$query2);
    if($result2){
        echo "<script>alert('data has been added')</script>";
    } else{
        echo "something went wrong".mysqli_error($connection);
    }

}



    ?>

