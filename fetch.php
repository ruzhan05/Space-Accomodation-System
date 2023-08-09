<?php


include 'db_conn.php';

$sql = "SELECT * FROM library WHERE Id='" . $_GET["custId"] . "'"; // Fetch data from the table customers using id

$result=mysqli_query($dbCon,$sql);

$customer = mysqli_fetch_assoc($result);


?>