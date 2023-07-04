<?php
if(isset($_POST['subject'])){
    global $connection;
    ?>
    <?php include "db.php";

$query = "SELECT * FROM `subject`";
$result = mysqli_query($connection,$query); 
if(mysqli_num_rows($result)>0){
    ?>
    <h1><center>View Subject</center></h1>
    <table align="center"border="1px" style="width:800px;
    padding:5px;">
    <tr><center>
        <th>ID</th>   
        <th>Subject Name</th>
        <th>Action</th>
    </tr></center>
        <?php
        while($row = $result->fetch_assoc()){
            ?>
        <tr>
            <td><center><?php echo $row['id'];?></center></td>
            <td><center><?php echo $row['subject_name'];?></center></td>
            <td>
                <center>
            <button><a href="subject_edit.php?edit=<?php echo $row['id']?>">EDIT</a></button>
            <button><a href="subject_delete.php?delete=<?php echo $row['id'];?>">DELETE</a></button>
            </center>
        </td>
        </tr>
        
        <?php 
        }
}
?>
    </table>
    <br>
    <center><button><a href="subject_add.php?view=<?php echo $row['id']?>">ADD SUBJECT</a></button></center><br>
    <center><button><a href="dashboard.php">Dashboard</a></button></center><br>
    
<?php

}

?>