<html>
    <head>
        <title>Add Chapter</title>
    </head>

    <body>
        <form action="chapter_add.php" method="POST" enctype="multipart/form-data">
            Add Subject : <input type="text" name="chapter_name" placeholder="Add Chapter">
            <button type="text" name="submit"class="submit">Submit</button>
        </form>
    </body>
</html>
<?php include "db.php";



if(isset($_POST['submit'])){
    $chapter = $_POST['chapter_name'];

    $query = "INSERT INTO chapter (chapter_name) VALUES ('$chapter')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Chapter added successfully";
        
    }else{
        echo "Chapter is not added" . mysqli_error($connection);
    }
}




?>