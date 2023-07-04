<?php include "db.php";

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $query = "DELETE FROM `standard` where id = $id";

    $result = mysqli_query($connection,$query);

    if(!$result){
        echo "Record is not deleted try again";
}else{
    echo "Record is deleted";
    header("Location: dashboard.php");
}
}


?>