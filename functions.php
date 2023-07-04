<?php include "db.php";

function deleteFun($connection){
    $id = $_GET['delete'];

    $query = "DELETE FROM register where id = $id";

    $result = mysqli_query($connection,$query);

    if(!$result){
        echo "Record is not deleted try again";
}else{
    echo "Record is deleted";
    header("Location: dashboard.php");
}
}

function editFun(){
    global $connection;
    $id = $_GET['edit'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $Roll_no = $_POST['Roll_no'];
    $city = $_POST['city'];
    $password = $_POST['password'];

    $query1 = "UPDATE `register` SET `username`='$username',`email`='$email',`Roll_no`='$Roll_no',`city`='$city',`password`='$password' WHERE `id`='$id'";

   

    $result1 = mysqli_query($connection, $query1);

    if (!$result1) {
        echo "Data is not Updated" . mysqli_error($connection);
    } else {
        echo "Data has been updated";
        header("Location: dashboard.php");
    }
}

function loginFun($connection){
    $email = $_POST['email'];
$pwd = $_POST['password'];
$query = " SELECT * FROM register WHERE email = '$email' && password = '$pwd'";
$result = mysqli_query($connection,$query);

if(mysqli_num_rows($result) > 0){
    session_start();
    $_SESSION['loggin'] = true;
    $_SESSION['email'] = $email;
  header('Location: dashboard.php'); 

}else{
  echo "Check Email id or Password";
  
}
}

function registerFun($connection){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $Roll_no = $_POST['Roll_no'];
    $city = $_POST['city'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm_password'];
    $accesstype = $_POST['access_type'];

    if($password == $cpassword){

    $query = "INSERT INTO register (username, email, Roll_no, city, password) VALUES ('$username','$email','$Roll_no','$city','$password')";
        
    $result = mysqli_query($connection, $query);
    
    $userid = mysqli_insert_id($connection);

    $query1 = "SELECT `id` FROM `accessType` WHERE access_type = '$accesstype'";

    $result5 = mysqli_query($connection,$query1);

    $row = mysqli_fetch_assoc($result5);
    $accesstype = $row['id'];
    $user_table = "INSERT INTO `userType` (`user_id`, `user_access_type`) VALUES ( '$userid', '$accesstype')";
    mysqli_query($connection,$user_table);
    if(!$result){
                echo "Data is not updated" . mysqli_error($connection);
            }else{
                echo "Data is updated";
                header("Location: dashboard.php");
}
    }
}


function viewFun($connection){
    $id = $_GET['view'];

    $query = "SELECT * FROM register WHERE id=$id";
    $result = mysqli_query($connection,$query); 
    $data = mysqli_fetch_assoc($result);
    if($data){
    $id = $data['id'];
    $username = $data['username'];
    $email = $data['email'];
    $Roll_no = $data['Roll_no'];
    $city = $data['city'];
    $password = $data['password'];

    }else{
        echo "Error in fetching data";
    }

    foreach($data as $column => $value){
        echo $column." "."-->";
        echo $value."<br>";
    }
}

?>