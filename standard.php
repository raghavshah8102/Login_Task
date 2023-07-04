<?php
if(isset($_POST['standard'])){
    global $connection;
    ?>
    <?php include "db.php";

$query = "SELECT * FROM `standard`";
$result = mysqli_query($connection,$query); 
if(mysqli_num_rows($result)>0){
    ?>
    <h1><center>Standard</center></h1>
    <table align="center"border="1px" style="width:800px;
    padding:5px;">
    <tr><center>
        <th>ID</th>   
        <th>Standard</th>
        <th>Action</th>
    </tr></center>
        <?php
        while($row = $result->fetch_assoc()){
            ?>
        <tr>
            <td><center><?php echo $row['id'];?></center></td>
            <td><center><?php echo $row['standard'];?></center></td>
            <td>
            <center>
            <button><a href="standard_edit.php?edit=<?php echo $row['id']?>">EDIT</a></button>
            <button><a href="standard_delete.php?delete=<?php echo $row['id'];?>">DELETE</a></button>
        </td>
        </tr></center>
        
        <?php 
        }
}
?>
    </table>
    <br>
    <center>
    <button><a href="standard_add.php?view=<?php echo $row['id']?>">ADD STANDARD</a></button>
    <button><a href="dashboard.php">Dashboard</a></button></center>
<?php

}

?>