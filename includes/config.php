<?php
define('DB_SERVER','localhost');
define('DB_USER','litemed1_suser');
define('DB_PASS' ,'123Pass!1000000');
define('DB_NAME', 'litemed1_sdb');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>