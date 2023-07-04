<?php include "db.php";
include "functions.php";

if(isset($_POST['login'])){
      loginFun($connection);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<style>
    *{
    box-sizing: border-box;
}
body{
    background-color: steelblue;
    color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    overflow: hidden;
    margin: 0;
    
}
.container{
    background-color: rgba(0,0,0,0.4);
    padding: 20px 40px;
    border-radius: 5px;

}
.container h1{
    text-align: center;
    margin-bottom: 30px;
}
.container a{
    text-decoration: none;
    color: lightblue;
   

}
.btn{
    cursor: pointer;
    display: inline-block;
    width: 100%;
    color: black;
    padding: 15px;
    font-family: inherit;
    font-size: 16px;
    border: 0;
    border-radius: 5px;

}
.btn:focus{
    outline: 0;
}

.btn:active{
    transform: scale(0.98);
}
.text{
    margin-top: 30px;
}
.form-control{
    position: relative;
    margin: 20px 0 40px;
    width: 300px;

}
.form-control input{
    background-color: transparent;
    border: 0;
    border-bottom: 2px #fff solid;
    display: block;
    width: 100%;
    padding: 15px 0;
    font-size: 18px;
    color: #fff;
}
.form-control input:focus,
.form-control input:valid{
    outline: 0;
    border-bottom-color: lightblue;
}
.form-control label{
    position: absolute;
    top: 15px;
    left: 0;
    pointer-events: none;
}
.form-control label span{
    display: inline-block;
    font-size: 18px;
    min-width: 5px;
    transition: 0.3s cubic-bezier(0.68,-.55,0.265,1.55);
}
.form-control input:focus + label span,
.form-control input:valid + label span{
    color: lightblue;
    transform: translateY(-30px);
}
</style>
<body>
    <div class="container">
    <h1>Please Login</h1>
    <form action="login.php" method="POST" enctype="multipart/form-data">
        <div class="form-control">
        <input type="text" name="email" placeholder="Enter Your Email" required>
        </div>
        <div class="form-control">
        <input type="password"  id="checkbox" name="password" placeholder="Enter Your password" required>
        </div>
        <button class="btn" name="login">Login</button>
        <p class="text">Don't have an account? <a href="Register.php">Register</a></p>
    </form>
</div>
</body>
</html>
