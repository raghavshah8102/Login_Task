<?php include "db.php";
include "functions.php";

if(isset($_POST['submit'])){
registerFun($connection);
}else{
    echo "password and confirm password are not same please check it";
}
    
?>

