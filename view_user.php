<?php
// if(isset($_POST['view'])){
    // global $connection;
    ?>
    <?php include "db.php";

$query = "SELECT * from register";
$result = mysqli_query($connection,$query); 
if(mysqli_num_rows($result)>0){
    ?>
    <h1><center>View Data</center></h1>
    <table align="center"border="1px" style="width:800px;
    padding:5px;">
    <tr><center>
        <th>ID</th>   
        <th>User Name</th>
        <th>Email</th>
        <th>Roll Number</th>
        <th>City</th>
        <th>Password</th>
        <th>Action</th>
    </tr></center>
        <?php
        while($row = $result->fetch_assoc()){
            ?>
        <tr>
            <td><center><?php echo $row['id'];?></center></td>
            <td><center><?php echo $row['username'];?></center></td>
            <td><center><?php echo $row['email'];?></center></td>
            <td><center><?php echo $row['Roll_no'];?></center></td>
            <td><center><?php echo $row['city'];?></center></td>
            <td><center><?php echo $row['password'];?></center></td>
            <td>
            <button><a href="view.php?view=<?php echo $row['id']?>">VIEW</a></button>
            <button><a href="edit.php?edit=<?php echo $row['id']?>">EDIT</a></button>
            <button><a href="delete.php?delete=<?php echo $row['id'];?>">DELETE</a></button>
        </td>
        </tr>
        
        <?php 
        }
}
?>
    </table>
    <br>
    <center><button><a href="dashboard.php">Dashboard</a></button></center>
<?php

// }

?>