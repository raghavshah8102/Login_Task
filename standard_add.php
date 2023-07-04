<html>
    <head>
        <title>Add Standard</title>
    </head>

    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            Add Standard : <input type="text" name="standard" placeholder="Add Standard">
            <button type="text" name="submit"class="submit">Submit</button>
        </form>
    </body>
</html>
<?php include "db.php";



if(isset($_POST['submit'])){
    $standard = $_POST['standard'];

    $query = "INSERT INTO `standard` (`standard`) VALUES ('$standard')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Standard added successfully";
        
    }else{
        echo "Standard is not added" . mysqli_error($connection);
    }
}




?>