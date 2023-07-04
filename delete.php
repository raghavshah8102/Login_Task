<h2><b>Delete Data</b></h2>
<?php include "db.php";
include "functions.php";

global $connection;
if(isset($_GET['delete'])){
      deleteFun($connection);
}

?>
<a href="dashboard.php">Home Page</a>