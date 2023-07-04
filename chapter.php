<?php
if(isset($_POST['chapter'])){
    global $connection;
    ?>
    <?php include "db.php";

$query = "SELECT * FROM `chapter`";
$result = mysqli_query($connection,$query); 
if(mysqli_num_rows($result)>0){
    ?>
    <h1><center>Chapter</center></h1>
    <table align="center"border="1px" style="width:800px;
    padding:5px;">
    <tr><center>
        <th>ID</th>   
        <th>Chapter</th>
        <th>Action</th>
    </tr></center>
        <?php
        while($row = $result->fetch_assoc()){
            ?>
        <tr>
            <td><center><?php echo $row['id'];?></center></td>
            <td><center><?php echo $row['chapter_name'];?></center></td>
            <td>
                <center>
            <button><a href="chapter_edit.php?edit=<?php echo $row['id']?>">EDIT</a></button>
            <button><a href="chapter_delete.php?delete=<?php echo $row['id'];?>">DELETE</a></button></center>   
            
        </tr>
        
        <?php 
        }
}
?>
    </table>
    <br><center>
    <button><a href="chapter_add.php?view=<?php echo $row['id'];?>">ADD CHAPTER</a></button>
        </td><br><br>
    <button><a href="dashboard.php">Dashboard</a></button></center>
<?php

}

?>