<?php include "db.php";
session_start();
$email = $_SESSION['email'];

$query1 = "SELECT accessType.access_type, register.username FROM register INNER JOIN userType ON register.id = userType.user_id INNER JOIN accessType ON userType.user_access_type = accessType.id WHERE register.email = '$email'";
$result1 = mysqli_query($connection, $query1);
$row = mysqli_fetch_assoc($result1);


?>
<?php
if(!(isset($_SESSION['loggin'])) || $_SESSION['loggin'] !== true){
    header("Location: login.php");
    exit();

    
}

?>
<html>
    <head>
        <title>Dashboard</title>
    </head>
    <style>
        body{
            background: darkgray;
            font-family: sans-serif;

        }
        h1{
            font-size: 40px;
            font-weight: bold;
            color: #4a4a4a;
            margin-bottom: 30px;
        }
        
        .btn{
            top:50%;
            background-color:#0a0a23;
            color: #fff;
            border:none; 
            border-radius:10px; 
            padding:15px;
            min-height:30px; 
            min-width: 120px;
            
  }
    </style>

    </style>
    <body>
        <div class="container">
            <?php include "db.php";

            ?>
             <h3>Hello <?php echo $row['username']?> You're <?php echo $row['access_type'] ?></h3>
        <h1>Dashboard</h1>
        <form action="adduser.php"method="POST" enctype="multipart/form-data">
            <button class="btn" type="submit" name="adduser">Add User</button>
        </form>
        <form action="view_user.php" method="post" enctype="multipart/form-data">
        <button class="btn" type="submit" name="view">View</button>
        </form>
        <?php
        if($row['access_type'] == 'admin' || $row['access_type'] == 'teacher'){ ?>

        <form action="subject.php" method="post" enctype="multipart/form-data">
            <button class="btn" type="submit" name="subject">Subject</button>
        </form>
        <form action="standard.php" method="post" enctype="multipart/form-data">
            <button class="btn" type="submit" name="standard">Standard</button>
        </form>
        <form action="chapter.php" method="post" enctype="multipart/form-data">
            <button class="btn" type="submit" name="chapter">Chapter</button>
        </form>
       
        <form action="assign_sub.php"method="POST"enctype="multipart/form-data">
            <button class="btn"type="submit" name="Assign Sub">Assign Sub</button>
        </form>
        <form action="assign_standard.php"method="POST"enctype="multipart/form-data">
            <button class="btn"type="submit" name="Assign Standard">Assign Standard</button>
        </form>
        <?php
    }
    if($row['access_type'] == 'admin'){
        ?>
        <form action="assign_chap.php"method="POST"enctype="multipart/form-data">
        <button class="btn"type="submit" name="Assign Chap">Assign Chap</button>
    </form>
    <?php
    }
    ?>
        <form action="logout.php"method="POST"enctype="multipart/form-data">
            <button class="btn"type="submit"name="logout">Logout</button>
        </form>
        </div>
        
    </body>
</html>