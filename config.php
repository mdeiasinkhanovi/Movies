<?php

$host = "localhost";

$user = "root";

$dbpassword = "";

$database = "movie";

$connect = mysqli_connect($host ,$user ,$dbpassword);

mysqli_select_db($connect ,$database);

?>
