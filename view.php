<h2><b>VIEW DATA</b></h2>
<?php include "db.php";
include "functions.php";

if(isset($_GET['view'])){

    viewFun($connection);
}

?>
<br>
<button><a href="dashboard.php">Dashboard</a></button>
    