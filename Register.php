<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Register</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<style>
    body {
  align-items: center;
  background-color: #000;
  display: flex;
  justify-content: center;
  height: auto;
}

.form {
  background-color: #15172b;
  border-radius: 20px;
  box-sizing: border-box;
  padding: 20px;
  width: 320px;
}

.title {
  color: #eee;
  font-family: sans-serif;
  font-size: 36px;
  font-weight: 600;
  margin-top: 30px;
}

.subtitle {
  color: #eee;
  font-family: sans-serif;
  font-size: 16px;
  font-weight: 600;
  margin-top: 10px;
}

.input-container {
  height: 50px;
  position: relative;
  width: 100%;
}

.ic1 {
  margin-top: 40px;
}

.ic2 {
  margin-top: 30px;
}

.input {
  background-color: #303245;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #eee;
  font-size: 18px;
  height: 100%;
  outline: 0;
  padding: 4px 20px 0;
  width: 100%;
}

.cut {
  background-color: #15172b;
  border-radius: 10px;
  height: 20px;
  left: 20px;
  position: absolute;
  top: -20px;
  transform: translateY(0);
  transition: transform 200ms;
  width: 76px;
}

.cut-short {
  width: 50px;
}

.input:focus ~ .cut,
.input:not(:placeholder-shown) ~ .cut {
  transform: translateY(8px);
}

.placeholder {
  color: #65657b;
  font-family: sans-serif;
  left: 20px;
  line-height: 14px;
  pointer-events: none;
  position: absolute;
  transform-origin: 0 50%;
  transition: transform 200ms, color 200ms;
  top: 20px;
}

.input:focus ~ .placeholder,
.input:not(:placeholder-shown) ~ .placeholder {
  transform: translateY(-30px) translateX(10px) scale(0.75);
}

.input:not(:placeholder-shown) ~ .placeholder {
  color: #808097;
}

.input:focus ~ .placeholder {
  color: #dc2f55;
}

.submit {
  background-color: #08d;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #eee;
  cursor: pointer;
  font-size: 18px;
  height: 50px;
  margin-top: 38px;
  outline: 0;
  text-align: center;
  width: 100%;
}

.submit:active {
  background-color: #06b;
}
p{
    color: white;
    font-family: sans-serif;
}

</style>
<body>
<div class="form">
    <form action="register_page.php" method="POST" enctype="multipart/form-data">
      <div class="title">Welcome</div>
      <div class="subtitle">Let's create your account!</div>
      <div class="input-container ic1">
        <input id="username" name="username" class="input" type="text" placeholder=" " required/>
        <div class="cut"></div>
        <label for="username" class="placeholder">Username</label>
      </div>

      <div class="input-container ic2">
        <input id="email" name="email" class="input" type="email" placeholder=" " required/>
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Email</label>
      </div>
      
      <div class="input-container ic2">
        <input id="Roll_no" name="Roll_no" class="input" type="text" placeholder=" " required/>
        <div class="cut"></div>
        <label for="Roll_no" class="placeholder">Roll Number</label>
      </div>

      <div class="input-container ic2">
        <input id="city" name="city" class="input" type="text" placeholder=" " required/>
        <div class="cut"></div>
        <label for="city" class="placeholder">City</label>
      </div>
      
      <div class="input-container ic2">
        <input id="password" name="password" class="input" type="password" placeholder=" " required/>
        <div class="cut cut-short"></div>
        <label for="password" class="placeholder">Password</label>
      </div>
      <div class="input-container ic2">
        <input id="confirm_password" name="confirm_password" class="input" type="password" placeholder=" " required/>
        <div class="cut cut-short"></div>
        <label for="confirm_password" class="placeholder">Confirm Password</label>
      </div>
      <div class="input-container ic2">
        <select class="input" name="access_type">
          <option>Select Access Type</option>
          <?php include "db.php";

$query = "SELECT * FROM accessType";

$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($result)){
    $id = $row['access_type'];
    echo "<option value='$id'>$id</option>"; 


} 
 ?>
        </select>
      </div>
      <p>Already have account?</p><a style="color: lightblue;font-family: sans-serif;" href="login.php">login</a>
      <button type="text" name="submit"class="submit">Submit</button>
    </div>
    </form>

 

</body>
</html>