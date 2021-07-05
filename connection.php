<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS','');
define('DB_NAME','project_db');

// Conection
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Check Connection
if(!$con)
{
    header("Location:../errors/db.php");
    die();
}

?>

