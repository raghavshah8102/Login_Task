<html>
    <head>
        <title>Add Subject</title>
    </head>

    <body>
        <form action="subject_add.php" method="POST" enctype="multipart/form-data">
            Add Subject : <input type="text" name="subject_name" placeholder="Add Subject">
            <button type="text" name="submit"class="submit">Submit</button>
        </form>
    </body>
</html>
<?php include "db.php";



if(isset($_POST['submit'])){
    $subject = $_POST['subject_name'];

    $query = "INSERT INTO subject (subject_name) VALUES ('$subject')";
    $result = mysqli_query($connection, $query);
    print_r($result);
    if($result){
        echo "Subject added successfully";
        
    }else{
        echo "Subject is not added" . mysqli_error($connection);
    }
}




?>