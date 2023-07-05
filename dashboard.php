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
  .sidebar {
    height: 100%;
    width: 200px;
    position: absolute;
    left: 0;
    top: 0;
    padding-top: 40px;
    background-color: lightblue;
}.sidebar div {
    padding: 8px;
    font-size: 24px;
    display: block;
}.body-text {
    margin-left: 200px;
    font-size: 18px;
}
a{
    text-decoration: none;

}
button{ 
  background-color: lightcoral; 
  border: none;
  color: blue;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 5px;
  padding: 10px;
  width: 70%;
}
    </style>

    </style>
    <body>
        <div class="container">
            <?php include "db.php";

            ?>
           <div class="body-text">
           <h1>Dashboard</h1>
             <h3>Hello <?php echo $row['username']?> You're <?php echo $row['access_type'] ?></h3>
        
        </div>
        <div class="sidebar">
        <ul class="sidebar-nav">
            <h2>Menu</h2>
        <a href="adduser.php"><button>Add User</button></a><br><br>
        <a href="view_user.php"><button>View User</button></a><br><br>
        <?php
        if($row['access_type'] == 'admin' || $row['access_type'] == 'teacher'){ ?>
        <a href="subject.php"><button> Subject</button></a><br><br>
        <a href="standard.php"><button>Standard</button></a><br><br>
        <a href="chapter.php"><button>Chapter</button></a><br><br>
        <a href="assign_sub.php"><button>Assign Subject</button></a><br><br>
        <a href="assign_standard.php"><button>Assign Standard</button></a><br><br>
       
        <?php
    }
    if($row['access_type'] == 'admin'){
        ?>
    <a href="assign_chap.php"><button>Assign Chapter</button></a><br><br>
    <?php
    }
    ?>
        <a href="logout.php"><button>Logout</button></a>
        </ul>
        </div>
        </div>   
    </body>
</html>